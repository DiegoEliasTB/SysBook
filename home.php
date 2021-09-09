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
    <span>SysBook 📚</span>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="./pages/books/">Livros</a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Bem vindo <?php echo($_SESSION['email'])?></h2>
  </main>
  <footer>
    Rodapé
  </footer>
</body>
</html>