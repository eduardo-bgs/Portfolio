<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_var(trim($_POST["nome"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = filter_var(trim($_POST["mensagem"]), FILTER_SANITIZE_STRING);

    $to = "Contato.eduardobgs@outlook.com.br";
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";

    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Tente novamente.";
    }
} else {
    header("Location: index.html");
}
?>
