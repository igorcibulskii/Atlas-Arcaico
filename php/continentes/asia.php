<?php
session_start(); // inicia a sessão

// verifica se o usuário está logado
$usuarioLogado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/AtlasArcaico/css/continentes/asia.css">
    <script src="/AtlasArcaico/js/continentes/asia.js"></script>
    <title>Atlas Arcaico</title>
</head>

<body>
    <nav class="nav"> <!-- barra de navegação principal -->
        <div class="nav-logo">
            <p>
                <a href="/AtlasArcaico/php/index/index.php">
                    <img src="/AtlasArcaico/imagens/logo/atlasarcaico_logo.png" alt="Atlas Arcaico">
                </a>
            </p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link active">Atlas Arcaico</a>
                </li>
                <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link">Sobre</a></li>
                <li><a href="/AtlasArcaico/php/forum/forum.php" class="link">Fórum</a></li>
            </ul>
        </div>


        <div class="nav-button">
            <?php if ($usuarioLogado): ?>
                <!-- Exibe apenas o botão Perfil se o usuário estiver logado -->
                <a href="perfil.php" class="btn white-btn">Perfil</a>
            <?php else: ?>
                <!-- Exibe os botões Entrar e Cadastre-se se o usuário não estiver logado -->
                <a href="/AtlasArcaico/php/autenticacao/usuario.php" class="btn white-btn" id="entrarBtn">Entrar</a>
                <a href="/AtlasArcaico/php/autenticacao/usuario.php#cadastro" class="btn" id="cadastroBtn">Cadastre-se</a>
            <?php endif; ?>
        </div>
        <div class="search-container">
    <input type="text" id="searchInput" placeholder="Digite o nome do animal..." oninput="searchSlide()">
</div>
    </nav>
    <div class="slider-container"> <!-- container para os slides -->
        <div class="slider"> <!-- área que contém os slides -->
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/afrovenator_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Afrovenator</h3>
                    <p>
                    </p>

                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/jobaria_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Jobaria</h3>
                    <p>
                    </p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/kaprosuchus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Kaprosuchus</h3>
                    <p>
                    </p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/malawisaurus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                    <h3>Malawisaurus</h3>
                    <p>


                    </p>


                    <button>Veja mais</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="/AtlasArcaico/imagens/africa/animais/nigersaurus_africa.png" alt="">
                </div>
                <div class="card-info"> <!-- primeiro slide -->
                <h3>Nigersaurus</h3>
                    <p>
                    </p>


                    <button>Veja mais</button>
                </div>
            </div>

        </div>
        <button class="prev" onclick="moveSlider(-1)">&#10094;</button>
        <!-- botão para mover o slide para a esquerda -->
        <button class="next" onclick="moveSlider(1)">&#10095;</button> <!-- botão para mover o slide para a direita -->
    </div>


</body>

</html>