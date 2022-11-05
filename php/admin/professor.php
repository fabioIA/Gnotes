<?php

    include_once('../config.php');    

    $professores = "SELECT nome_professor, cpf, telefone, sexo FROM professor";
    $result = mysqli_query($conexao, $professores);
    
    echo "<fieldset><legend>Professores</legend><div id='tabela'><table><tr><th>Professor</th><th>CPF</th><th>Telefone</th><th>Sexo</th></tr></div></fieldset>";

    /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    while($tupla = mysqli_fetch_assoc($result)){

         /*Escreve cada linha da tabela*/
         echo "<tr><td>" . $tupla['nome_professor'] . "</td><td>" . $tupla['cpf'] . "</td><td>" . $tupla['telefone'] . "</td><td>" . $tupla['sexo'] . "</td></tr>";

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
    <!-- <fieldset>
        <legend>Professores</legend>

        <div id="tabela">
            <table>
                <tr>
                    <th>Professor</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </table>
        </div>
    </fieldset> -->
</body>
</html>