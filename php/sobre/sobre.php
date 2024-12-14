<?php
session_start(); // inicia a sessão

// verifica se o usuário está logado
$usuarioLogado = isset($_SESSION['usuario_id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/AtlasArcaico/css/sobre/sobre.css">
    <title>Atlas Arcaico</title>
</head>

<body>
    <div class="wrapper"> <!-- contêiner principal que envolve todo o conteúdo da página -->
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
                    <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link">Atlas Arcaico</a></li>
                    <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link active">Sobre</a></li>
                    <li><a href="/AtlasArcaico/php/forum/forum.php" class="link">Fórum</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <?php if ($usuarioLogado): ?>
                    <!-- Exibe apenas o botão Perfil se o usuário estiver logado -->
                    <a href="/AtlasArcaico/php/perfil/perfil.php" class="btn white-btn">Perfil</a>
                <?php else: ?>
                    <!-- Exibe os botões Entrar e Cadastre-se se o usuário não estiver logado -->
                    <a href="/AtlasArcaico/php/autenticacao/usuario.php" class="btn white-btn" id="entrarBtn">Entrar</a>
                    <a href="/AtlasArcaico/php/autenticacao/usuario.php#cadastro" class="btn"
                        id="cadastroBtn">Cadastre-se</a>
                <?php endif; ?>
            </div>
        </nav>

        <div class="responsive-container-block bigContainer">
            <!-- contêiner principal para o conteúdo da seção "Atlas Arcaico" -->
            <div class="responsive-container-block Container">
                <!-- contêiner que organiza o layout de forma responsiva -->
                <div class="responsive-container-block leftSide">
                    <!-- seção do lado esquerdo para o texto explicativo -->
                    <p class="text-blk heading">
                        Atlas Arcaico
                    </p>
                    <p class="text-blk subHeading"> <!-- parágrafo descritivo do projeto Atlas Arcaico -->
                        O Atlas Arcaico é uma plataforma interativa que convida os usuários a explorar a pré-história de
                        maneira inovadora e envolvente. Este projeto foi desenvolvido para unir conhecimento e
                        tecnologia, oferecendo uma experiência única de aprendizado sobre o passado remoto.
                        <br><br>
                        Com um mapa interativo, o Atlas Arcaico revela a fauna e a geografia de diferentes épocas,
                        proporcionando uma jornada fascinante pela evolução da vida na Terra. O objetivo é tornar o
                        aprendizado sobre a história natural acessível e cativante para pessoas de todas as idades.
                        <br><br>
                        O site busca despertar a curiosidade e incentivar um entendimento mais profundo sobre o nosso
                        planeta e sua rica história. Mergulhe nesta experiência educativa e descubra um novo olhar sobre
                        o passado que moldou o mundo que conhecemos hoje.
                    </p>
                </div>

            </div>
        </div>

</body>

</html>