<?php
    require("conexao.php");

    $titulo = $_POST['titulo'];
    $diretor =  $_POST['diretor'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];
    $avaliacao = $_POST['avaliacao'];
    
    $sql = "INSERT INTO filmes (titulo, diretor, genero, ano, avaliacao)
    VALUES ('$titulo', '$diretor', '$genero', '$ano', '$avaliacao')";

    if ($conn->query($sql) === TRUE) {
      echo 'Cadastro realizado com sucesso!';
      echo "<a href='index.html'><input type='button' value='Voltar'></a>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>