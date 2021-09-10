<?php 
  session_start();
  include('./connection.php');

  if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../../');
  }

  $email = mysqli_real_escape_string($connect, $_POST['email']);
  $senha = mysqli_real_escape_string($connect, $_POST['senha']);

  $query = 
  "
    SELECT 
      u.nome,
	    u.email, 
      u.senha 
    from usuario u
    WHERE u.email = '{$email}' and u.senha = '{$senha}';
  ";

  $result = mysqli_query($connect, $query);
  $row = mysqli_num_rows($result);
  
  while($registro = mysqli_fetch_array($result)) {
    $nome = $registro['nome'];
  }

  if($row == 1) {
    $_SESSION['email'] = $nome;
    header('location: ../pages/home/');
    exit();
  } else {
    header('Location: ../../');
    exit();
  }
?>