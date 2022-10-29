<?PHP
try{
	$nouv=new PDO('mysql:host=localhost;dbname=sing','root','');
	}
	catch(PDOException $e){
	
	echo"Erreur de connexion".$e->getMessage();
	}

		$insertto=$nouv->prepare('INSERT INTO inscri(nom,prenom,email,password) VALUES(?,?,?,?)');
		$insertto->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password']));
		echo "<script>alert('vous inscrire')</script>";
		echo  "<script>window.open('workagency.html','_self')</script>";


?>