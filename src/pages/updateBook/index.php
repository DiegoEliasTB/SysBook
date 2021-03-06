<!DOCTYPE html>
<html lang="bt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="DiegoEliasTB">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SysBook - Livros</title>
  <link rel="stylesheet" href="../../styles/home.css">
  <link rel="stylesheet" href="../../styles/form_book.css">
</head>
<body>
  
  <header>
    <span>SysBook 📚</span>
    <nav>
      <ul>
        <li><a href="../home/">Home</a></li>
        <li><a href="../books/">Livros</a></li>
        <li><a href="../../services/logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <?php 
      $id = $_GET['id']; 
      echo("<form action='../../services/editar.php?id={$id}' method='POST'>");
    ?>
      <label for="nome_livro">Nome</label>
      <input type="text" name="nome_livro">
      <label for="autor">Autor</label>
      <input type="text" name="autor">
      <label for="categoria">Categoria</label>
      <select name="categoria" id="categoria">
        <option value="R">Romance</option>
        <option value="A">Aventura</option>
        <option value="T">Terror</option>
        <option value="F">Ficção</option>
        <option value="D">Didático</option>
      </select>
      <label for="idioma">Idioma</label>
      <div class="radioInput">
        <input type="radio" name="idioma" id="" value="ptBr">
        <span>Português</span>
        <input type="radio" name="idioma" id="" value="In">
        <span>Inglês</span>
        <input type="radio" name="idioma" id="" value="Es">
        <span>Espanhol</span>
      </div>
      <label for="numero">Número de páginas</label>
      <div class="ranged">
        <input oninput="clickk()" type="range" min="30" max="600" step="1" name="numero" id="numero">
        <span id="numeroValue">300</span>
      </div>
      
      <label for="valor">Valor</label>
      <input type="text" name="valor">

      <button type="reset" class="cancel">Cancelar</button>
      <button type="submit">Salvar</button>
    </form>
  </main>

  <footer>
    <a href="https://github.com/DiegoEliasTB/SysBook" target="_blank">
      <img src="../../assets/icons/github.svg" alt="github">
      <span>Deloped by <strong>DiegoEliasTB</strong></span>
    </a>
    <span>SysBook © - Todos os direitos reservados<br>2021</span>
  </footer>
  
  <script src="../../utils/rangeView.js"></script>
</body>
</html>