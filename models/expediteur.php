<?php
    require'models/connection_bdd.php';


    function expediteurAddAndReturnLastId( $email, $message ){
        global $basedonne;

        $sql = "INSERT INTO expediteur (id, mail, date_envoi, message ) VALUES (NULL, :email , CURRENT_DATE(), :message );";
        $response  = $basedonne->prepare( $sql );
        $response->bindParam(':email', $email, PDO::PARAM_STR);
        $response->bindParam(':message', $message, PDO::PARAM_STR);
        $response->execute();
        return $basedonne->lastInsertId();
    }


    function destinataireAddAndReturnLastId( $email ){
        global $basedonne;

        $sql = "INSERT INTO destinataire (id, mail ) VALUES (NULL, :email );";
        $response  = $basedonne->prepare( $sql );
        $response->bindParam(':email', $email, PDO::PARAM_STR);
        $response->execute();
        return $basedonne->lastInsertId();
    }

    function addRelationExpediteurDestinataire( $lastIdExpediteur , $lastIdDestinataire ){

        global $basedonne;

        $sql = "INSERT INTO destinataire_has_expediteur( destinataire_id, expediteur_id ) VALUES(:idDestinataire, :idExpediteur );";
        $response  = $basedonne->prepare( $sql );
        $response->bindParam(':idDestinataire', $lastIdDestinataire, PDO::PARAM_INT);
        $response->bindParam(':idExpediteur',$lastIdExpediteur , PDO::PARAM_INT);
        $response->execute();
    }

    function addFile( $lastIdExpediteur , $nomFichier, $taille, $type_mine, $key_file ){
        var_dump($lastIdExpediteur." , ".$nomFichier.", ".$taille.", ".$type_mine.", ".$key_file);
        global $basedonne;

        $sql = "INSERT INTO fichier( id, nom, expediteur_id, taille, type_mine, key_file ) VALUES(NULL, :nom, :idExpediteur, :taille, :type_mine, :key_file );";
        $response  = $basedonne->prepare( $sql );
        $response->bindParam(':nom', $nomFichier, PDO::PARAM_STR);
        $response->bindParam(':idExpediteur',$lastIdExpediteur , PDO::PARAM_INT);
        $response->bindParam(':taille',$taille , PDO::PARAM_INT);
        $response->bindParam(':type_mine',$type_mine , PDO::PARAM_STR);
        $response->bindParam(':key_file',$key_file , PDO::PARAM_STR);
        $response->execute();
    }



    
