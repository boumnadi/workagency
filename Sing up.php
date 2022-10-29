<?php
$email=$_POST['email'];
$password=$_POST['password'];
try {
    $pdo=new PDO("mysql:host=localhost;dbname=sing","root","");
    // $email=htmlspecialchars($email);
    // $password=htmlspecialchars($password);

}catch(PDOException $e){
    echo $e->getMessage();
    }
    
    $ins=$pdo->query("select * from inscri where email='$email' and password='$password'");
    // $ins->execute();
    $ins->setFetchMode(PDO::FETCH_ASSOC);
    $tab=$ins->fetchAll();
    if(count($tab)>0){
    echo "<script>alert('vous déja inscrire')</script>";
    echo  "<script>window.open('workagency.html','_self')</script>";
    }else{
         echo '<script>alert("vous devez s inscrire")</script>';
        // echo "<script>alert('vous devez s inscrire')</script>";
        echo  "<script>window.open('Formulaire.html','_self')</script>";
    }


?>