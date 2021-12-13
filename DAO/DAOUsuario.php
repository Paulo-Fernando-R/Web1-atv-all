<?php

class DAOUsuario
{
    public function listaTodos()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from usuario');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function login(Usuario $usuario)
    {
        $sql = 'select nome, userName from usuario where userName = ? and senha = ?';
        
        session_start();
        $pst = Conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $usuario->getUserName());
        $pst->bindValue(2, $usuario->getSenha());
        
        $result = [];
        $pst->execute();
        $result = $pst->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;

    }

    public function buscaId(string $userName)
    {
        $sql = 'select id from usuario where userName = ?;';
        
        $pst = Conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $userName);
        
        $result = [];
        $pst->execute();
        $result = $pst->fetchAll(PDO::FETCH_ASSOC);

        $aux = 0;
        $count = 0;
        $id = 0;
        foreach($result as $linha)
            {
                if($count == 0)
                {
       
                    foreach($linha as $atributo=>$valor)
                    {
                        if($aux == 0)
                        {
                            $id = $valor;
                        }
                        $aux++;
                    }
                }
            
                $aux = 0;
                $count++;
            }

        return $id;
    }

    public function verificaUsuario(Usuario $usuario)
    {
        $sql = 'select nome from usuario where userName = ?';
        $pst = Conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $usuario->getUserName());

        $result = [];
        $pst->execute();
        $result = $pst->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;

    }

    public function cadastrar(Usuario $usuario)
    {
        $sql = 'insert into usuario(nome, senha, userName) values(?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $usuario->getNome());
        $pst->bindValue(2, $usuario->getSenha());
        $pst->bindValue(3, $usuario->getUserName());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function inclui(Usuario $usuario)
    {
        $sql = 'insert into usuario(nome, senha, userName) values(?,?,?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $usuario->getNome());
        $pst->bindValue(2, $usuario->getSenha());
        $pst->bindValue(3, $usuario->getUserName());
        if($pst->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function atualizar(Usuario $novo)
    {
        $strSql = 'update usuario set nome = ?, username = ?, senha = ? where usuario.id = ?;';

        $pst = Conexao::getPreparedStatement($strSql);

        $pst->bindValue(1, $novo->getNome());
        $pst->bindValue(2, $novo->getUserName());
        $pst->bindValue(3, $novo->getSenha());
        $pst->bindValue(4, $novo->getId());
        
        if($pst->execute())
        {
            return true;
        }
        return false;
    }

    public function excluir(Usuario $usuario)
    {
        $strSql = 'DELETE FROM usuario where id = ?;';
        $pst = Conexao::getPreparedStatement($strSql);

        $pst->bindValue(1, $usuario->getId());

        if($pst->execute())
        {
            return true;
        }
        return false;
    }


}