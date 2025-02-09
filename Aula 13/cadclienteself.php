<?php
$nome = $cpf = "";
$erros = [];
$dataCadastro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);

    if (empty($nome)) {
        $erros[] = "O campo Nome não pode estar em branco.";
    }
    if (empty($cpf)) {
        $erros[] = "O campo CPF não pode estar em branco.";
    } elseif (strlen($cpf) != 11) {
        $erros[] = "O CPF deve conter exatamente 11 caracteres.";
    }

    if (empty($erros)) {
        $dataCadastro = date("d/m/Y H:i:s");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Cadastro de Cliente</h2>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($nome) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" value="<?= htmlspecialchars($cpf) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php if (!empty($erros)): ?>
        <div class="mt-3 alert alert-danger">
            <?php foreach ($erros as $erro): ?>
                <p><?= $erro ?></p>
            <?php endforeach; ?>
        </div>
    <?php elseif ($dataCadastro): ?>
        <div class="mt-3 alert alert-success">
            <h2>Dados do Cliente</h2>
            <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
            <p><strong>CPF:</strong> <?= htmlspecialchars($cpf) ?></p>
            <p><strong>Data de Cadastro:</strong> <?= $dataCadastro ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
