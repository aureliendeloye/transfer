
 function verifMail(votre_email)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,40}0$/;
   if(!regex.test(champ.value))
   {
      surligne(votre_email, true);
      return false;
   }
   else
   {
      surligne(votre_email, false);
      return true;
   }
}

function verifMail(mail_destinataire)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(mail_destinataire, true);
      return false;
   }
   else
   {
      surligne(mail_destinataire, false);
      return true;
   }                                                                                                                                    
}
function verifForm(f)
{
   
   var mailOk = verifMail(votre_email);
   var mailOk = verifMail(mail_destinataire);
   
   
   if(mailOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
   { 
    if(erreur)
       champ.style.backgroundColor = "#FF0000";
    else
       champ.style.backgroundColor = "#FF0000";
    }
}