<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="DiegoEliasTB">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SysBook - Livros</title>
  <link rel="stylesheet" href="../../styles/home.css">
</head>
<body>
  <header>
    <span>SysBook 📚</span>
    <nav>
      <ul>
        <li><a href="../home/">Home</a></li>
        <li><a href="./">Livros</a></li>
        <li><a href="../../services/logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php 
      //session_start();
      include("../../services/connection.php");

      $style_th = "text-align: center; padding: 15px; margin: 10px;";
      $style_table = "margin: 25px; border: solid 2px grey;border-radius: 6px;";
      $style_tr = "margin: 10px; padding: 2px;";
      $style_td = "text-align: center; padding: 8px; background-color: rgba(53, 47, 47, 0.067);";
      $style_a = "margin-left: 5px";
      $style_img = "width: 25px";

      $query = 
      "
        SELECT 
          id_livro,
          nome_livro,
          autor,
          idioma,
          num_paginas,
          valor,
          categoria
        FROM livro;
      ";

      $result = mysqli_query($connect, $query);
      
      echo("
      <table style='{$style_table}'>
          <thead>
            <tr style='{$style_tr}'>
              <th style='{$style_th}'>Título</th>
              <th style='{$style_th}'>Autor</th>
              <th style='{$style_th}'>Idioma</th>
              <th style='{$style_th}'>Número de páginas</th>
              <th style='{$style_th}'>Valor</th>
              <th style='{$style_th}'>Categoria</th>
            </tr>
          </thead>
          <tbody>    
      ");
    
      while($registro = mysqli_fetch_array($result)) {
        $id_livro = $registro['id_livro'];
        $nome = $registro['nome_livro'];
        $autor = $registro['autor'];
        $idioma = $registro['idioma'];
        $num_paginas = $registro['num_paginas'];
        $valor = $registro['valor'];
        $categoria = $registro['categoria'];
        echo("<tr style='{$style_tr}'>");
        echo("<td style='{$style_td}'>$nome</td>");
        echo("<td style='{$style_td}'>$autor</td>");
        echo("<td style='{$style_td}'>$idioma</td>");
        echo("<td style='{$style_td}'>$num_paginas</td>");
        echo("<td style='{$style_td}'>$valor</td>");
        echo("<td style='{$style_td}'>$categoria</td>");
        echo("
          <td>
            <a style='{$style_a}' href='../updateBook/?id={$id_livro}'>
              <img style='{$style_img}' src='../../assets/icons/edit.svg' alt='Editar'>
            </a>
          </td>
        ");
        echo("
          <td>
            <a href='../../services/deletar.php?id={$id_livro}'>
              <img style='{$style_img}' src='../../assets/icons/trash.svg' alt='Editar'>
            </a>
          </td>
        ");
        echo("</tr>");
        echo("<br>");
      }
      echo("
        </tbody>
        </table>  
      ");

      mysqli_close($connect);
    ?>
    
    <button id="addButton">
      <a href="../addBook/">
        <img src="../../assets/icons/book.svg" alt="adionar livro">
        <span>Adicionar</span>
      </a>
    </button>
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