<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cidadãos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Cidadãos</h1>

    <?php include '../app/view/cadastroForm.php'; ?>

    <?php include '../app/view/pesquisaForm.php'; ?>

    <?php
    if (isset($_GET['mensagem'])) {
        echo "<div id='mensagem'>" . $_GET['mensagem'] . "</div>";
    }
    ?>
</body>
</html>
