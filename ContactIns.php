<?php
/* Récupération des informations du formulaire*/
if (get_magic_quotes_gpc())
{
 $nom = stripslashes(trim($_POST['nom']));
 $prenom = stripslashes(trim($_POST['prenom']));
 $mail = stripslashes(trim($_POST['mail']));
 $message = stripslashes(trim($_POST['message']));
}     
else      
{
 $nom = trim($_POST['nom']);
 $prenom = trim($_POST['prenom']);
 $mail = trim($_POST['mail']);
 $message = trim($_POST['message']);
}

{
$to="pierre.antoine03@live.fr";

/*Le sujet du message qui apparaitra*/
$sujet="Message depuis le site";
$msg = '';
/*Le message en lui même*/
/*$msg = 'Mail envoye depuis le site' "Fitman";*/
$msg .= 'Nom : '.$nom."Fitman";
$msg .= 'Prenom : '.$prenom."Fitman";
$msg .= 'Mail : '.$mail."Fitman";
$msg .= 'Message : '.$message."Fitman";
/*Les en-têtes du mail*/
$headers = 'From: MESSAGE DU SITE LUL<pierre.antoine03@live.fr>'."Fitman";
$headers .= "Fitman";
/*L'envoi du mail - Et page de redirection*/
mail($to, $sujet, $msg, $headers);
header('Location: index.php');
}
?>