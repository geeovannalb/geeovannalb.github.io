<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['msg']);

    $para = "ryanmarquescastro2015@gmail.com";
    $assunto = "FORMULÁRIO DE CONTATO";

    $corpoEmail = "Nome: $nome\nEmail: $email\nCelular: $celular\nMensagem: $mensagem";

    $cabeca  = "From: ryanmarquescastro2015@gmail.com\r\n";
    $cabeca .= "Reply-To: $email\r\n";
    $cabeca .= "X-Mailer: PHP/" . phpversion();

    if(mail($para, $assunto, $corpoEmail, $cabeca)){
        echo "Sucesso";
    } else {
        echo "Erro ao enviar.";
    }
?>
