<?php
$email = $_POST["email"];
$password = $_POST["password"];
echo $email . "<br>" . $password;

echo "<h2>Spiegazione del codice PHP</h2>";

echo "<p><strong>1. Raccolta dei dati inviati tramite il modulo (con il metodo POST):</strong></p>";
echo "<pre>";
echo "<code>";
echo "\$email = \$_POST[\"email\"];<br>";
echo "\$password = \$_POST[\"password\"];<br>";
echo "</code>";
echo "</pre>";

echo "<p>Questa parte del codice raccoglie i dati inviati tramite il metodo POST da un modulo HTML. La superglobale \$_POST contiene tutti i dati inviati con il metodo POST. In questo caso, il codice recupera il valore dei campi 'email' e 'password' inviati dall'utente.</p>";

echo "<p><strong>2. Visualizzazione dei dati con echo:</strong></p>";
echo "<pre>";
echo "<code>";
echo "echo \$email . \"<br>\" . \$password;<br>";
echo "</code>";
echo "</pre>";

echo "<p>Il comando <strong>echo</strong> in PHP serve a visualizzare i valori sullo schermo. In questo caso, il codice concatena la variabile \$email con il tag HTML br, e successivamente concatena anche la variabile \$password, per far sì che i valori vengano mostrati su due righe separate.</p>";

echo "<p><strong>Importante!, Non è sicuro mostrare la password in chiaro in un'applicazione reale.</strong></p>";
?>