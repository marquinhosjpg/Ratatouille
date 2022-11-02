<html>
    <meta charset="UTF-8">
</html>
<?php
     session_start();
     include_once("conexaoDB.php");

     if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    } 

    if(isset($userName_cookie)){
    echo"Bem Vindo, $userName_cookie <br>";
    echo"<a href='logout.php'>Sair dessa conta </a>";
     
       

        if (isset($_POST['nome'])){
            $nome=$_POST['nome'];
        } else {
            $nome = '';
        }
        if (isset($_POST['tempo'])){
            $tempoPreparo=$_POST['tempo'];
        } else {
            $tempoPreparo = '';
        }
        if (isset($_POST['quantidade'])){
            $quantidade=$_POST['quantidade'];
        } else {
            $quantidade = '';
        }
        if (isset($_POST['ingredientes'])){
            $ingredientes=$_POST['ingredientes'];
        } else {
            $ingredientes = '';
        }
        if (isset($_POST['modoPreparo'])){
            $modoPreparo=$_POST['modoPreparo'];
        } else {
            $modoPreparo = '';
        }
        if (isset($_POST['categoria'])){
            $categoria=$_POST['categoria'];
        } else {
            $categoria = '';
        }
        if (isset($_POST['informacoesadicionais'])){
            $infoAdicionais=$_POST['informacoesadicionais'];
        } else {
            $infoAdicionais = '';
        }
        // if (isset($_POST['userName'])){
        //     $userName =$_POST['userName'];
        // } else {
        //     $userName = '';
        // }
        if (isset($_POST['imagem'])){
            $imagem =$_POST['imagem'];
        } else {
            $imagem = '';
        }
        
        $userName = $userName_cookie;
        $sqlselect= "SELECT * FROM receita WHERE nome = '$nome'";
        $resultadoselect = @mysqli_query($connect,$sqlselect);

        if (@mysqli_num_rows($resultadoselect)==0){
            $sql = "insert into receita values (default, '$nome', '$tempoPreparo', '$quantidade', '$ingredientes', '$modoPreparo', '$categoria', NOW(), '$infoAdicionais', '$imagem', '$userName')";
            $resultado = @mysqli_query($connect,$sql);
            if (!$resultado){
                die ('Query Inválida: ' . @mysqli_error($connect) . '<br>Verifique se o seu nome de usuario está correto e tente novamente!');
                exit;
            }else{
                mysqli_close($connect);
                $_SESSION['msg'] = "Receita $nome cadastrada com sucesso!";
                header("Location: cadastroReceitas.php");
            }
        } else{
            $_SESSION['msg'] = "$userName não existe!";
            header("Location: cadastroReceitas.php");
            exit;
        }
    }else{
        echo"Bem Vindo, convidado <br>";
        echo"Para cadastrar uma receita você precisa ser um <font color='blue'> USUÁRIO</font>";
        echo"<br><a href='login.php'>Faça Login</a> Para acessar o conteúdo ou <a href='cad.php'>Cadastre-se</a>";
      }
     ?>