<?php
// conectando ao banco de dados 
$host = 'Localhost';
$dbname = 'formulario-atlas';
$username = 'root';
$password = '';
try {
    // conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // coletando os dados do formulário
    $nome = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobrenome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // verificando se o e-mail já está cadastrado
    $query = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $emailExistente = $stmt->fetchColumn();

    if ($emailExistente > 0) {
        // se o e-mail já estiver cadastrado, redireciona com a mensagem de erro
        header('Location: /AtlasArcaico/php/autenticacao/usuario.php?erro_cadastro=Este e-mail já está em uso.#cadastro');
        exit;
    }

    // se o e-mail não existir, inserimos o novo usuário
    $hashSenha = password_hash($senha, PASSWORD_DEFAULT); // Criptografando a senha

    $insertQuery = "INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES (:nome, :sobrenome, :email, :senha)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':nome', $nome);
    $insertStmt->bindParam(':sobrenome', $sobrenome);
    $insertStmt->bindParam(':email', $email);
    $insertStmt->bindParam(':senha', $hashSenha);

    // executando a inserção
    if ($insertStmt->execute()) {
        // cadastro bem-sucedido, redireciona para a página de login
        header('Location: /AtlasArcaico/php/autenticacao/usuario.php');
        exit;
    } else {
        // caso algo dê errado
        echo "Erro ao cadastrar o usuário. Tente novamente.";
    }
}
?>