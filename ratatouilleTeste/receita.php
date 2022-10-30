<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="navbar.css"/>
    <link type="text/css" rel="stylesheet" href="mediaquerys.css"/>
    <link rel="stylesheet" href="receita-header-banner.css">
    <link rel="stylesheet" href="receita-filter-list.css">
    <link rel="stylesheet" href="receita-footer.css">
    <link rel="stylesheet" href="receita-responsividade.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Ratatouille - Receitas</title>
</head>
<body>
    <!-- Header -->
    <header>
            <nav>
                <div class="navbar">
                    <div class="nome">Ratatouille</div>
                    <a href="index.html"><img class="img-icon" src="img/img_icon.svg"/></a>
                    <div class="navbar-left">
                        <div class="receita"><a href="receita.html">Receitas</a></div>
                        <div class="sobrenos"><a href="#">Sobre nós </a></div>
                        <div class="enviereceita"><a href="cad_receita.html">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
                        <div class="search-box">
                        <input type="text" name="nomeR" class="search-text" placeholder="Pesquisar...">
                            <a class="search-btn">
                                <img class="loupe-white" src="img/loupe-white.svg" alt="" width="25px" height="25px">
                                <img class="loupe-blue" src="img/loupe-blue.svg" alt="" width="25px" height="25px">
                            </a>
                        </div>
                            <div class="login"><a href="login.html">Entrar</a></div>
                            <div class="cadastro"><a href="cad.html">Cadastrar</a></div>
                        </div>

                </div>
            </nav>  
        </header>

    <!-- Banner -->
    <div class="banner_wrapper">
        <div class="banner_text">
            <div class="banner_header">
                <span class="banner_subtitle">O melhor lugar para se fazer uma receita é aqui!</span>
                <h1 class="banner_title">Receitas de todos os tipos</h1>
            </div>
            <div class="banner_descri">
                <p class="banner_paragrafo">De deliciosas guloseimas que dão água na boca a saborosos <br> 
                    salgados, selecionamos algumas de nossas receitas favoritas <br>
                    para você poder saborear em casa.
                </p>
            </div>
        </div>
           
        <div class="banner_image">
            <div class="image">
                <div class="image_circulo">
                    <!-- <img class="circulo" src="https://www.starbucksathome.com/br/media/wysiwyg/bannerEllipse.png" alt="circulo">
                    <img src="https://images.unsplash.com/photo-1503146234394-631200675614?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="salada" class="salada"> -->
                </div>
            </div>
            <div class="banner_shadow"></div>
        </div>
    </div>

    <!-- Filtro -->
    <div class="text-filter">
        <div class="text">
            <h1 class="h1-receitas">Receitas</h1>
        </div>
        <div class="filter">
            <ul class="filter-list">
                <li class="filter-list-by">
                    <span>Filtrar por: </span>
                </li>
                <li class="filter-list-item">
                <a href="echoFiltro.php?cat=salgado">
                    <span>Salgados</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="echoFiltro.php?cat=doce">
                    <span>Doces</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="echoFiltro.php?cat=veg">
                    <span>Veganos</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="echoFiltro.php?cat=bebida">
                    <span>Bebidas</span>
                </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Lista de Receitas -->
    <div class="food-list-wrapper">
        <ul class="food-list">
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/coxas.png" alt="Coxinha">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Coxinha</span>
                        <span class="item-subtitulo">Crocante</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/croas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Croissant</span>
                        <span class="item-subtitulo">Delicioso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img" src="img/brigas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Brigadeiro</span>
                        <span class="item-subtitulo">Cremoso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/coxas.png" alt="Coxinha">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Arroz</span>
                        <span class="item-subtitulo">Soltinho</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img5" src="img/feijoas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Feijão</span>
                        <span class="item-subtitulo">Desmanchando</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img6" src="img/ratas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Ratatouille</span>
                        <span class="item-subtitulo">Ratoso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/coxas.png" alt="Coxinha">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Coxinha</span>
                        <span class="item-subtitulo">Crocante</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/croas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Croissant</span>
                        <span class="item-subtitulo">Delicioso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img" src="img/brigas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Brigadeiro</span>
                        <span class="item-subtitulo">Cremoso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/coxas.png" alt="Coxinha">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Arroz</span>
                        <span class="item-subtitulo">Soltinho</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img5" src="img/feijoas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Feijão</span>
                        <span class="item-subtitulo">Desmanchando</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img6" src="img/ratas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Ratatouille</span>
                        <span class="item-subtitulo">Ratoso</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- Footer
    <footer class="page-footer">
        <div class="l-footer">
            <div class="logo-footer">
                <img src="img/img_icon.svg" alt="" class="img-footer">
                <span>Ratatouille</span>
            </div>
        </div>
        <div class="menu">
            <div class="menu-footer">
                <div class="first-menu-footer"></div>
                <div class="sec-menu-footer"></div>
            </div>
        </div>
        <div class="social">
            <div class="social-footer"></div>
        </div>
    </footer> -->
</body>
</html>