<!-- <!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<body>
<?php
  session_start();
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

  $queryQtd = "SELECT COUNT(idReceita) AS qtdReceitas FROM receita WHERE categoria = '$type'";
  $resultQtd = $connect->prepare($queryQtd);
  $resultQtd->execute();

  $result = $resultQtd->get_result()->fetch_assoc();
  $_SESSION['msgTitulo'] = "Quantidade " . $type .": ";
  header("Location: filtro.php");

  $_SESSION['msgSubTitulo'] =  $result['qtdReceitas'];
  header("Location: filtro.php");


  
  $sqlselect = "SELECT * FROM  receita WHERE categoria = '$type'";
  $resultadoselect = @mysqli_query($connect,$sqlselect) or die ("Erro ao consultar receitas");


  while ($registro = mysqli_fetch_array($resultadoselect)) {
    $nome = $registro['nome'];
    $categoria = $registro['categoria'];
    $dataPublicacao = $registro['dataPublicacao'];
    $userName = $registro['userName'];
    //$idReceita = $registro['id'];

    $_SESSION['msgNome'] = "$nome";

    $_SESSION['msgData'] = "$dataPublicacao";
  
    $_SESSION['msgCat'] = "$categoria";

    $_SESSION['msgUser'] = "$userName";
    header("Location: filtro.php");
    
  } 

?>
 


</body>
</html> -->