<?php

$sendTo = "contato@owlproducoes.com.br";//don't forget to change it

$action = $_POST['action'];

    $name = $_POST['form'][0]['name'];
    $email = $_POST['form'][0]['email'];
    $message = $_POST['form'][0]['message'];
    $subject="owlproducoesQuery";

    if ($name == "" || $email == "" || $message == "") {
        echo "<p class=\"error\">Houve um problema no envio. Por favor, tente novamente!</p>";
        exit();
    }

    else
    {
        $header = 'From: ' . $name . '<' . $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion()."\r\n";
        $header.= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $sent = mail($sendTo,$subject,$message, $header);

        if ($sent) {
            echo "<p class=\"success\">Mensagem enviada com sucesso.</p>";
        } else {
            echo "<p class=\"error\">Houve um problema no envio.</p>";
        }
    }

?>
