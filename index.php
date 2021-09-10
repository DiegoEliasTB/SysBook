<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>novaLivraria</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <h1>SysBook</h1>
  <main>
    <form action="login.php" method="POST">
      <label for="email">Email</label>
      <div class="inputLogin" id="inputEmail">
        <input type="email" name="email">
      </div>
      <label for="senha">Senha</label>
      <div class="inputLogin">
        <input type="password" name="senha" id="senha">
        <img id="buttonEye" src="./assets/icons/eye-off.svg" alt="Livros">
      </div>
      <button type="submit">Acessar</button>
    </form>
    <img src="./assets/images/undraw_book.svg" alt="Livros">
  </main>
  <h2>Seus sistema gerenciador de livros<br>e mais!</h2>
  <script src="./script.js"></script>
</body>
</html>