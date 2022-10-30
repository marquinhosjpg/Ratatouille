<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<body>
<!-- <form action="" method="post">
  <label for="">Digite o Nome da Receita: </label>
        <input type="text" name="nomeR" id="nomeR" placeholder="nomeR" required><br><br>

        <br><br><input type="submit" value="Consultar"><br><br>
  </form> -->
<?php
  include_once("conexaoDB.php");
  
     
    $nomeR=$_GET['nomeR'];

  $sqlselect = "SELECT * FROM  receita WHERE nome = '$nomeR' ";
  $resultadoselect = @mysqli_query($connect,$sqlselect) or die ("Erro ao consultar receitas");


  while ($registro = mysqli_fetch_array($resultadoselect)) {
    $nome = $registro['nome'];
    $tempoPreparo = $registro['tempoPreparo'];
    $quantidade = $registro['quantidade'];
    $ingredientes = $registro['ingredientes'];
    $modoPreparo = $registro['modoPreparo'];
    $categoria = $registro['categoria'];
    $dataPublicacao = $registro['dataPublicacao'];
    $infoAdicionais = $registro['infoAdicionais'];
    $userName = $registro['userName'];
    $imagem = $registro['imagem'];
   
    echo"<br> <img src='$imagem'><br>  <br>Nome da receita: $nome. <br> <br>Tempo de preparo: $tempoPreparo. <br> <br>Quantidade de Porções: $quantidade.<br> <br>Ingredientes: $ingredientes. <br> <br>Modo de Preparo: $modoPreparo. <br> <br>Categoria: $categoria. <br> <br>Data de Publicação: $dataPublicacao. <br> <br>Informações adicionais: $infoAdicionais.<br>  <br>Usuário: $userName.";
    
  } 

?>


</body>
</html>