<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


 <?php include 'nav.php';?>

 <?php include 'connect.php';?>

    <?php


$sql = "SELECT Matricule, Nom, Prénom, DateDeNaissanse, Département, Salaire, Fonction,Photo FROM employe";

$result = $conn->query($sql);

    if ($result->num_rows> 0) {
        echo "<table>
        <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th >Date</th>
        <th>Département</th>
        <th>Salaire</th>
        <th>Fonction</th>
        <th>Photo</th>
        <th>Delete/Edite</th>
        </tr>";

    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td> " . $row["Matricule"]."</td>"."<td>". $row["Nom"]."</td>"."<td>". $row["Prénom"]."</td>"."<td>". $row["DateDeNaissanse"]."</td>". "<td>". $row["Département"]."</td>"."<td>". $row["Salaire"]."</td>"."<td>". $row["Fonction"]."</td>"."<td>" .$row['Photo']."</td>"."<td>"."<a href = 'deletePage.php?rn=$row[Matricule]'target='_blank'>Delete"."</td>"."<td>"."<a href = 'editePage.php?rn=$row[Matricule]&fn=$row[Nom]&pm=$row[Prénom]&dn=$row[DateDeNaissanse]&dp=$row[Département]&sr$row[Salaire]&fc=$row[Fonction]&ph=$row[Photo]' target='_blank'>Edite"."</td></tr>";
            // echo "<tr><td> " . $row["Matricule"]."</td>"."<td>". $row["Nom"]."</td>"."<td>". $row["Prénom"]."</td>"."<td>". $row["Date"]."</td>". "<td>". $row["Département"]."</td>"."<td>". $row["Salaire"]."</td>"."<td>". $row["Fonction"]."</td>"."<td>" . "<img src=".$row['Photo'].' width=100px height="100px">'."</td>"."<td>"."<button>Delete</button><button>Edite</button>"."</td></tr>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }


     ?>

<h1 style="color: transparent;">qcdqcvdsv</h1>

       

     <?php include 'footer.php';?>


</body>
</html>