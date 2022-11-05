<?php

    include_once('../config.php');  

    $historico = "SELECT historico.cod_historico, professor.nome_professor, historico.numero_carrinho, historico.acao, historico.data_retirada, historico.hora_retirada, historico.data_devolvida, historico.hora_devolvida
    FROM historico INNER JOIN professor ON historico.cpf = professor.cpf ORDER BY professor.nome_professor";
    $result = mysqli_query($conexao, $historico);

    echo "<fieldset><legend>Histórico</legend><div id='tabela'><table><tr><th>COD</th><th>Professor</th><th>Carrinho</th><th>Ação</th><th>Data retirada</th><th>Hora retirada</th><th>Data devolvida</th><th>Hora devolvida</th></tr></div></fieldset>";

    /*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
    while($tupla = mysqli_fetch_assoc($result)){

        /*Escreve cada linha da tabela*/
        echo "<tr><td>" . $tupla['cod_historico'] . "</td><td>" . $tupla['nome_professor'] . "</td><td>" . $tupla['numero_carrinho'] . "</td><td>" . $tupla['acao'] . "</td><td>" . $tupla['data_retirada'] . "</td><td>" . $tupla['hora_retirada'] . "</td><td>" . $tupla['data_devolvida'] . "</td><td>" . $tupla['hora_devolvida'] . "</td></tr>";

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
        <legend>Histórico</legend>

        <div id="tabela">
            <table>
                <tr>
                    <th>COD</th>
                    <th>Professor</th>
                    <th>Carrinho</th>
                    <th>Ação</th>
                    <th>Data retirada</th>
                    <th>Hora retirada</th>
                    <th>Data devolvida</th>
                    <th>Hora devolvida</th>
                </tr>
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
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