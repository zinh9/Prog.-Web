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
    <form action="dadosform.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</body>
</html>
