<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recipient_email = 'enzogiovanini@gmail.com'; // E-mail do destinatário fixo
    $pdf_file = 'pdf_file';

    // Verifica se um arquivo .pdf foi enviado
    if ($pdf_file['type'] === 'application/pdf') {

        // Configurações para o envio do e-mail com o anexo
        $subject = 'E-mail com PDF Anexado';
        $message = 'Por favor, encontre o PDF anexado neste e-mail.';
        $headers = 'From: enzogiovanini@gmail.com';

        // Envia o e-mail com o anexo
        if (mail($recipient_email, $subject, $message, $headers)) {
            echo '<p>E-mail enviado com sucesso!</p>';
        } else {
            echo '<p>Ocorreu um erro ao enviar o e-mail.</p>';
        }
    } else {
       echo '<p>Por favor, selecione um arquivo PDF válido para enviar.</p>';
    }
}
?>
