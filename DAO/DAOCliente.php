<?php

class DAOCliente
{
    public function listaTodos($user)
    {
        $lista = [];

        $pst = Conexao::getPreparedStatement(
            "select c.* from cliente as c
            inner join usuario as u
            on u.id = c.idUsuario
            where u.userName = ?;"
        );

        $pst->bindValue(1, $user);
        $pst->execute();

        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $cliente)
    {
        $sql = 'insert into cliente (idUsuario, nome, telefone) values(?, ?, ?);';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$cliente->getIdUsuario());
        $pst->bindValue(2,$cliente->getNome());
        $pst->bindValue(3,$cliente->getTelefone());
        
        if($pst->execute())
        {
            return true;
        }
        return false;
        
    }
}