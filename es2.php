<?php
//phpinfo();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
echo "Ciao ragazzi";

// Definire una variabile
$name = "Giovanni";

// Verifica se la variabile $name è definita prima di usare unset()
if (isset($name)) {
    echo "Prima di unset: La variabile 'name' è definita e ha il valore: $name<br>";
}

// Rimuovere la variabile 'name' con unset()
unset($name);

// Verifica se la variabile $name è ancora definita dopo unset()
if (isset($name)) {
    echo "Dopo unset: La variabile 'name' è definita.";
} else {
    echo "Dopo unset: La variabile 'name' non è definita.";
}

echo "<h2>Spiegazione di isset() e unset() in PHP</h2>";

// Descrizione di isset()
echo "<h3>1. La funzione isset()</h3>";
echo "<p><strong>isset()</strong> è una funzione in PHP che verifica se una variabile è stata definita e se il suo valore non è <strong>null</strong>.</p>";
echo "<p>La sintassi di <strong>isset()</strong> è:</p>";
echo "<pre><code>isset(\$variabile)</code></pre>";
echo "<p>Restituisce <strong>true</strong> se la variabile è definita e ha un valore diverso da <strong>null</strong>, altrimenti restituisce <strong>false</strong>.</p>";

// Descrizione di unset()
echo "<h3>2. La funzione unset()</h3>";
echo "<p><strong>unset()</strong> è una funzione in PHP che distrugge (rimuove) una variabile, eliminandola dalla memoria.</p>";
echo "<p>La sintassi di <strong>unset()</strong> è:</p>";
echo "<pre><code>unset(\$variabile)</code></pre>";
echo "<p>Dopo aver utilizzato <strong>unset()</strong>, la variabile non esiste più e non può essere usata nel programma.</p>";
echo "<p><strong>Risultato:</strong> Prima di chiamare <strong>unset()</strong>, la variabile \$name è definita. Dopo l'uso di <strong>unset()</strong>, la variabile è eliminata dalla memoria e non esiste più.</p>";
?>