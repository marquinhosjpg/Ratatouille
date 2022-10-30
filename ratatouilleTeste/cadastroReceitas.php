<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastrar receitas!</title>
</head>
<body>
    <form action="cadReceitas.php" method="post" enctype="multipart/form/data">
        <h1>Cadastrar Receitas</h1>

        <label for="">Nome da Receita: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome da receita" required><br><br>

        <label for="">Tempo de Preparo: </label>
        <input type="time" name="tempo" id="tempo" placeholder="Tempo de preparo" required><br><br>

        <label for="">Rendimento das porções: </label>
        <input type="text" name="quantidade" id="quantidade" placeholder="Rendimento das porções" required><br><br>

        <label for="">Ingredientes: </label>
        <input type="text" name="ingredientes" id="ingredientes" placeholder="Ingredientes" required><br><br>

        <label for="">Modo de Preparo: </label>
        <input type="text" name="modoPreparo" id="modoPreparo" placeholder="Modo Preparo" required><br><br>

        <label for="">Categoria: </label>
        <select name="categoria" required>
            <option value="doce">Doce</option>
            <option value="salgado">Salgado</option>
            <option value="bebida">Bebida</option>
            <option value="veg">Vegetariano</option>
        </select><br><br>
    
        <label for="">Informações adicionais: </label>
        <input type="text" name="informacoesadicionais" id="informacoesadicionais" placeholder="informacoesadicionais"><br><br>
<!-- 
        <label for="">userName: </label>
        <input type="text" name="userName" id="userName" placeholder="userName" required><br><br> -->

        <label for="">Imagem: </label>
        <input type="file" name="imagem" id="imagem"><br><br>

        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>

        <br><br><input type="submit" value="Cadastrar"><br><br>
        <a href='logout.php'>Sair dessa conta </a>

        <label for="">Ir para login? <a href="login.php">LOGIN</a></label>
        <label for="">Ir para cadastro? <a href="cad.php">CADASTRO</a></label>
    </form>
    
</body>
</html>