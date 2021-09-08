<?php 
  session_start();
  include('connection.php');

  if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: index.php');
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
    $_SESSION['nome'] = $nome;
    header('location: home.php');
    exit();
  } else {
    header('Location: index.php');
    exit();
  }
?>