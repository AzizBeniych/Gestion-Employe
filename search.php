<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



                <form class="d-flex ms-auto" method="POST">
                    <input type="text" class="form-control me-sm-2" placeholder="Search">
                    <button type="submit" class="btn btn-outline-light" name="search">Search</button>
                </form>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion-employe";

// Faire l'appel
$conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST["search"])) {
        $str = $_POST["search"];
        $sth = $conn->prepare("SELECT * FROM 'search' WHERE Matricule ='$str'");
        $sth->setFetchMode(mysqli:: FETCH_OBJ);
        $sth-> execute();
    }
    if($row = $sth->fetch())
    {
      ?>
    <br><br>
    <table>
      <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date</th>
        <th>Département</th>
        <th>Salaire</th>
        <th>Fonction</th>
        <th>Photo</th>

      </tr>
      <tr>
        <td><?php echo $row->Matricule; ?></td>
        <td><?php echo $row->Nom; ?></td>
        <td><?php echo $row->Prénom; ?></td>
        <td><?php echo $row->Date; ?></td>
        <td><?php echo $row->Département; ?></td>
        <td><?php echo $row->Salaire; ?></td>
        <td><?php echo $row->Fonction; ?></td>
        <td><?php echo $row->Photo; ?></td>
      </tr>
    
    </table> 
    <?php
   }
   
    else{
      echo "hahahhahahaha";
    }
?>
    
</body>
</html>