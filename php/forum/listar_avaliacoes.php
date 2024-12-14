<?php
// conecta ao banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-atlas';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Falha na conexão com o banco de dados.']));
}

$sql = "SELECT a.avaliacao, a.comentario, u.nome
        FROM avaliacoes a
        JOIN usuarios u ON a.usuario_id = u.id
        ORDER BY a.data_criacao DESC";

$result = $conexao->query($sql);

$avaliacoes = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $avaliacoes[] = $row;
    }
}

echo json_encode(['success' => true, 'avaliacoes' => $avaliacoes]);
$conexao->close();
?>