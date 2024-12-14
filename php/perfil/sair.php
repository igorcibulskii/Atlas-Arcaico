<?php
// iniciar a sessão
session_start();

// apaga a sessão
session_unset(); // remove todas as variáveis da sessão
session_destroy(); // apaga a sessão

// redirecionar para a página inicial 
header("Location: /AtlasArcaico/php/index/index.php");
exit;
?>