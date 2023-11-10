<?php
session_start();
var_dump($_SESSION);
$user_name = '';
if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
}
$email = '';
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
$pwd = '';
if (isset($_SESSION['pwd'])) {
    $pwd = $_SESSION['pwd'];
}

//Une autre façon d'écrire ce ternaire pour gagner du temps et des lignes de code :
//isset($_SESSION['pwd']) ? $pwd = $_SESSION['pwd'] : $pwd = '';
?>

<h2>S'enregistrer</h2>
<a href="../">Accueil</a>
<!-- Chaque formulaire a sa page de résultats -->
<!-- Todo : changer les types pour validation front -->
<form method="post" action="../results/signupResult.php">
<label for="user_name">Nom d'utilisateur</label>
<!-- utilisation possible du ternaire directement dans la balise : plus simple plus propre -->
<!-- <input id="user_name" 
        type="text" 
        name="user_name" 
        value="<?php /* echo isset($_SESSION['pwd']) ? $_SESSION['pwd']: '' */ ?>"> -->

<input id="user_name" type="text" name="user_name" value="<?php echo $user_name ?>">
<label for="email">Courriel</label>
<input id="email" type="text" name="email" value="<?php echo $email ?>">
<label for="pwd">Mot de passe</label>
<input id="pwd" type="text" name="pwd" value="<?php echo $pwd ?>">
<button type="submit">Soumettre mon enregistrement</button>
</form>