<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestion-employe";
    
    // Faire l'appel
    $conn = new mysqli($servername, $username, $password, $dbname);




    error_reporting(0);
    echo $rn = $_GET['rn'];
   echo $fn  =$_GET['fn'];
   echo $pm  =$_GET['pm'];
   echo $dn = $_GET['dn'];
   echo $dp = $_GET['dp'];
   echo $sr = $_GET['sr'];
   echo $fc = $_GET['fc'];
   echo $ph = $_GET['ph'];



    // if (isset($_POST['submit'])) {

        // $matricule=$_POST['matricule'];
        // $nom=$_POST['Nom'];
        // $prenom=$_POST['Prénom'];
        // $date=$_POST['DateDeNaissanse'];
        // $function=$_POST['fonction'];
        // $departement=$_POST['departement'];
        // $salaire=$_POST['salaire'];
        // $photo=$_POST['photo'];

        // $query = "UPDATE 'employe' SET Nom='$_POST[Nom]',Prénom='$_POST[Prénom]',DateDeNaissanse='$_POST[DateDeNaissanse]',Département='$_POST[Département]',Salaire='$_POST[Salaire]',fonction='$_POST[fonction]',Photo='$_POST[Photo]' WHERE Matricule='$_POST[Matricule]' ";
        // $query_run = mysqli_query($conn,$query);

        // if ( $query_run) {
        //     echo '<script type="text/javascript">alert("Done")</script>';
        // }
        // else {
        //     echo '<script type="text/javascript">alert("Failed")</script>';

        // }
    // }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="editePage.css">
    <title>Document</title>
</head>
<body>


  
    

<div class="wrapper">
    <form action="" method="POST">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="number" class="form-control" placeholder="Matricule" name='matricule'> </div>
                <div class="form-row"> <input type="text" class="form-control" placeholder="Nom"  name='Nom'> </div>
                <div class="form-row"> <input type="text" class="form-control" placeholder=" Prénom" name='Prenom'> </div>
                <div class="form-row"> <input type="Date" class="form-control" placeholder="Date De Naissance" name='DateDeNaissanse'> </div>
            </section> <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" class="form-control" placeholder="Département"  name='Département' > </div>
                <div class="form-row"> <input type="number" class="form-control" placeholder="Salaire"  name='Salaire'> </div>
                <div class="form-row"> <input type="text" class="form-control" placeholder="fonction"  name='fonction'> </div>
                <div class="form-row"> <input type="file" class="form-control" placeholder="Photo"  name='Photo'>  </div>
                <input type="submit" name="edite" value = "Edite Donne">

            </section> <!-- SECTION 3 -->
            <!-- <button class="form-control" typ>Mod</button> -->
        </div>
    </form>
</div>



  
  </form>





</body>
</html>