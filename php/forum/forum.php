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
    <link rel="stylesheet" href="/AtlasArcaico/css/forum/forum.css">
    <script src="/AtlasArcaico/js/forum/forum.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Atlas Arcaico</title>
</head>

<body>
    <div class="wrapper"> <!-- container principal do layout -->
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
                <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link">Sobre</a></li>
                <li><a href="/AtlasArcaico/php/forum/forum.php" class="link active">Fórum</a></li>
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
        <div class="forum-wrapper">
            <div class="rating-comment-section">
                <h2>Avalie o Site</h2>
                <div class="star-rating">
                    <i class='bx bxs-star' data-value="1"></i>
                    <i class='bx bxs-star' data-value="2"></i>
                    <i class='bx bxs-star' data-value="3"></i>
                    <i class='bx bxs-star' data-value="4"></i>
                    <i class='bx bxs-star' data-value="5"></i>
                </div>
                <textarea id="comment" placeholder="Deixe seu comentário..."></textarea>
                <button id="submitReview">Enviar Avaliação</button>
                <input type="hidden" id="loggedUserName"
                    value="<?php echo $_SESSION['usuario_nome'] ?? 'Visitante'; ?>">
            </div>
            <div class="comments-list-section">
                <h2>Comentários</h2>
                <div id="commentsList"></div>
            </div>
        </div>
</body>