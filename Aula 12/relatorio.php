<?php
$clientes = [
    ["codigo" => 1, "nome" => "João Silva"],
    ["codigo" => 2, "nome" => "Maria Oliveira"],
    ["codigo" => 3, "nome" => "Carlos Souza"],
    ["codigo" => 4, "nome" => "Ana Lima"],
    ["codigo" => 5, "nome" => "Pedro Santos"]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Relatório de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado Relatório de Clientes</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['codigo']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
