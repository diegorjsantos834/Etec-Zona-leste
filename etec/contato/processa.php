<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $assunto = htmlspecialchars($_POST['tema']);

    // O que for escrito aqui aparecerá dentro do Modal
    echo "<h2><i class='ri-checkbox-circle-fill'></i> Sucesso!</h2>";
    echo "<p>Olá, <strong>$nome</strong>!</p>";
    echo "<p>Sua mensagem sobre <strong>$assunto</strong> foi enviada com sucesso para nossa equipe.</p>";
}
?>