<?php
    $req = $db->query('SELECT name,file_url FROM files');

    while($data = $req->fetch()){
        echo $data['name'].' : '.'<a href="' .$data['file_url'].'">Télécharger '.$data['name'].'</a><br/>';
    }

    ?>