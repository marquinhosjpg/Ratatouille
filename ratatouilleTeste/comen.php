<html>
    <meta charset="UTF-8">
<?php
        include_once("conexaoDB.php");
        if (isset($_COOKIE['userName'])){
            $userName_cookie = $_COOKIE['userName'];
        } 
    
        if(isset($userName_cookie)){
        echo"Bem Vindo, $userName_cookie <br>";
        echo"<a href='logout.php'>Sair dessa conta </a>";
            
            if (isset($_POST['titulo'])) {
                $titulo = $_POST['titulo'];
            } else {
                $titulo = '';
            }

            if (isset($_POST['comentario'])) {
                $comentario = $_POST['comentario'];
            } else {
                $comentario = '';
            }

            $userName = $userName_cookie;

            if(strlen($_POST['titulo'])) 
            {
                $insert = "INSERT INTO comentario
                values (default, '$titulo', '$comentario', '$userName', NOW())";
                $resultado = @mysqli_query($connect,$insert);
                if (!$resultado){
                    die ('Query Inválida: ' . @mysqli_error($connect) );
                    exit;
                }else{
                    // mysqli_close($connect);
                    // $_SESSION['msg'] = "Receita $nome cadastrada com sucesso!";
                    // header("Location: cadastroReceitas.php");
                    echo "Comentario registrado";
                }
            } else{
                // $_SESSION['msg'] = "$userName não existe!";
                // header("Location: cadastroReceitas.php");
                // exit;
                echo "Não foi possível registrar";
            }
            
            
        
        }else{
            echo"Bem Vindo, convidado <br>";
            echo"Você precisa ser um  USUÁRIO para cadastrar um comentario";
            echo"<br><a href='login.php'>Faça Login</a> ou <a href='cad.php'>Cadastre-se</a><br>";
          }
          $sqlselect = "SELECT * FROM  comentario";
          $resultadoselect = @mysqli_query($connect,$sqlselect) or die ("Erro ao consultar comentarios");

          while( $registro = mysqli_fetch_array($resultadoselect)){
              $titulo = $registro['titulo'];
              $comentario = $registro['comentario'];
              $data = $registro['data'];
              $userName = $registro['userName'];
              echo"<br> $userName. <br>$data. <br>$titulo. <br>$comentario. <hr>";
          }
    ?>
</html>