<?php

class DAOFornecedor
{
    public function listaTodos($user)
    {
        $lista = [];

        $pst = Conexao::getPreparedStatement(
            "select f.* from fornecedor as f
            inner join usuario as u
            on u.id = f.idUsuario
            where u.userName = ?;"
        );

        $pst->bindValue(1, $user);
        $pst->execute();

        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Fornecedor $fornecedor)
    {
        $sql = 'insert into fornecedor (idUsuario, nome, telefone) values(?, ?, ?);';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$fornecedor->getIdUsuario());
        $pst->bindValue(2,$fornecedor->getNome());
        $pst->bindValue(3,$fornecedor->getTelefone());
        
        if($pst->execute())
        {
            return true;
        }
        return false;
        
    }
}