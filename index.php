<?php
// on se creer une connexion à notre base//
$link = new PDO ('mysql:host=localhost;dbname=spacejob', 'root', '',array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// On se connecte à la base de données 
$base= mysql_connect($hote= 'localhost:8889', $login, $pass); 
 
// On selectionne la base de données souhaitée 
mysql_select_db($base='spacejob');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style1.css">
</head>

<!-- je creer le formulaire pour le action='' ça va dependre de si l'on creer un autre fichier code pour le formulaire -->
<body>
<form action ="" methode="post">
<h1>Tu veux nous contacter ?</h1>

<label for ="nom"> Votre nom ?</label>
<input type="text" name="nom" id="contact_name" placeholder="Comment t'appelles-tu ?" required>

<label for ="age"> Votre age ?</label>
<input type="text" name="age" id="contact_age" placeholder="quel ests ton age ???" required>

<label for ="mail"> mail </label>
<input type="email" name="email" id="contact_email" maxlength="50" placeholder="Dis nous ton email">
<label for="profession"> Choisisez votre profession</label>

<select name="profession">
<option value="secondaire">Etudiant(e) dans le secondaire"</option>
<option value="superieur">Etudiant(e) dans le superieur"</option>
<option value="salarié">Salarié"</option>
<option value="non-salarié">Non-salarié"</option>
</select>

<label for="sujet"> Titre</label>
<input type="text" name="sujet" id="sujet" placeholder="Quel est le sujet de ton message">
<label for="message"> Ton message</label>

 <textarea name="message" id="message" cols="50" rows="5"
                    placeholder="Ecrire nous dans cette zone ! "></textarea>

<input type = "submit" value = "Envoyer" >

</form>
</body>
</html>











