<?php

require 'class/app.php';
// if(isset($_GET['id'])){
//     $id = $_GET['id'];
//     $sql = "SELECT * FROM tbl_dossier WHERE id_dossier = $id";
//     $req = $app->fetch($sql);

//     $file = 'fichier/'.$req['dossier'];

// }

if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = 'fichier/'.$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        //read file
        readfile($filePath);
        exit;
    }
    else{
        echo "file not exit";
    }
}




?>