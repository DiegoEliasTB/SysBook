<?php 
  session_start();
  include('../../connection.php');

  $nome_livro = mysqli_real_escape_string($connect, $_POST['nome_livro']);
  $autor = mysqli_real_escape_string($connect, $_POST['autor']);
  $categoria = mysqli_real_escape_string($connect, $_POST['categoria']);
  $idioma = mysqli_real_escape_string($connect, $_POST['idioma']);
  $numero = mysqli_real_escape_string($connect, $_POST['numero']);
  $valor = mysqli_real_escape_string($connect, $_POST['valor']);

  $query = 
  "
    INSERT INTO livro (
      nome_livro,
      autor,
      categoria,
      idioma,
      num_paginas,
      valor
    ) VALUES (
      '{$nome_livro}',
      '{$autor}',
      '{$categoria}',
      '{$idioma}',
      {$numero},
      {$valor}
    );
  ";

  $result = mysqli_query($connect, $query);
  mysqli_close($connect);
  header('location: index.php')
?>