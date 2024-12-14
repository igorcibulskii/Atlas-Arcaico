<?php
// inicializz a variável para evitar erros
$fotoPerfil = null;

?>


<?php
session_start();

// verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    // redireciona para a página de login 
    header("Location: /AtlasArcaico/php/autenticacao/usuario.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/AtlasArcaico/css/perfil/perfil.css">
    <title>Perfil - Atlas Arcaico</title>
</head>

<body>
    <div class="wrapper"></div> <!-- contêiner principal para todo o conteúdo -->

    <nav class="nav"> <!-- início da barra de navegação -->
        <div class="nav-logo"> <!-- seção do logo -->
            <p>
                <a href="/AtlasArcaico/php/index/index.php"> <!-- link para a página inicial -->
                    <img src="/AtlasArcaico/imagens/logo/atlasarcaico_logo.png" alt="Atlas Arcaico"> <!-- imagem do logo com descrição -->
                </a>
            </p>
        </div>
        <div class="nav-menu" id="navMenu"> <!-- menu de navegação principal -->
            <ul>
            <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link">Atlas Arcaico</a></li>
                <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link">Sobre</a></li>
                <li><a href="/AtlasArcaico/php/forum/forum.php" class="link">Fórum</a></li>
            </ul>
        </div>
        <div class="nav-button"> <!-- seção do botão de saída -->
            <a href="/AtlasArcaico/php/perfil/sair.php" class="btn" id="logoutBtn">Sair</a>
            <a href="/AtlasArcaico/php/perfil/excluir_conta.php" class="btn"
                onclick="return confirm('Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.');">Excluir
                Conta</a> <!-- botão de saída que redireciona para a página inicial -->
        </div>
    </nav>

    <div class="login-container"> <!-- contêiner principal para o login -->
        <div class="login-card"> <!-- cartão de login com as informações do usuário -->
        <div class="avatar-circle">
    <form action="/AtlasArcaico/php/perfil/upload_foto.php" method="POST" enctype="multipart/form-data">
        <label for="foto_perfil">
            <?php
            // Verifica se o usuário já tem uma foto no banco de dados
            include($_SERVER['DOCUMENT_ROOT'] . '/AtlasArcaico/php/config/config.php'); // Conexão com o banco de dados

            $usuario_id = $_SESSION['usuario_id']; // ID do usuário
            $query = "SELECT foto_perfil FROM usuarios WHERE id = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bind_param('i', $usuario_id);
            $stmt->execute();
            $stmt->bind_result($fotoPerfil);
            $stmt->fetch();
            $stmt->close();

            // Verifica se há uma foto personalizada
            if ($fotoPerfil) {
                echo "<img src='$fotoPerfil' alt='Avatar'>";
            } else {
                // Exibe o avatar padrão se não houver foto personalizada
                echo "<img src='/AtlasArcaico/imagens/perfil/avatar.png' alt='Avatar'>";
            }
            ?>
        </label>
        <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*" onchange="this.form.submit()" hidden>
    </form>
</div>


            <h2>Bem-vindo(a) <?php echo $_SESSION['usuario_nome'] . ' ' . $_SESSION['usuario_sobrenome']; ?></h2>
            <!-- Mensagem de boas-vindas ao usuário -->
            <p><?php echo $_SESSION['usuario_email']; ?></p> <!-- exibe o e-mail do usuário -->

            <?php
            // Exibe a data de criação do usuário formatada
            $dataCriacao = $_SESSION['usuario_data_criacao'];
            echo "<p>Criado em: " . date("d/m/Y H:i:s", strtotime($dataCriacao)) . "</p>"; // formata a data para um formato legível
            ?>

        </div>
        <form action="/AtlasArcaico/php/perfil/upload_foto.php" method="POST" enctype="multipart/form-data">



        </form>

    </div>

</body>

</html>