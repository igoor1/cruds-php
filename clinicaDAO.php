<?php

    include 'conexao.php';

    class clinicaDAao{
        public function consultaLogin(Clinica $clinica){
            $query = 'select login from usuario where login=? and senha=?';
            $conexao = new conexao();
            $con = $conexao->getConexao();
            $valores = $con->prepare($query);
            $valores->bindValue(1, $clinica->getCpf_paciente());
            $valores->bindValue(2, $clinica->getSenha_login());
            $valores->execute();

            if($valores->rowCount()>0){
                $resultado = $valores->fetchAll
                (\PDO::FETCH_ASSOC);
                return $resultado;
            }
        }
    }

?>