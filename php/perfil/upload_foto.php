<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: /AtlasArcaico/php/autenticacao/usuario.php");
    exit;
}

// Verifica se o formulário foi enviado e se o arquivo foi recebido
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto_perfil'])) {
    $foto = $_FILES['foto_perfil'];

    // Verifica se o arquivo foi enviado sem erros
    if ($foto['error'] == UPLOAD_ERR_OK) {
        // Define o diretório onde a foto será salva
        $diretorioDestino = $_SERVER['DOCUMENT_ROOT'] . '/AtlasArcaico/imagens/perfil/';

        // Verifica se o diretório existe, caso contrário, cria
        if (!is_dir($diretorioDestino)) {
            mkdir($diretorioDestino, 0777, true); // Cria o diretório com permissões adequadas
        }

        // Cria um nome único para o arquivo
        $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
        $nomeArquivo = uniqid() . '.' . $extensao;

        // Caminho completo no sistema de arquivos
        $caminhoDestino = $diretorioDestino . $nomeArquivo;

        // Caminho relativo para armazenar no banco de dados
        $caminhoRelativoBanco = '/AtlasArcaico/imagens/perfil/' . $nomeArquivo;

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($foto['tmp_name'], $caminhoDestino)) {
            // Conexão com o banco de dados
            include($_SERVER['DOCUMENT_ROOT'] . '/AtlasArcaico/php/config/config.php');

            $usuario_id = $_SESSION['usuario_id']; // ID do usuário
            $query = "UPDATE usuarios SET foto_perfil = ? WHERE id = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bind_param('si', $caminhoRelativoBanco, $usuario_id);

            if ($stmt->execute()) {
                // Atualização bem-sucedida, redireciona para a página do perfil
                header("Location: /AtlasArcaico/php/perfil/perfil.php");
                exit;
            } else {
                echo "Erro ao atualizar a foto no banco de dados.";
            }
        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } else {
        echo "Erro no upload da imagem. Código do erro: " . $foto['error'];
    }
} else {
    echo "Por favor, escolha uma foto para fazer upload.";
}
?>
