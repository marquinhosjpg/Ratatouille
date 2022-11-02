<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recEspecifica.css">
    <title>Página Específica da Receita</title>
</head>
<body>
<form action="consulta.php" method="post">
  <label for="">Digite o Nome da Receita: </label>
        <input type="text" name="nomeR" id="nomeR" placeholder="nomeR" required><br><br>

        <button type="submit" name="consultar" id="send2" required>
        <span>Consultar</span>
        </button>

</form>

    <div class="aviso">
        <?php
           if(isset($_SESSION['msg'])){
               echo $_SESSION['msg'];
               unset ($_SESSION['msg']);
           }
            ?>
    </div>
    <div class="nome">
        <h4>title</h4>
          <?php
           if(isset($_SESSION['msg1'])){
               echo $_SESSION['msg1'];
               unset ($_SESSION['msg1']);
           }
            ?>
    </div>
    <div class="tempo">
        <h4>time</h4>
          <?php
           if(isset($_SESSION['msg2'])){
               echo $_SESSION['msg2'];
               unset ($_SESSION['msg2']);
           }
       
        ?>
    </div>
    <div class="porcoes">
        <h4>porção</h4>
          <?php
           if(isset($_SESSION['msg3'])){
               echo $_SESSION['msg3'];
               unset ($_SESSION['msg3']);
           }
  
       // ?>
    </div>
    <div class="categoria">
        <h4>categoria</h4>
          <?php
           if(isset($_SESSION['msg6'])){
               echo $_SESSION['msg6'];
               unset ($_SESSION['msg6']);
           }
      
       ?>
    </div>
    <div class="ingredientes">
        <h4>ingredientes</h4>
          <?php
           if(isset($_SESSION['msg4'])){
               echo $_SESSION['msg4'];
               unset ($_SESSION['msg4']);
           }  
       ?>
    </div>
    <div class="preparo">
        <h4>modo</h4>
          <?php
           if(isset($_SESSION['msg5'])){
               echo $_SESSION['msg5'];
               unset ($_SESSION['msg5']);
           }
       ?>
    </div>
    
    <div class="separacao"></div>
    <div class="data">
        <h4>date</h4>
          <?php
           if(isset($_SESSION['msg7'])){
               echo $_SESSION['msg7'];
               unset ($_SESSION['msg7']);
           }
       ?>
    </div>
    <div class="user">
        <h4>user</h4>
          <?php
           if(isset($_SESSION['msg8'])){
               echo $_SESSION['msg8'];
               unset ($_SESSION['msg8']);
           }
       ?>
    </div>
</body>
</html>