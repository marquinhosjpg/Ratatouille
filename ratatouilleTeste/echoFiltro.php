<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<body>
<?php
  include_once("conexaoDB.php");
  /*
  if (isset($_POST['categ'])){
    $type=$_POST['categ'];
} else {
    $type = '';
}
*/

    $type=$_GET['cat'];
    
   switch ($type) {
    case 'salgado':
      $type = 'salgado';
      break;
    case 'doce':
      $type = 'doce';
      break;
    case 'veg':
      $type = 'veg';
      break;
    default:
      $type = 'bebida';
  }

  $sqlselect = "SELECT * FROM  receita WHERE categoria = '$type'";
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