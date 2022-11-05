<?php

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])) {

        //print_r($_REQUEST);

        include_once('config.php');

        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM professor WHERE cpf = '$cpf' and senha = '$senha'";

        $result = $conexao->query($sql);

        if($cpf === '111.111.111-11' && $senha === 'laila') {

            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            
            header("Location: admin/admin.php");
            die();

        }else if(mysqli_num_rows($result) < 1) {

            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);

            header('Location: ../index.php');
            die();

        }else {

            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;

            header('Location: professor/main.php');
            die();

        }

    }else {
        header('Location: ../index.php');
        die();
    }

?>