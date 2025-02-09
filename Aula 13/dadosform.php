<?php
// Verifica se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $erros = [];

    // Validação dos campos
    if (empty($nome)) {
        $erros[] = "O campo Nome não pode estar em branco.";
    }
    if (empty($cpf)) {
        $erros[] = "O campo CPF não pode estar em branco.";
    } elseif (strlen($cpf) != 11) {
        $erros[] = "O CPF deve conter exatamente 11 caracteres.";
    }

    // Exibir os dados se não houver erro
    if (empty($erros)) {
        $dataCadastro = date("d/m/Y H:i:s");
        echo "<h2>Dados do Cliente</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>CPF:</strong> $cpf</p>";
        echo "<p><strong>Data de Cadastro:</strong> $dataCadastro</p>";
    } else {
        // Exibir erros
        echo "<h2>Erros no Cadastro</h2>";
        foreach ($erros as $erro) {
            echo "<p style='color: red;'>$erro</p>";
        }
        echo "<a href='cadcliente.php'>Voltar</a>";
    }
} else {
    echo "<p>Erro no envio do formulário.</p>";
}
?>
