<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
        $userName = $userName_cookie;
    } 

    if(isset($userName_cookie)){  

    $sqlverifica= "SELECT * FROM  cadastro WHERE userName = '$userName' ";
    $resultadoverifica = @mysqli_query($connect,$sqlverifica);
    
    while ($registro = mysqli_fetch_array($resultadoverifica)) {
      $userName = $registro['userName'];
      $nome = $registro['nome'];
      $email = $registro['email'];

    //   $_SESSION['msgUser'] = $userName;
    //   $_SESSION['msgNome'] = $nome;    
    //   $_SESSION['msgEmail'] = $email;
    //   header("Location: user.php");
    echo"Logado<br>";
    echo $username;
    }  

    if (@mysqli_num_rows($resultadoverifica)==0){
        if (!$resultadoverifica) {
            die ('Query Inválida: ' . @mysqli_error($connect));
            exit;
        } 
  } 
}else {
    //   $_SESSION['msg'] = "Você ainda não é um usuário! <a href='login.php'>Faça Login</a> ou <a href='cad.php'>Cadastre-se</a>";
    //   header("Location: user.php");
       echo"Não logado";
    }

?>
 <?php
        //    if(isset($_SESSION['msg'])){
        //        echo $_SESSION['msg'];
        //        unset ($_SESSION['msg']);
        //    }
       
        ?>
    <div class="user">
    <?php
        //    if(isset($_SESSION['msgUser'])){
        //        echo $_SESSION['msgUser'];
        //        unset ($_SESSION['msgUser']);
        //    }
       
        ?>
    </div>
    <div class="nome">
    <?php
        //    if(isset($_SESSION['msgNome'])){
        //        echo $_SESSION['msgNome'];
        //        unset ($_SESSION['msgNome']);
        //    }
       
        ?>
    </div>
    <div class="email">
    <?php
        //    if(isset($_SESSION['msgEmail'])){
        //        echo $_SESSION['msgEmail'];
        //        unset ($_SESSION['msgEmail']);
        //    }
       
        ?>
    </div>
</body>
</html>