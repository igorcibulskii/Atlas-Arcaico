<?php
session_start();

// conecta ao banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-atlas';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// verifica se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // recebe os dados do formulário de login
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    // busca o usuário no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // verifica se a senha está correta
        if (password_verify($senha, $usuario['senha'])) {
            // senha correta, inicia a sessão
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_sobrenome'] = $usuario['sobrenome'];
            $_SESSION['usuario_email'] = $usuario['email'];  // armazenando o email na sessão
            $_SESSION['usuario_data_criacao'] = $usuario['data_criacao']; // armazenando a data de criação na sessão

            // redireciona para a página do perfil
            header("Location: /AtlasArcaico/php/perfil/perfil.php");
            exit;
        } else {
            // senha incorreta
            $_SESSION['erro_login'] = "Senha incorreta!";
            header("Location: /AtlasArcaico/php/autenticacao/usuario.php"); // redireciona de volta para a página de login
            exit;
        }
    } else {
        // Usuário não encontrado
        $_SESSION['erro_login'] = "Usuário não encontrado!";
        header("Location: /AtlasArcaico/php/autenticacao/usuario.php"); // redireciona de volta para a página de login
        exit;
    }
    $conexao->close();
}

?>