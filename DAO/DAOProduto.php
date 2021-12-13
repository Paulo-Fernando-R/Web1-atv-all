<?php

class DAOProduto
{
    public function listaTodos($user)
    {
        $lista = [];

        $pst = Conexao::getPreparedStatement(
            "select p.*, f.nome AS N from produto as p
            inner join usuario as u 
            on u.id = p.idUsuario
            inner join fornecedor as f
            on f.id = p.idFornecedor
            where u.userName = ?;"
        );

        $pst->bindValue(1, $user);
        $pst->execute();

        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }


    public function inclui(Produto $produto)
    {
        $sql = 'insert into produto (idUsuario, idFornecedor, nome, valor) values(?, ?, ?, ?);';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$produto->getIdUsuario());
        $pst->bindValue(2,$produto->getIdFornecedor());
        $pst->bindValue(3,$produto->getNome());
        $pst->bindValue(4,$produto->getValor());
        
        if($pst->execute())
        {
            return true;
        }
        return false;
        
    }

}