<?php
include 'conexao.php';

class funcionarioDao{
    public function cadastrarFuncionario(Funcionario $f){
        $sql = 'insert into funcionario (codigo_funcionario, nome, cargo) values(?,?,?)';

        $bank = new conexao();
        $con = $bank->getConexao();
        $result = $con->prepare($sql);
        $result->bindValue(1, $f->getCodigo());
        $result->bindValue(2, $f->getNome());
        $result->bindValue(3, $f->getCargo());
        $final = $result->execute();

        if($final){
             echo ("<script LANGUAGE='JavaScript'>
             window.alert('cadastrado com sucesso');
             window.location.href ='index.php';
             </script>"); 
             
         }

    }
}
?>