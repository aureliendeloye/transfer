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
    

    if(!empty($_FILES)){
        $extensions_autorisees = array('.pdf','.PDF','.jpg','.JPG','.jpeg','.JPEG','.png','.PNG','.svg','.SVG','.odt','.ODT','.zip','.ZIP','.docx','.DOCX');
        
        for( $i = 0; $i < count( $_FILES["fileList"]["name"] ); $i++ ){
            $file_name = $_FILES['fileList']['name'][$i];
            $file_extension = strrchr($file_name,".");

            $file_tmp_name = $_FILES['fileList']['tmp_name'][$i];
            $file_dest = 'files/'.$file_name;
        

        
        
        
            if(in_array($file_extension,$extensions_autorisees)){
                if(move_uploaded_file($file_tmp_name,$file_dest)){
                    //   $req = $db->prepare('INSERT TO files(name, file_url)VALUES(?,?)');
                    //  $req->execute(array($file_name, $file_dest));
                    echo 'fichier envoyé avec succés';
                } else{
                    echo "une erreur est survenue lors de l'envoi du fichier";
                }
            } else {
                echo '';
            }
        }

       

    }
}
?>

