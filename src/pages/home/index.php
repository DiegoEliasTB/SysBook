<?php 
  include('../../services/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../../styles/home.css">
</head>
<body>
  <header>
    <span>SysBook 📚</span>
    <nav>
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="../books/">Livros</a></li>
        <li><a href="../../services/logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Bem vindo <?php echo($_SESSION['email'])?></h2>
    <img class="background" src="../../assets/images/backgroundBook.svg" alt="background">
  </main>
  <footer>
    <a href="https://github.com/DiegoEliasTB/SysBook" target="_blank">
      <img src="../../assets/icons/github.svg" alt="github">
      <span>Deloped by <strong>DiegoEliasTB</strong></span>
    </a>
    <span>SysBook © - Todos os direitos reservados<br>2021</span>
  </footer>
</body>
</html>