<?php 
  include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li>Home</li>
        <li><a href="livros.php">Livros</a></li>
        <li>Sair</li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Bem vindo <?php echo($_SESSION['email'])?></h2>
    <button><a href="logout.php">Sair</a></button>
  </main>
  <footer>
    Rodapé
  </footer>
</body>
</html>