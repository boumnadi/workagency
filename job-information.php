<?PHP
$contrat=$_POST['contrat'];
$duree=$_POST['duree'];
$ch=$_POST['choisir'];
$salaire=$_POST['salaire'];
$temps=$_POST['temps'];
$description=$_POST['description'];
try{
$nouv=new PDO('mysql:host=localhost;dbname=sing','root','');
}
catch(PDOException $e){

echo"Erreur de connexion".$e->getMessage();
}

if(isset($_POST['contrat'],$_POST['duree'],$_POST['choisir'],$_POST['salaire'],$_POST['temps'],$_POST['description'])){
    

$ins=$nouv->prepare("INSERT INTO job(contrat,duree,choisir,salaire,temps,description) VALUES(?,?,?,?,?,?)");
$ins->execute(Array($contrat,$duree,$ch,$salaire,$temps,$description));


    echo"<script>alert('Donnee innseree avec succes')</script>";
}
echo  "<script>window.open('formul.php','_self')</script>";
?>