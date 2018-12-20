
  function transfer (email_expediteur,email_destinataire ,écrivez_votre_message)
{
 
	var estRempli=false;
	for(var i=0 ; i<écrivez_votre_message; i++)//premier paramètre variable
	{
		for(var j=0 ; j<7 ; j++)//deuxième paramètre variable
		{
 
			for(var k=0 ; k<25 ; k++)//troisième paramètre variable 
			{
				var form = 'var'+k+j+i;
				if(document.forms['saisie'].elements[form].value!='')
				{
					estRempli=true;
				}
 
 
			}
		}
	}
 
	if(estRempli==true)
	{
		if(document.getElementById(email_destinataire).value == "" )
		{
			alert ('Vous devez remplir tous les champs avant de cliquer sur "Envoyer" ');
			//return false;
		}
		else
		{
			document.saisie.action = email_expediteur;
			document.saisie.submit();
		}
	}
}
//et voila le formulaire (enfin juste la balise formulaire et les boutons):
//Code :	Sélectionner tout - Visualiser dans une fenêtre à part
