<a href="../">Accueil</a>
<?php
require_once '../functions/validation.php';
require_once '../functions/userCrud.php';
require_once '../utils/connexion.php';
session_start();

// Todo : valider les données de mon form 
// si les données ne sont pas bonne : renvoyer vers le form d'enregistrement (redirect auto )
// attention on veut récupérer les données rentrées précédement : $_SESSION




if (isset($_POST)) {   
    $_SESSION = $_POST;
// valid user name
$nameIsValidData = usernameIsValid($_POST['user_name']);

var_dump($nameIsValidData);
//valid email
// valid mdp


}else {
    //Todo : redirect vers signup
}














// Todo : traiter les données de mon form
// envoyer les données dans la DB
