<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "twoj@email.pl"; // <-- Zmień na swój e-mail
    $subject = "Nowe zgłoszenie ze strony www";

    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "Nowy klient podał numer telefonu:\n\nNumer: $phone\n\nWiadomość:\n$message";
    $headers = "From: noreply@twojadomena.pl\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Dziękujemy! Skontaktujemy się wkrótce.";
    } else {
        echo "Wystąpił błąd przy wysyłaniu zgłoszenia.";
    }
}
?>