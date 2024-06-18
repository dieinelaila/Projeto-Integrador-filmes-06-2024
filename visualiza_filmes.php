<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Filmes Cadastrados</title>
</head>

<body>
    <center>
        <h1>Filmes</h1>

        <table border="4">
            <tr>
                <td>ID</td>
                <td>Título</td>
                <td>Diretor</td>
                <td>Gênero</td>
                <td>Ano</td>
                <td>Avaliação</td>
            </tr>
            <?php
                 require("conexao.php");

                 $dados_select = mysqli_query($conn, "SELECT * FROM filmes");


                while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        echo '<td>'.$dado[4].'</td>';
                        echo '<td>'.$dado[5].'</td>';
                        echo '</tr>';
                }
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>