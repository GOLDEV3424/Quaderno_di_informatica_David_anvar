<?php
$email = $_POST['email'];
$password = $_POST['password'];

echo "<!DOCTYPE html>";
echo "<head>";
echo "<title>es1</title>";

echo "<style>";
echo "body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 20px; color: #333; }";
echo "h2 { color: #4CAF50; text-align: center; }";
echo ".container { max-width: 900px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }";
echo ".section { margin-bottom: 20px; }";
echo ".code-block { background-color: #f0f0f0; padding: 15px; border-left: 4px solid #4CAF50; font-family: monospace; overflow-x: auto; border-radius: 5px; }";
echo ".highlight { color: #d9534f; font-weight: bold; }";
echo "p { line-height: 1.6; }";
echo "strong { color: #333; }";
echo "</style>";

echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "<h2>SPIEGAZIONE</h2>";
echo "<p><button><a href='home.html'>Torna alla home</a></button></p>";
echo "<div class='section'>";
echo "<p><strong>1. Raccolta dei dati inviati tramite il modulo (con il metodo POST):</strong></p>";
echo "<div class='code-block'>";
echo "<code>";
echo "\$email = \$_POST[\"email\"];<br>";
echo "\$password = \$_POST[\"password\"];<br>";
echo "</code>";
echo "</div>";
echo "<p>Questa parte del codice raccoglie i dati inviati tramite il metodo POST da un modulo HTML. La superglobale <span class='highlight'>\$_POST</span> contiene tutti i dati inviati con il metodo POST. In questo caso, il codice recupera il valore dei campi 'email' e 'password' inviati dall'utente.</p>";
echo "</div>";

echo "<div class='section'>";
echo "<p><strong>2. Visualizzazione dei dati con echo:</strong></p>";
echo "<div class='code-block'>";
echo "<code>";
echo "echo \$email . \"<br>\" . \$password;<br>";
echo "</code>";
echo "</div>";
echo "<p>Il comando <strong>echo</strong> in PHP serve a visualizzare i valori sullo schermo. In questo caso, il codice concatena la variabile <span class='highlight'>\$email</span> con il tag HTML <strong>&lt;br&gt;</strong>, e successivamente concatena anche la variabile <span class='highlight'>\$password</span>, per far sì che i valori vengano mostrati su due righe separate.</p>";
echo "</div>";
echo "<div class='note'>";
echo "<p><strong>Non è sicuro mostrare la password in chiaro in un'applicazione reale.</strong></p>";


echo "<strong>Ecco cosa ha stampato, in base a quello che ha scritto l'utente:</strong> <br>";
echo "email: " . $email . "<br>" . "password: " . $password;


echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
?>