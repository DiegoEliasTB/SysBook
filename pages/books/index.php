<!DOCTYPE html>
<html lang="pt-br">
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
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php 
      //session_start();
      include("../../connection.php");

      $style_th = "text-align: center; padding: 15px;";
      $style_table = "margin: 25px; border: solid 2px grey;border-radius: 6px;";
      $style_tr = "margin: 10px; padding: 2px;";
      $style_td = "text-align: center; padding: 5px; background-color: rgba(53, 47, 47, 0.067);";

      $query = 
      "
        SELECT 
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
              <th>Autor</th>
              <th>Idioma</th>
              <th>Número de páginas</th>
              <th>Valor</th>
              <th>Categoria</th>
            </tr>
          </thead>
          <tbody>    
      ");
    
      while($registro = mysqli_fetch_array($result)) {
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
        echo("</tr>");
        echo("<br>");
      }
      echo("
        </tbody>
        </table>  
      ");

      mysqli_close($connect);
    ?>
    <button>Cadastrar</button>
  </main>
  <footer>
  </footer>
</body>
</html>