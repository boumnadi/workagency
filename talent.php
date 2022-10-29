<?PHP
try{
$nouv=new PDO('mysql:host=localhost;dbname=sing','root','');
}
catch(PDOException $e){

echo"Erreur de connexion".$e->getMessage();
}
if(isset($_POST['nomentre']) && isset($_POST['choix3']) && isset($_POST['poste']) && isset($_POST['adressepost']) && isset($_POST['codepost'])&& isset($_POST['ville'])  && isset($_POST['number'])){
	if(!empty($_POST['nomentre']) && !empty($_POST['choix3']) && !empty($_POST['poste']) && !empty($_POST['adressepost']) && !empty($_POST['codepost']) && !empty($_POST['ville']) && !empty($_POST['number'])){

$nomentre=$_POST['nomentre'];
$choix3=$_POST['choix3'];
$poste=$_POST['poste'];
$adressepost=$_POST['adressepost'];
$codepost=$_POST['codepost'];
$ville=$_POST['ville'];
$number=$_POST['number'];

$ins=$nouv->prepare('INSERT INTO talent(nomentre,choix3,poste,adressepost,codepost,ville,number) VALUES(?,?,?,?,?,?,?)');
    $ins->execute(Array($nomentre,$choix3,$poste,$adressepost,$codepost,$ville,$number));}}

	echo  "<script>window.open('talent1.html','_self')</script>";
?>