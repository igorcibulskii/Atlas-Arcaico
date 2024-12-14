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
    <link rel="stylesheet" href="/AtlasArcaico/css/animais_paginas/america_do_norte/smilodon_norte.css">
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
            <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link active">Atlas Arcaico</a></li>
                <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link">Sobre</a></li>
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
                <a href="/AtlasArcaico/php/autenticacao/usuario.php#cadastro" class="btn" id="cadastroBtn">Cadastre-se</a>
                <?php endif; ?>
            </div>
        </nav>

      

</body>

</html>