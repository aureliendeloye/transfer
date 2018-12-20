<?php 

require_once('models/genre.php');

switch ($action) {
    case 'show':
        showForm();
        break;
}





function showForm(){
    global $twig, $baseurl;
    $films = liste();
    
    $template = $twig->load('formulaire.html.twig');
    echo $template->render( array('title'=>'Tous les Films', 'films' => $films, 'baseurl' => $baseurl) );
}
