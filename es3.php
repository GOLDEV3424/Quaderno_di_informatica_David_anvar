<?php
$email = $_POST["email"];
$password = $_POST["password"];

//if (isset($fname);

echo $email;
echo ' ' . $password;

//CONTROLLO DATI UTENTE
if ($email == "david" || $password == "12345") {
    echo "<br> ACCESSO CONSENTITO";
}else{
    echo "<br> ERRORE, ACCESSO NEGATO";
}


//unset($email);

/*
if (isset($email) == 'david') {
    echo 'giusto';
    }else{
        echo 'sbagliato';
    }
    
if (isset($password) == 123) {
    echo 'giusto';
    }else{
        echo 'sbagliato';
    }
*/
?>