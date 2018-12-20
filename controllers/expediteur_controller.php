  <?php  

require 'vendor/autoload.php';
require_once('models/expediteur.php');

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));



switch ($action) {
    case 'upload':
        upload();
        break;
}





function upload(){    
    
    //Initialisation des erreurs
    $error = false;
    $email_expediteur = "";
    $email_destinataire = "";
    $message = "";
    $nomFichier = "cv.pdf";
    $taille = 145236;
    $type_mine = "image/png";
    $key_file = "gfdg46dfg4dfg4df6g4df";
    $lastIdExpediteur = 0;
    $lastIdDestinataire = 0;

    
    //Vérifier si on reçoit un formulaire
    if( count( $_POST) > 0  ){

        if( isset( $_POST["email_expediteur"] ) ){
            $email_expediteur = $_POST["email_expediteur"] ;
        }else{
            $error = true;
        }

        if( isset( $_POST["message"] ) ){
            $message = $_POST["message"] ;
        }

        if( isset( $_POST["email_destinataire"] ) ){
            $email_destinataire = $_POST["email_destinataire"] ;
        }else{
            $error = true;
        }

        if( isset( $_FILE["fichier"]["name"] ) ){
            $nomFichier = $_FILE["fichier"]["name"] ;
        }else{
            $error = true;
        }

        if( isset( $_FILE["fichier"]["size"] ) ){
            $taille = $_FILE["fichier"]["size"] ;
        }else{
            $error = true;
        }

        if( isset( $_FILE["fichier"]["mine"] ) ){
            $type_mine = $_FILE["fichier"]["mine"] ;
        }else{
            $error = true;
        }

        
        $key_file = $key_file ;
        

    }else{

        $error = true;

    }

    
    //if( $error === false ){        
        //On insère l'emil dans la base de données
        $lastIdExpediteur = expediteurAddAndReturnLastId( $email_expediteur, $message );
        $lastIdDestinataire = destinataireAddAndReturnLastId( $email_destinataire );
        addRelationExpediteurDestinataire( $lastIdExpediteur , $lastIdDestinataire );
        addFile( $lastIdExpediteur, $nomFichier, $taille,  $type_mine, $key_file );
    //}else{
        //Si il y a une erreur
        //header("Location: /transfer/home/error");
   // }


}
?>

