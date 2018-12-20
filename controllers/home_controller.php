<?php 

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

switch ($action) {
    case 'show':
        showForm();
        break;

    default : 
        showForm();
        break;
}





function showForm(){
    global $twig, $baseurl;    
    $template = $twig->load('formulaire.html.twig');
    echo $template->render( array('baseurl' => $baseurl) );
}
