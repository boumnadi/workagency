<?PHP
try{
$nouv=new PDO('mysql:host=localhost;dbname=sing','root','');
        $nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$profession=$_POST['profession'];
        $deplome=$_POST['deplome'];
        $date=$_POST['date'];
		$cnss=$_POST['cnss'];
		$email=$_POST['email'];
		$cv=$_POST['cv'];
		$insertto=$nouv->prepare('INSERT INTO demonde(nom,prenom,profession,deplome,cnss,email,cv) VALUES(?,?,?,?,?,?,?)');
		$insertto->execute(array($nom,$prenom,$profession,$deplome,$cnss,$email,$cv));
		
}
catch(PDOException $e){

echo"Erreur de connexion".$e->getMessage();
}

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['profession']) && isset($_POST['deplome']) && isset($_POST['date'])  && isset($_POST['cnss']) && isset($_POST['email']) && isset($_POST['cv'])){
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['profession']) && !empty($_POST['deplome']) &&!empty($_POST['date']) && !empty($_POST['cnss']) && !empty($_POST['email'])&& !empty($_POST['cv'])){
		
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $profession=htmlspecialchars($_POST['profession']);
    $deplome=htmlspecialchars($_POST['deplome']);
    $date=htmlspecialchars($_POST['date']);
    $cnss=htmlspecialchars($_POST['cnss']);
    $email=htmlspecialchars($_POST['email']);
    $cv=htmlspecialchars($_POST['cv']);
    $insertto=$nouv->prepare('INSERT INTO demonde(nom,prenom,profession,deplome,date,cnss,email,cv) VALUES(?,?,?,?,?,?,?,?)');
    $insertto->execute(array($nom,$prenom,$profession,$deplome,$date,$cnss,$email,$cv));
    echo "<script>alert('vous demande est envoyé')</script>";
    
		echo  "<script>window.open('offres.html','_self')</script>";

	}else{
			echo"Erreur d'enregistrement!";
		}
}	

?>
