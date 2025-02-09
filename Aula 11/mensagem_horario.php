<?php
$datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
$hora = $datetime->format('H');

if ($hora >= 0 && $hora <= 12) {
    $mensagem = "Bom dia!";
    $imagem = "manha.jpg";
} elseif ($hora > 12 && $hora < 18) {
    $mensagem = "Boa tarde!";
    $imagem = "tarde.jpg"; 
} elseif ($hora > 18 && $hora < 24) {
    $mensagem = "Boa noite!";
    $imagem = "noite.jpg";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de Horário</title>
</head>
<body>
    <h1><?php echo $mensagem; ?></h1>
    <img src="<?php echo $imagem; ?>" alt="Imagem representando <?php echo $mensagem; ?>" style="width:300px;height:auto;">
</body>
</html>
