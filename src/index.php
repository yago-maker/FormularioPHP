<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $celular = htmlspecialchars($_POST['celular']);
    $observacao = htmlspecialchars($_POST['observacao']);

   
    $query = $connection->prepare("INSERT INTO contatos (nome, email, celular, observacao) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $nome, $email, $celular, $observacao);

    if ($query->execute()) {
        echo "<h2>Dados enviados com sucesso!</h2>";
    } else {
        echo "Erro ao enviar os dados: " . $query->error;
    }

    $query->close();
}

$connection->close();
?>
