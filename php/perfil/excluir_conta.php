<?php
session_start();

// verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    // redireciona para a página de login se não estiver logado
    header("Location: /AtlasArcaico/php/autenticacao/usuario.php");
    exit;
}

// conectar ao banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-atlas';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// verifica a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// obtem o ID do usuário da sessão
$usuarioId = $_SESSION['usuario_id'];

// exclui registros associados na tabela 'avaliacoes'
$sqlAvaliacao = "DELETE FROM avaliacoes WHERE usuario_id = $usuarioId";

if ($conexao->query($sqlAvaliacao) === TRUE) {
    // exclui o usuário após excluir os registros associados
    $sqlUsuario = "DELETE FROM usuarios WHERE id = $usuarioId";
    if ($conexao->query($sqlUsuario) === TRUE) {
        // apaga a sessão após a exclusão
        session_unset();
        session_destroy();

        // redireciona para a página inicial
        header("Location: /AtlasArcaico/php/index/index.php");
        exit;
    } else {
        echo "Erro ao excluir conta: " . $conexao->error;
    }
} else {
    echo "Erro ao excluir registros associados: " . $conexao->error;
}

// fecha a conexão
$conexao->close();
?>