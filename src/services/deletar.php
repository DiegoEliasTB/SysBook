<?php
  session_start();
  include('./connection.php');

  $id = $_GET['id'];  

  $query = 
  "
    DELETE FROM livro
    WHERE id_livro = {$id};
  ";

  $result = mysqli_query($connect, $query);
  mysqli_close($connect);

  header('location: ../pages/books/');
?>
