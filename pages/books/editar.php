<?php
  session_start();
  include('../../connection.php');

  $id = $_GET['id'];  

  $nome_livro = mysqli_real_escape_string($connect, $_POST['nome_livro']);
  $autor = mysqli_real_escape_string($connect, $_POST['autor']);
  $categoria = mysqli_real_escape_string($connect, $_POST['categoria']);
  $idioma = mysqli_real_escape_string($connect, $_POST['idioma']);
  $numero = mysqli_real_escape_string($connect, $_POST['numero']);
  $valor = mysqli_real_escape_string($connect, $_POST['valor']);

  $query = 
  "
    UPDATE livro l SET 
      l.nome_livro = '{$nome_livro}',
      l.autor = '{$autor}',
      l.idioma = '{$idioma}',
      l.num_paginas = {$numero},
      l.valor = {$valor},
      l.categoria = '{$categoria}'
    WHERE l.id_livro = {$id};
  ";

  $result = mysqli_query($connect, $query);

  mysqli_close($connect);
  header('location: index.php');
?>
