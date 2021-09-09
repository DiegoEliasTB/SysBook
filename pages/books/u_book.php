<!DOCTYPE html>
<html lang="bt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livros</title>
  <link rel="stylesheet" href="../../home.css">
  <link rel="stylesheet" href="form_book.css">
</head>
<body>
  
  <header>
    <span>SysBook 📚</span>
    <nav>
      <ul>
        <li><a href="../../home.php">Home</a></li>
        <li><a href="./">Livros</a></li>
        <li><a href="../../logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <?php 
      $id = $_GET['id']; 
      echo("<form action='editar.php?id={$id}' method='POST'>");
      echo("<h2>teste</h2>");
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
      <div>
        <label for="idioma">Idioma</label>
        <input type="radio" name="idioma" id="" value="ptBr">
        <span>Português</span>
        <input type="radio" name="idioma" id="" value="In">
        <span>Inglês</span>
        <input type="radio" name="idioma" id="" value="Es">
        <span>Espanhol</span>
      </div>
      <label for="numero">Número de páginas</label>
      <input oninput="clickk()" type="range" min="30" max="600" step="1" name="numero" id="numero">
      <span id="numeroValue">300</span>
      
      <label for="valor">Valor</label>
      <input type="text" name="valor">

      <button type="reset" class="cancel">Cancelar</button>
      <button type="submit">Salvar</button>
    </form>
  </main>

  <footer>
    Rodapé
  </footer>
  
  <script src="script.js"></script>
</body>
</html>