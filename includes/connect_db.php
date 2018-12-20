<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=transfer','root','online@2017');


    } 
    
    catch(PDOException $e){
        die('Erreur: ' .$e->getMessage());
    }
$p=1;
    ?>