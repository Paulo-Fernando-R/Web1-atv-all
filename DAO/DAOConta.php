<?php

class DAOConta
{
    public function listaTodos($user)
    {
        $lista = [];

        $pst = Conexao::getPreparedStatement(
            "select c.* from conta as c 
            inner join usuario as u 
            on u.id = c.id_usuario
            where u.userName = ?;"
        );

        $pst->bindValue(1, $user);
        $pst->execute();

        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Conta $conta)
    {
        $sql = 'insert into conta (id_usuario, nome, valor, vencimento) values(?, ?, ?, ?);';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$conta->getIdUsuario());
        $pst->bindValue(2,$conta->getNome());
        $pst->bindValue(3,$conta->getValor());
        $pst->bindValue(4,$conta->getVencimento());
        
        if($pst->execute())
        {
            return true;
        }
        return false;
        
    }

    public function excluir(Conta $conta)
    {
        $strSql = 'delete from conta where id = ?;';
        $pst = Conexao::getPreparedStatement($strSql);

        $pst->bindValue(1, $conta->getId());

        if($pst->execute())
        {
            return true;
        }
        return false;
    }

    public function atualizar(Conta $conta)
    {
        $strSql = "update conta set nome = ?, valor = ?, vencimento = ? where id = ?;";

        $pst = Conexao::getPreparedStatement($strSql);

        $pst->bindValue(1, $conta->getNome());
        $pst->bindValue(2, $conta->getValor());
        $pst->bindValue(3, $conta->getVencimento());
        $pst->bindValue(4, $conta->getId());
        
        if($pst->execute())
        {
            return true;
        }
        return false;
    }
}