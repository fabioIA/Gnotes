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

                if($resultado['cpf'] == NULL) {

                    $update = "UPDATE carrinho SET cpf = '$cpf'  WHERE numero_carrinho ='$ncar' AND cpf IS NULL";
                    $query1 = $conexao->query($update);

                    $save = "INSERT INTO historico (data_retirada, hora_retirada, data_devolvida, hora_devolvida, cpf, numero_carrinho, acao) 
                    VALUES ('$hoje', '$hora', 'pendente', 'pendente', '$cpf', '$ncar', 'Retirada')";
                    $query2 = $conexao->query($save);

                }else {

                    echo "<script>alert('Carrinho em uso')</script>";
        
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
    <form action="retirar.php" method="POST">
        <fieldset>
            <legend>Retirar carrinho</legend>
            
            <div class="box">
                <input type="tel" name="ncar" id="ncar" class="Input" autocomplete="off" maxlength="7" oninput="mascaracar(this)" required>
                <label for="ncar" class="labelInput">Número do carrinho</label>
            </div>

            <div class="box">
                <input type="password" name="senha" id="senha" class="Input" maxlenght="50" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            
            <div>
                <p>
                    Declaro concordar e estar ciente dos termos de uso, 
                    e me auto declaro responsável pelo mesmo até a sua devolução
                </p>

                <input type="checkbox" required>
            </div>

            <input type="submit" name="submit" id="submit">
        </fieldset>
    </form>

    <style>
        h2 {
            margin-left: 10px;
        }

        p {
            font-size: 0.7em;
        }

        [type="checkbox"] {
            width: 15px;
            margin-top: -15px;
        }

        [type="submit"] {
            margin-top: -3px;
        }
    </style>

    <script src="../../script.js"></script>
</body>
</html>