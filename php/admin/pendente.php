<?php

    include_once('../config.php');  

    $historico = "SELECT professor.nome_professor, historico.numero_carrinho, historico.data_retirada, historico.hora_retirada FROM 
    professor INNER JOIN historico ON professor.cpf = historico.cpf AND historico.data_devolvida = 'pendente' ORDER BY professor.nome_professor";
    $result = mysqli_query($conexao, $historico);

    echo "<fieldset><legend>Histórico</legend><div id='tabela'><table><tr><th>Professor</th><th>Carrinho</th><th>Data retirada</th><th>Hora retirada</th></tr></div></fieldset>";

    /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    while($tupla = mysqli_fetch_assoc($result)){

        /*Escreve cada linha da tabela*/
        echo "<tr><td>" . $tupla['nome_professor'] . "</td><td>" . $tupla['numero_carrinho'] . "</td><td>" . $tupla['data_retirada'] . "</td><td>" . $tupla['hora_retirada'] . "</td></tr>";

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
        <legend>Pendentes</legend>
        
        <div id="tabela">
            <table>
                <tr>
                    <th>Professor</th>
                    <th>Carrinho</th>
                    <th>Data retirada</th>
                    <th>Hora retirada</th>
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