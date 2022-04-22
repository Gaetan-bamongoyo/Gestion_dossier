<?php
session_start();
require '../class/app.php';
$app = new App('bd_personnel');
$event = $_POST['event'];

if ($event == 'CREATE_EQUIPE') {
    $data = [$_POST['equipe']];
    $sql = "INSERT INTO tbl_equipe(designation_equipe) VALUES(?)";
    if ($app->prepare($sql, $data, 1)) {
       $_SESSION['success'] = 'Equipe créee';
    } else {
       $_SESSION['error'] = 'Equipe non créee';
    }
    header("Location: ../file.php");
 }

 if ($event == 'CREATE_AFFECTATION') {
   $id = $_POST['id'];
   $data = [$_POST['affectation'],$id];
   $sql = "INSERT INTO tbl_affectation(code_document, code_personne) VALUES(?,?)";
   if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Equipe créee';
   } else {
      $_SESSION['error'] = 'Equipe non créee';
   }
   header("Location: ../document.php?id=$id");
}

 if ($event == 'CREATE_RUBRIQUE') {
   $data = [$_POST['rubrique']];
   $sql = "INSERT INTO tbl_document(designation_document) VALUES(?)";
   if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Equipe créee';
   } else {
      $_SESSION['error'] = 'Equipe non créee';
   }
   header("Location: ../setting.php");
}

 if ($event == 'CREATE_PERSONNE') {
   $id = $_POST['id'];
   $filename = $_FILES['photo']['name'];
   $data = [$_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['sexe'],$_POST['lieu'],$_POST['date'],$_POST['adresse'],$_POST['phone'],$_POST['email'],$_POST['matricule'],$filename,$_POST['id'],1];
   $sql = "INSERT INTO tbl_personne(nom, postnom, prenom, sexe, lieu_naissance, date_naissance, adresse, phone, email, matricule, photo, code_equipe, isActive) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
   if ($app->prepare($sql, $data, 1)) {
      if(!empty($filename)){
         move_uploaded_file($_FILES['fichier']['tmp_name'], '../fichier/'.$filename);	
         $_SESSION['success'] = 'Equipe créee';
      }
      else {
      $_SESSION['error'] = 'Equipe non créee';
      }
   }
   header("Location: ../personnel.php?id=$id");
}