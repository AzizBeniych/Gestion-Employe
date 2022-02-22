<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="deletePage.css">
    <title>Document</title>
</head>
<body>



<?php
include ('connect.php');

    error_reporting(0);

    $rollno=$_GET['rn'];
    $query = "DELETE FROM employe WHERE Matricule = '$rollno' ";
    $data=mysqli_query($conn,$query);


    if ($data) {
    echo "<font color= 'green' ><h1>✔ <br> L'employé a été Supprimé<h1/>";
    }
    else{
        echo "Failed L'employé Supprimé ";

    }

?>

    


    
</body>
</html>