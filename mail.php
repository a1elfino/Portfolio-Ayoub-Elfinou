<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
if(isset($_POST['Message'])){
    $retour = mail('ayoub2000elfinou@gmail.com', 'Envoi depuis la page Contact', $_POST['Message'], "Reply-to:" . $_POST['Votre adresse e-mail']);
    if ($retour){
        echo '<p>Votre message a bien été envoyé.</p>';
    }
}
?>
</body>
</html>
