<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/receita-responsividade.css">
    <link rel="stylesheet" href="css/cad.css">
    <link rel="stylesheet" href="css/receita-banner.css">
    <link rel="stylesheet" href="css/mediaquerys.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Cadastro do Usuário</title>
</head>
<body>

    <main class="page-main">
    
    <!-- Header -->
    <header>
        <nav>
            <div class="navbar">
                <div class="nome">Ratatouille</div>
                <a href="index.html"><img src="img/img_icon.svg"/></a>
                <div class="navbar-left">
                    <div class="receita"><a href="receita.php">Receitas</a></div>
                    <div class="sobrenos"><a href="#">Sobre nós </a></div>
                    <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                </div>
    
                <div class="navbar-right">
                    <div class="search-box">
                        <input type="text" class="search-text" placeholder="Pesquisar...">
                        <a class="search-btn">
                            <img class="loupe-white" src="img/loupe-white.svg" alt="" width="25px" height="25px">
                            <img class="loupe-blue" src="img/loupe-blue.svg" alt="" width="25px" height="25px">


                        </a>
                         
                    </div>
                        <div class="login"><a href="login.php">Entrar</a></div>
                        <div class="cadastro"><a href="cad.php">Cadastrar</a></div>
                    </div>

            </div>
        </nav>  
    </header>

    <!-- Area Cadastro -->

    <div class="columns">
        <div class="column-main">
            <div class="block-cad">
                <div class="block-title">
                    <h4 class="h4-title">Bem-Vindo(a)</h4>
                    <h1 class="h1-title">Fazer Cadastro</h1>
                </div>
            </div>
            <form action="verificarUsuario.php" class="form-cad" method="post" id="cad-form">
                <fieldset class="cad-fieldset">
                        <div class="field user">
                                <label for="nome" class="label">
                                    <span>Nome: </span>
                                </label>
                                <input type="text" name="nome" id="nome" class="form-input" title="Nome">
                        </div>
                        <div class="field user">
                                <label for="username" class="label">
                                    <span>Username: </span>
                                </label>
                                <input type="text" name="userName" id="username" class="form-input" title="Username">
                        </div>
                        <div class="field email">
                                <label for="email" class="label">
                                    <span>E-mail: </span>
                                </label>
                                <input type="email" name="email" id="email" class="form-input" title="E-mail">
                        </div>
                        <div class="field email">
                                <label for="email" class="label">
                                    <span>Confirmar e -mail: </span>
                                </label>
                                <input type="email" name="email2" id="confirmemail" class="form-input" title="Confirmar e-mail">
                        </div>
                        <div class="field senha">
                                <label for="password" class="label">
                                    <span>Senha: </span>
                                </label>
                                <input type="password" name="senha" id="password" class="form-input" title="Senha">
                                <!-- <div class="eye" id="toggle-password">
                                    <img class="eye" src="img/view.png" alt="Mostrar ou Esconder Senha">
                                </div> -->
                        </div>
                        <div class="field senha">
                                <label for="password" class="label">
                                    <span>Confirmar Senha: </span>
                                </label>
                                <input type="password" name="senha2" id="password" class="form-input" title="Confirmar Senha">
                                <!-- <div class="eye" id="toggle-confirm-password">
                                    <img class="eye" src="img/view.png" alt="Mostrar ou Esconder Senha">
                                </div> -->
                        </div>
                    </div>
                    <div class="msg">
                                    <?php
                                        if(isset($_SESSION['msg'])){
                                            echo $_SESSION['msg'];
                                            unset ($_SESSION['msg']);
                                        }
                                    ?>
                                    </div>
                    <div class="botao-cad">
                        <div class="cad">
                            <button type="submit" class="action-cad" name="send" id="send2">
                                <span>Cadastrar</span>
                            </button>
                        </div>
                    </div>
                </fieldset>
                
            </form>
            </div>
        <div class="mensagem">
            <p>Já possui uma conta Ratatouille?</p>
            <a href="login.php" class="texto" title="Entrar">
                <button type="submit" class="button" name="login" id="login2">
                    <span class="create">Entrar</span> 
                </a> 
            </button> 
        </div> 
    </div>
    </main>

         <!-- Footer -->

         <!-- <footer>
            <div class="footer-content">
                <h3>Siga nossas redes sociais</h3>
                <p>Fique por dentro de nossas novidades e junte-se à comunidade.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ratatouille.recipes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 JPM. designed by <span>pk</span></p>
            </div>
        </footer> -->

</body>
</html>