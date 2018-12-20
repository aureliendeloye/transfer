  <?php  

require 'vendor/autoload.php';
require 'includes/connect_db.php';
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
    $listFile= array();
    $lastIdExpediteur = 0;
    $lastIdDestinataire = 0;
    $extensions_autorisees = array('pdf','PDF','jpg','JPG','jpeg','JPEG','png','PNG','svg','SVG','odt','ODT','zip','ZIP','docx','DOCX');

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

        if(!empty($_FILES)){
            //Pour chaque fichier reçu
            for( $i = 0; $i < count( $_FILES["fileList"]["name"] ); $i++ ){
                $uniqId = uniqid();
                $file_name = $_FILES['fileList']['name'][$i];
                $size = $_FILES['fileList']['size'][$i];
                $type_mime = $_FILES['fileList']['type'][$i];
                $infoFile = pathinfo($file_name);
                $file_extension =  $infoFile['extension'];
                $file_tmp_name = $_FILES['fileList']['tmp_name'][$i];
                $file_dest = 'files/'.uniqid().".".$file_extension;

                if(in_array($file_extension,$extensions_autorisees)){
                    if(move_uploaded_file($file_tmp_name, $file_dest )){
                        $listFile[] = ["nom" => $file_name, "size" => $size, "type_mime" => $type_mime, "key_file" => $uniqId ];
                    } else{
                        $error = true;;
                    }
                } else {
                    $error = true;
                }
            }

        }else{
            $error = true;
        }

        
        

    }else{

        $error = true;

    }


    
    
    
    
    if( $error === false ){        
        //On insère l'emil dans la base de données
        $lastIdExpediteur = expediteurAddAndReturnLastId( $email_expediteur, $message );
        $lastIdDestinataire = destinataireAddAndReturnLastId( $email_destinataire );
        addRelationExpediteurDestinataire( $lastIdExpediteur , $lastIdDestinataire );
        foreach( $listFile as $value){
            addFile( $lastIdExpediteur, $value['nom'], $value['size'],  $value['type_mime'], $value['key_file'] );
        }

        //envoyer le mail
        
    }else{
        //Si il y a une erreur
        header("Location: /transfer/home/error");
    }



}
