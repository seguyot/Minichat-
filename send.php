<?php
use \Colors\RandomColor;

include('connect.php');
include('vendor/autoload.php');
function get_ip() {
    // IP si internet partagé
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon : IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}


//insert dans base de donnée
$req = $bdd->prepare('INSERT INTO minichat.messages (pseudo, message,date,ip, user_agent) VALUES(?, ?,NOW(), ?,?)');
$req->execute(array($_POST['pseudo'], $_POST['message'], get_ip(),  $_SERVER['HTTP_USER_AGENT']));
//creation cookie pseudo
if (isset ($_POST['pseudo'])){
setcookie("pseudo", $_POST["pseudo"], time()+10000);
};

$pseudoExist = $bdd->prepare('SELECT count(*) FROM users WHERE pseudo =?'); 
$pseudoExist->execute(array($_POST['pseudo'] ) );


if ($pseudoExist->fetchColumn() === '0') {

    $speudoCol = $bdd->prepare('INSERT INTO minichat.users (pseudo, color) VALUES(?, ?)');
    $speudoCol->execute(array($_POST['pseudo'], RandomColor::one()));
   
 };
// header('Location: index.php');



