i<?PHP
try{
	$nouv=new PDO('mysql:host=localhost;dbname=sing','root','');
	}
	catch(PDOException $e){
	
	echo"Erreur de connexion".$e->getMessage();
	}
if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email'])AND !empty($_POST['tele']) AND !empty($_POST['message'])){
		$insertto=$nouv->prepare('INSERT INTO contact(nom,prenom,email,tele,message) VALUES(?,?,?,?,?)');
		$insertto->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tele'],$_POST['message']));
		echo "<script>alert('vous inscrire')</script>";
}
		echo  "<script>window.open('workagency.html','_self')</script>";


?>