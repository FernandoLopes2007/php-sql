<?php
    include __DIR__.'/connection.php';

    try{
        //Verificar se as variáveis $_POST existem
        if(!isset($_POST['nome_txt']) || !isset($_POST['cpf_txt']) || !isset($_POST['data_cli'])){
            header("Location: form-cli.php");
            die();
        }
        //Passar os dados para variáveis
        $nome = $_POST['nome_txt'];
        $cpf = $_POST['cpf_txt'];
        $data_nasc = $_POST['data_cli'];
        //Criar a query para o insert
        $stmt=$conn->prepare("insert into Cliente(nome_cli, cpf_cli, data_nasc_cli)
values(?,?,?);");
        //Passar o parâmetro dos valores
        $stmt->bindParam(1,$nome);
        $stmt->bindParam(2,$cpf);
        $stmt->bindParam(3,$data_nasc);
        //Executando o insert
        $stmt->execute();
        header("Location: form-cli.php");
        die();
    }catch(PDOexception $e){
        echo "ERROR: ".$e->getMessage();
    }
?>