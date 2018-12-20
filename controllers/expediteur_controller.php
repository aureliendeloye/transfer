  <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  

require_once('vendor/autoload.php');
require_once('includes/connect_db.php');
require_once('models/expediteur.php');

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));




$mail = new PHPMailer(true); 
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true; 
    $mail->CharSet = 'UTF-8'; 
    $mail->Encoding = 'base64'; 
    $mail->Username = 'danidupont8@gmail.com'; 
    $mail->Password = 'poussin1664'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587;
    // //Recipients
    $mail->setFrom('danidupont8@gmail.com');
    $mail->addAddress('danidupont8@gmail.com');     // Add a recipient
                 
    $mail->addReplyTo('danidupont8@gmail.com');
    

    // //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message plateforme de transfert';
    $mail->Body    = 'lol';
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



switch ($action) {
    case 'upload':
        upload();
        break;
}





function upload(){    
    global $twig, $email;
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
                                     // Passing `true` enables exceptions

        
        
    }else{
        //Si il y a une erreur
        header("Location: /transfer/home/error");
    }



}
