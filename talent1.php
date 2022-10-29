<?PHP
try{
$nouv=new PDO('mysql:host=localhost;dbname=sing','root','');
}
catch(PDOException $e){

echo"Erreur de connexion".$e->getMessage();
}

if(isset($_POST['nomprenom'],$_POST['tel'],$_POST['nomentre'],$_POST['choix1'],$_POST['choix2'])){
$nomprenom=$_POST['nomprenom'];
$tel=$_POST['tel'];
$nomentre=$_POST['nomentre'];
$choix1=$_POST['choix1'];
$choix2=$_POST['choix2'];
$ins=$nouv->prepare("INSERT INTO talent1(nomprenom,tel,nomentre,choix1,choix2) VALUES(?,?,?,?,?)");
$ins->execute(Array($nomprenom,$tel,$nomentre,$choix1,$choix2));

}
echo  "<script>window.open('job-information.html','_self')</script>";


?>