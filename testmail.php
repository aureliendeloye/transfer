<?php
$mail = ""; // l'adresse du destinataire.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn|gmail).[a-z]{2,4}$#", $mail)) //filtrage des serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "";
$message_html = "";
//==========
  
//=====Création de la boundary
 $boundary = "-----=".sha1(rand());
//==========
  
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========
  
//=====Création du header de l'e-mail.
$header = "From: Fils Walk\n";
$header .= "MIME-Version: 1.0\n";
$header .= "Return-Path: <$mail>\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";
$header .= "X-Sender: \n";
$header .= "X-Mailer: PHP\n";
$header .= "X-auth-smtp-user: \n";
$header .= "X-abuse-contact: ";
//==========
  
//=====Création du message.
$message = $passage_ligne."--".$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$boundary.$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
$message="blablabla";
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
////=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--"."--".$passage_ligne;
$message.= $passage_ligne."--"."--".$passage_ligne;
//==========
  
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========

echo "hello"
?>