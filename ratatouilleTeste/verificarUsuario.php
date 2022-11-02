    <?php
        session_start();
        include_once("conexaoDB.php");

        if (isset($_POST['CPF'])){
            $CPF=$_POST['CPF'];
        } else {
            $CPF = '';
        }
        if (isset($_POST['nome'])){
            $nome=$_POST['nome'];
        } else {
            $nome = '';
        }
        if (isset($_POST['userName'])){
            $userName=$_POST['userName'];
        } else {
            $userName = '';
        }
        if (isset($_POST['email'])){
            $email=$_POST['email'];
        } else {
            $email = '';
        }
        if (isset($_POST['senha'])){
            $senha=$_POST['senha'];
        } else {
            $senha = '';
        }
        if (isset($_POST['senha2'])){
            $senha2=$_POST['senha2'];
        } else {
            $senha2 = '';
        }

        
        
        $sqlselect= "SELECT * FROM cadastro WHERE userName = '$userName'";
        $resultadoselect = @mysqli_query($connect,$sqlselect);

        if (@mysqli_num_rows($resultadoselect)==0){ 
            if ($senha === $senha2) {
            $sql = "insert into cadastro values ('$userName','$CPF', '$nome', '$email','$senha', '$senha2')";
            $resultado = @mysqli_query($connect,$sql);
            } else
            if (!$resultado){
                die ('Query Inválida: ' . @mysqli_error($connect));
                exit;
            } else {
                    mysqli_close($connect);
                    $_SESSION['msg'] = "$userName cadastrado com sucesso!";
                    header("Location: login.php");
            } 
            
        } else{
                $_SESSION['msg'] = "$userName já possui cadastro!";
                header("Location: cad.php");
        }
       
        
     ?>