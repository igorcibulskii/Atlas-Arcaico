<?php
session_start();

// verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: /AtlasArcaico/php/autenticacao/usuario.php');
    exit;
}

// conecta ao banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-atlas';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Falha na conexão com o banco de dados.']));
}

// recebe os dados enviados via JSON
$data = json_decode(file_get_contents('php://input'), true);

$rating = isset($data['rating']) ? intval($data['rating']) : 0;
$comment = isset($data['comment']) ? $conexao->real_escape_string(trim($data['comment'])) : '';

// verifica se o usuário já avaliou
$usuarioId = $_SESSION['usuario_id'];
$sqlCheck = "SELECT COUNT(*) as count FROM avaliacoes WHERE usuario_id = '$usuarioId'";
$result = $conexao->query($sqlCheck);
$row = $result->fetch_assoc();

if ($row['count'] > 0) {
    echo json_encode(['success' => false, 'message' => 'Você já avaliou este site.']);
    exit;
}

if ($rating > 0 && !empty($comment)) {
    $usuarioNome = $_SESSION['usuario_nome'];

    $sqlInsert = "INSERT INTO avaliacoes (usuario_id, avaliacao, comentario) VALUES ('$usuarioId', '$rating', '$comment')";
    if ($conexao->query($sqlInsert) === TRUE) {
        echo json_encode(['success' => true, 'nome_usuario' => $usuarioNome]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao salvar no banco de dados.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Avaliação ou comentário inválidos.']);
}

$conexao->close();
?>