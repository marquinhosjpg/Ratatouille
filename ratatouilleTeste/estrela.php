<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Avaliação - Estrela</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>
		<h1>Avalie</h1>
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="estrelas">
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" value="Cadastrar">
				
			</div>
		</form>

        <?php
        
        include_once("conexaoDB.php");

		if (isset($_COOKIE['userName'])){
			$userName_cookie = $_COOKIE['userName'];
		} 
		
		if(isset($userName_cookie)){
			echo"Bem Vindo, $userName_cookie <br>";
			echo"<a href='logout.php'>Sair dessa conta </a><br>";
		$userName = $userName_cookie;
        if(!empty($_POST['estrela'])){
            $qtdEstrela = $_POST['estrela'];
            
            $result_avaliacao= "INSERT INTO avaliacao VALUES (DEFAULT, '$qtdEstrela', NOW(), '$userName')";
            $resultado_avaliacao = mysqli_query($connect, $result_avaliacao);
            
            if(mysqli_insert_id($connect)){
                echo "Avaliação cadastrada com sucesso";
            }else{
                echo "Erro ao cadastrar a avaliação";
                
            }
        }else{
           echo"Necessário selecionar pelo menos 1 estrela";
        
        }
	} else{
        echo"Para cadastrar uma avaliação você precisa ser um <font color='blue'> USUÁRIO</font>";
        echo"<br><a href='login.php'>Faça Login</a> Para acessar o conteúdo ou <a href='cad.php'>Cadastre-se</a>";
      }
        ?>
	</body>
</html>
