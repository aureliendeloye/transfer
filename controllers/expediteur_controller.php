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
    echo 'lol';
}
?>

