<?php

    if(isset($_POST["Cadastrar"])) {
        $nome = $_Post["Nome"];
        $cpf = $_POST["CPF"];
        $senha = $_POST["Senha"];
        $check_senha = $_POST["Check-senha"];
    }

    if($senha != $check_senha){
        die("As senhas nãocorrespondem.");
    }

    $host = "localhost";
    $banco = "FormulárioTeste";
    $user = "root";
    $senha_user = "";

    $con = mysqli_connect($host, $banco, $user, $senha);

    if(!$con) {
        die("Conexão falhou." . mysqli_connect_error());
    }

    $sql = "INSERT INTO Clientes(Nome, CPF, Senha) VALUES('$nome', '$cpf', '$senha')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Você foi cadastrado com sucesso.";
    }

?>