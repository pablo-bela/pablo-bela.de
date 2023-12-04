<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten abrufen
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $anliegen = $_POST["anliegen"];

    // E-Mail-Empfänger
    $empfaenger = "deine@email.com";

    // E-Mail-Betreff
    $betreff = "Neue Nachricht von $vorname $nachname";

    // E-Mail-Nachricht
    $nachricht = "Vorname: $vorname\n";
    $nachricht .= "Nachname: $nachname\n";
    $nachricht .= "E-Mail: $email\n";
    $nachricht .= "Anliegen:\n$anliegen";

    // E-Mail-Header
    $header = "From: $vorname $nachname <$email>";

    // E-Mail senden
    mail($empfaenger, $betreff, $nachricht, $header);

    // Optional: Weiterleitung nach dem Absenden
    header("Location: index.html");
    exit;
}
?>
