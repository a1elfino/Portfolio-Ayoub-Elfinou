<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
	<?php
		if(isset($_POST['Message'])){
			$message = "Ce message vous a été envoyé via la page du site Portfolio-Ayoub-Elfinou
				Prenom : " . $-POST["Votre prénom"] ."
				e-mail : " . $-POST["Votre adresse e-mail"] ."
				Message : " . $-POST["Message"];
  			$retour = mail("ayoub2000elfinou@gmail.com", $Message, "From:https://a1elfino.github.io/Portfolio-Ayoub-Elfinou/ . "\r\n" . "Reply-to: . $_POST['Votre adresse e-mail']);
    		if ($retour){
        		echo '<p>Votre message a bien été envoyé.</p>';
  			  }
		}
	?>
</body>
</html>
