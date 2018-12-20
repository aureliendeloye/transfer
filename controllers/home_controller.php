<?php 

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
    $films = liste();
    
    $template = $twig->load('formulaire.html.twig');
    echo $template->render( array('baseurl' => $baseurl) );
}
