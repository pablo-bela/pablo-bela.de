<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten abrufen
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $anliegen = $_POST["anliegen"];

    // E-Mail-Empfänger
    $empfaenger = "1899pablo@gmail.com";

    // E-Mail-Betreff
    $betreff = "Neue Nachricht von $vorname $nachname";

    // E-Mail-Nachricht
    $nachricht = "Vorname: $vorname\n";
    $nachricht .= "Nachname: $nachname\n";
    $nachricht .= "Anliegen:\n$anliegen";

    // E-Mail-Header
    $header = "From: $vorname $nachname <$empfaenger>";

    // E-Mail senden
    mail($empfaenger, $betreff, $nachricht, $header);

    exit;
}
?>
