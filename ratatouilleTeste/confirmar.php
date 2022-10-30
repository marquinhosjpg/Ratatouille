<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <input type="password" name="senha1" id="">
       <input type="password" name="senha2" id=""> 
       <input type="submit" value="Confirmar">
    </form>
    <?php
          if (isset($_POST['senha1'])){
            $senha1=$_POST['senha1'];
        } else {
            $senha1 = '';
        }
        if (isset($_POST['senha2'])){
            $senha2=$_POST['senha2'];
        } else {
            $senha2 = '';
        }

        if ($senha1 === $senha2) {
            # code...
        } else {
            echo "Senhas não batem!";
        }
    ?>
</body>
</html>