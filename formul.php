<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/9659150c6e.js" crossorigin="anonymous"></script>
  <a href="https://icons8.com/icon/104406/ringing-phone"></a>

  <style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');
</style>
  <link rel="stylesheet" type="text/css" href="work.css">

  <title>work-agency:le premier pas vers votre futur job</title>
  

</head>
<body>
<!-- navbar  -->
  <div class="navbar">

    <div class="container   flex"> 
      <h1 class="logo">Work-Agency</h1>
      <nav>
        <ul>
          <li><a href="index.html">à propos</a></li>
          <li><a href="Services.html">Services</a></li>
          <li><a href="offres.html">Offres</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</head>
<body>



<style>
.navbar{
  background-color: #4158D0;
 background: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC7);
 color:#fff;
height: 70px;
.container{
  max-width:1100px;
  margin:0 auto;
  overflow:auto;
  padding:0 40px;
}
.flex{
  display:flex;
  justify-content:center;
  align-items:center;
  height:100%;

}

</style>





<?php 

   try{
    $db=new PDO("mysql:host=localhost;dbname=sing","root","");
   }
   catch(PDOException $e)
   {
        echo $e.getMessage();
   }
   if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['profession']) && isset($_POST['cnss']) && isset($_POST['email']) && isset($_POST['cv'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['profession']) && !empty($_POST['cnss']) && !empty($_POST['email'])&& !empty($_POST['cv'])){
        
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $profession=htmlspecialchars($_POST['profession']);
        $cnss=htmlspecialchars($_POST['cnss']);
        $email=htmlspecialchars($_POST['email']);
        $cv=htmlspecialchars($_POST['cv']);}}
   $r=$db->prepare("select * from demonde");
   $r->execute();
   $per = $r->fetchAll(PDO::FETCH_ASSOC);
   echo "<center>";
   echo"<table border=1>";

   echo '<tr>';

   echo"<th>Id </th>";
   echo"<th>Nom </th>";
   echo"<th>Prenom </th>";
   echo"<th>Profession </th>";
   echo"<th>Numero CNSS</th>";
   echo"<th>Email</th>";
   echo"<th>CV</th>";
   echo"</tr>";
   echo"<style>
   table{
     margin-top:70px;
          width:80%;
        background-color:white;
        border:5px;
        font-family : Arial; 
         font-style:
         text-align:center;
         border-style: outst;
         border-style : solid ;
         border-width:;
         border-color :green;

   }
   td{
     aling-texte:center;
   }


   </style>";
     
   foreach($per as $value){
        echo"<tr>";
        echo"<td>";
          echo $value['id'];
        echo"</td>";
        echo"<td>";
          echo $value['nom'];
        echo"</td>";
        echo"<td>";
          echo $value['prenom'];
        echo"</td>";
        echo"<td>";
         echo $value['profession'];
         echo"</td>";
         echo"<td>";
          echo $value['cnss'];
         echo"</td>";
         echo"<td>";
          echo $value['email'];
         echo"</td>";
         echo"<td>";
          echo $value['cv'];
         echo"</td>";
       
       echo"</tr>";
   }
   echo"</table>";
   echo"</center>";
  
?>
</body>
</html>