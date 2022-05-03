<?php
	include 'includes/sessionoutconnected.php';
	$conn = $app->getPDO();

	if(isset($_POST['login'])){
		$mail = $_POST['username'];
		$password = sha1($_POST['password']);
		try{
			$stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username = ? AND password = ?");
            $stmt->execute(array($mail,$password));
			$nbre = $stmt->rowCount();
			if($nbre == 1){
				$row = $stmt->fetch();
				$_SESSION['CodeUser'] = $row['id_user'];
				$_SESSION['Utilisateur'] = $row['username'];
			}
			else{
				$_SESSION['error'] = 'Utilisateur inexistant';
			}
		}
		catch(PDOException $e){
			echo "Erreur de connexion: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Entrez vos identifiants de connexion d\'abord';
	}

	//$pdo->close();
	header('location: index.php');

?>
