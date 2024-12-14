<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/AtlasArcaico/css/autenticacao/usuario.css">
    <title>Atlas Arcaico</title>
</head>

<body>

    <div class="wrapper">
        <nav class="nav"> <!-- início do cabeçalho de navegação -->
            <div class="nav-logo"> <!-- logo do site, que ao ser clicada redireciona para a página inicial -->
                <p>
                    <a href="/AtlasArcaico/php/index/index.php"> <!-- link para a página inicial -->
                        <img src="/AtlasArcaico/imagens/logo/atlasarcaico_logo.png" alt="Atlas Arcaico"> <!-- imagem do logo -->
                    </a>
                </p>
            </div>
            <div class="nav-menu" id="navMenu"> <!-- menu de navegação com links para outras páginas -->
                <ul>
                    <li><a href="/AtlasArcaico/php/atlas_arcaico/atlas_arcaico.php" class="link">Atlas Arcaico</a></li>
                    <!-- link para página Atlas Arcaico -->
                    <li><a href="/AtlasArcaico/php/sobre/sobre.php" class="link">Sobre</a></li> <!-- link para página Sobre -->
                    <li><a href="/AtlasArcaico/php/forum/forum.php" class="link">Fórum</a></li> <!-- link para página Fórum -->
                </ul>
            </div>
            <div class="nav-button"> <!-- botões para login e cadastro -->
                <button class="btn white-btn" id="entrarBtn" onclick="entrar()">Entrar</button> <!-- botão de login -->
                <button class="btn" id="cadastroBtn" onclick="cadastro()">Cadastre-se</button>
                <!-- botão de cadastro -->
            </div>
            <div class="nav-menu-btn"> <!-- botão para exibir menu em dispositivos móveis -->
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box"> <!-- caixa que contém os formulários de login, cadastro e recuperação de senha -->

            <!-- formulário de login -->
            <div class="entrar-container" id="entrar">
                <div class="top">
                    <span>Ainda não tem conta? <a href="#" onclick="cadastro()">Cadastre-se</a></span>
                    <header>Entrar</header>
                </div>
                <?php
                session_start(); // inicia a sessão no início do arquivo
                if (isset($_SESSION['erro_login'])) {
                    echo "<p class='mensagem-erro'>" . $_SESSION['erro_login'] . "</p>";
                    unset($_SESSION['erro_login']); // apaga a mensagem da sessão após exibi-la
                }
                ?>
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <input type="email" name="email" class="input-field" placeholder="E-mail" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="senha" class="input-field" placeholder="Senha" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Entrar">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="entrar-check">
                            <label for="entrar-check"> Lembrar de mim</label>
                        </div>
                        <div class="two">
                            <label><a href="#" onclick="recuperarSenha()">Esqueceu a senha?</a></label>
                        </div>
                    </div>
                </form>
            </div>

            <!-- formulário de cadastro -->
            <div class="cadastro-container" id="cadastro">
                <div class="top">
                    <span>Já tem conta? <a href="/AtlasArcaico/php/autenticacao/usuario.php" onclick="entrar()">Entrar</a></span>
                    <header>Cadastrar-se</header>
                </div>

                <?php
                // verifica se houve erro no cadastro, como e-mail duplicado.
                if (isset($_GET['erro_cadastro'])) {
                    echo "<p class='mensagem-erro'>" . $_GET['erro_cadastro'] . "</p>";
                }
                ?>
                <form action="cadastro.php" method="POST">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" name="nome" id="nome" class="input-field" placeholder="Nome" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" name="sobrenome" id="sobrenome" class="input-field"
                                placeholder="Sobrenome" required>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" id="email" class="input-field" placeholder="E-mail" required>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="senha" id="senha" class="input-field" placeholder="Senha" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Cadastrar-se">
                    </div>
                </form>
            </div>

            <!-- formulário de recuperação de senha -->
            <div class="recuperar_senha-container" id="recuperar_senha">
                <div class="top">
                    <span>Já tem conta? <a href="#" onclick="entrar()">Entrar</a></span>
                    <header>Recuperação</header>
                </div>
                <form action="recuperar_senha.php" method="POST">
                    <div class="input-box">
                        <input type="email" name="email" class="input-field" placeholder="E-mail" required>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");
            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }

        var a = document.getElementById("entrarBtn");
        var b = document.getElementById("cadastroBtn");
        var x = document.getElementById("entrar");
        var y = document.getElementById("cadastro");
        var c = document.getElementById("recuperar_senha");

        function entrar() {
            x.style.left = "4px";
            y.style.right = "-520px";
            c.style.opacity = 0;
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function cadastro() {
            x.style.left = "-510px";
            c.style.opacity = 0;
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }

        function recuperarSenha() {
            x.style.left = "-510px";
            y.style.right = "-520px";
            document.querySelector('.recuperar_senha-container').classList.add('active');
            a.className = "btn";
            b.className = "btn";
            document.getElementById("recuperar_senha").style.left = "4px";
            document.getElementById("recuperar_senha").style.opacity = 1;
        }
    </script>

</body>

</html>