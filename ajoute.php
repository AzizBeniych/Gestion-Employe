<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="AjoutPage.css">

    <title>Document</title>
</head>
<body>


<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion-employe";

// Faire l'appel
$conn = new mysqli($servername, $username, $password, $dbname);


// if (isset($_POST['submit'])) {


  $matricule=$_POST['matricule'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $date=$_POST['date'];
  $function=$_POST['fonction'];
  $departement=$_POST['departement'];
  $salaire=$_POST['salaire'];
  $photo=$_POST['photo'];

  $req="INSERT INTO employe (Matricule,Nom,Prénom,DateDeNaissanse,Département,Salaire,fonction,Photo) values ('$matricule','$nom','$prenom',' $date','$function','$departement','$salaire','$photo')";

  $res=mysqli_query($conn,$req);


// }
  ?>



<div class="container">
  <h3>Entrez Un Nouvel Employé Ici</h3>
<form class="needs-validation"  method="POST" action="ajoute.php">
<div class="form-row" id="inpu">
  <div class="input-group col-md-4 mb-3">
    <div class="input-group-prepend">
      <div class="input-group-text">Matricule</div>
    </div>
    <input type="number" class="form-control" id="Name" placeholder="Enter Name" name="matricule">


  </div>
<div class="input-group col-md-4 mb-3" id="inpu">
    <div class="input-group-prepend">
      <div class="input-group-text">Nom</div>
    </div>
    <input type="text" class="form-control" id="Email" placeholder="Enter Email" name = "nom">

 
  </div>
  </div>
  <div class="form-row" id="inpu">
     <div class="input-group col-md-4 mb-3">
    <div class="input-group-prepend">
      <div class="input-group-text">Prénom</div>
    </div>
    <input type="text" class="form-control" id="Mobile" placeholder="Enter Mobile" name="prenom">


  </div>

  <div class="form-row" id="inpu">
         <div class="input-group col-md-4 mb-3">
    <div class="input-group-prepend">
      <div class="input-group-text">Date</div>
    </div>
<input type="date" max="3000-12-31" min="1000-01-01" class="form-control" name="date">


  </div>
         <div class="input-group col-md-4 mb-3" id="inpu"> 
    <div class="input-group-prepend">
      <div class="input-group-text">Département</div>
    </div>
    <input type="text" class="form-control" id="City" placeholder="Enter City" name="departement">
  </div>
  </div>
  <div class="input-group col-md-4 mb-3" id="inpu">
    <div class="input-group-prepend">
      <div class="input-group-text">Salaire</div>
    </div>
    <input type="number" class="form-control" id="City" placeholder="Enter City" name="salaire">
  </div>
  </div>
  <div class="input-group col-md-4 mb-3" id="inpu">
    <div class="input-group-prepend">
      <div class="input-group-text">Fonction</div>
    </div>
    <input type="text" class="form-control" id="City" placeholder="Enter City" name="fonction">
  </div>
  </div>

  <div class="input-group col-md-4 mb-3" id="photo">
    <div class="input-group-prepend">
      <div class="input-group-text">Photo</div>
    </div>
    <input type="file" class="form-control" id="City" placeholder="Enter City" name="photo">
  </div>
  </div>


  
  <button type="submit" class="btn btn-primary mb-2" name='submit'>Ajouté</button>
  </form>
</div>


















<div class="formtwo">
<form class="needs-validation"  method="POST" action="ajoute.php" >
  
<h2>Done ✔</h2>
<h6>Un nouvel employé a été ajouté</h6>
<div class="form-row" id="inpu">
  <div class="input-group col-md-4 mb-3">
    <div class="input-group-prepend">
      <h4>Matricule :</h4>
    </div>
    <p><?php echo $matricule ?></p>
    


  </div>
<div class="input-group col-md-4 mb-3" id="inpu">
    <div class="input-group-prepend">
      <h4>Nom :</h4>
    </div>
    <p><?php echo $nom ?></p>
 
  </div>
  </div>
  <div class="form-row" id="inpu">
     <div class="input-group col-md-4 mb-3">
    <div class="input-group-prepend">
      <h4>Prénom :</h4>
    </div>
    <p><?php echo $prenom ?></p>


  </div>

  <div class="form-row" id="inpu">
         <div class="input-group col-md-4 mb-3">
    <div class="input-group-prepend">
      <h4>Date :</h4>
    </div>
    <p><?php echo $date ?></p>


  </div>
         <div class="input-group col-md-4 mb-3" id="inpu"> 
    <div class="input-group-prepend">
      <h4>Département :</h4>
    </div>
    <p><?php echo $departement ?></p>
  </div>
  </div>
  <div class="input-group col-md-4 mb-3" id="inpu">
    <div class="input-group-prepend">
      <h4>Salaire :</h4>
    </div>
    <p><?php echo $salaire ?></p>
  </div>
  </div>
  <div class="input-group col-md-4 mb-3" id="inpu">
    <div class="input-group-prepend">
      <h4>Fonction :</h4>
    </div>
    <p><?php echo $function ?></p>
  </div>
  </div>

  <!-- <div class="input-group col-md-4 mb-3" >
    <div class="input-group-prepend">
      <div class="input-group-text">Photo</div>
    </div>
    <h4></h4>
  </div>
  </div> -->


  
  <!-- <button type="submit" class="btn btn-primary mb-2">Ajouté</button> -->
  </form>
  </div>


    
</body>
</html>