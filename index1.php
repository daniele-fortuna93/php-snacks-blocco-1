<?php 
// Passare come parametri GET name, mail e age e
// verificare (cercando i metodi che non
// conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. mail contenga un punto e una chiocciola
// 3. age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti
// “Accesso negato”

$name = $_GET['nome'];
$mail = $_GET['mail'];
$age = intval($_GET['eta']);


if (!empty($name) && !empty($mail) && !empty($age)){
    if( (strlen($name) > 3) && ( strpos($mail,".") !== false && strpos($mail, "@") !== false) && (is_int($age)) && ($age > 0) ){
            echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
} else {
    echo "Accesso negato";
}
?>