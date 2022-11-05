<?php

    session_start();

    if(isset($_POST['submit'])) {

        include_once('../config.php');

        $cpf = $_SESSION['cpf'];
        $senha = $_POST['senha'];
        $ncar = $_POST['ncar'];

        $hoje = date('d/m/Y');

        date_default_timezone_set('Brazil/East');
        $hora = date('H:i', time());

        if($senha === $_SESSION['senha']) {

            // Procura algum carrinho que tenha o mesmo núero que o carrinho indicado
            $car = "SELECT cpf FROM carrinho WHERE numero_carrinho ='$ncar'";
            $vcar = $conexao->query($car);

            if(mysqli_num_rows($vcar) > 0) {

                // Vê se o carrinho já têm um cpf
                $procura = mysqli_query($conexao, $car);
                $resultado = mysqli_fetch_assoc($procura);

                if($resultado['cpf'] != NULL) {

                    if($resultado['cpf'] != $cpf) {

                        echo "<script>alert('Este carrinho não está em seu nome')</script>";

                    }else {

                        $update1 = "UPDATE carrinho SET cpf = NULL WHERE numero_carrinho ='$ncar'";
                        $query1 = $conexao->query($update1);

                        $update2 = "UPDATE historico SET data_devolvida = '$hoje' WHERE numero_carrinho ='$ncar'";
                        $query2 = $conexao->query($update2);

                        $update3 = "UPDATE historico SET hora_devolvida = '$hora' WHERE numero_carrinho ='$ncar'";
                        $query3 = $conexao->query($update3);

                        $velho = "SELECT data_retirada, hora_retirada FROM historico WHERE numero_carrinho ='$ncar'";
                        $acha = mysqli_query($conexao, $velho);
                        $valor = mysqli_fetch_assoc($acha);

                        $save = "INSERT INTO historico (data_retirada, hora_retirada, data_devolvida, hora_devolvida, cpf, numero_carrinho, acao) 
                        VALUES ('" . $valor['data_retirada'] . "', '" . $valor['hora_retirada'] . "', '$hoje', '$hora', '$cpf', '$ncar', 'Devolução')";
                        $query = $conexao->query($save);

                    }

                }else {

                    echo "<script>alert('Carrinho sem responsável')</script>";
        
                }

            }else {

                echo "<script>alert('Carrinho inválido')</script>";

            }
            
        }else {

            echo "<script>alert('Senha incorreta')</script>";

        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <form action="devolver.php" method="POST">
        <fieldset>
            <legend>Devolução carrinho</legend>
            
            <div class="box">
                <input type="tel" name="ncar" id="ncar" class="Input" autocomplete="off" maxlength="7" oninput="mascaracar(this)" required>
                <label for="ncar" class="labelInput">Número de carrinho</label>
            </div>

            <div class="box">
                <input type="password" name="senha" id="senha" class="Input" maxlenght="50" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>

            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>

    <script src="../../script.js"></script>
</body>
</html>