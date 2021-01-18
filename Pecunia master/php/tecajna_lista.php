<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Table</title>
</head>
<body>

<table id="records__table">
  
<tr class="heading">
          <th>Država</th>
          <th>Šifra valute</th>
          <th>Valuta</th>
          <th>Jedinica</th>
          <th>Kupovni za devize</th>
          <th>Srednji za devize</th>
          <th>Prodajni za devize</th>
        </tr>
<?php
$conn=mysqli_connect("localhost","root","fesb1234","pecunia_db");
if($conn->connect_error){
die("Connection failed:". $conn->connect_error);

}

$sql="SELECT * FROM valuta";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    
    echo"<tr><td>". $row["drzava"] ."</td><td>".$row["sifra_valute"]."</td><td>". $row["valuta"] ."</td><td>". $row["jedinica"] ."</td><td>". $row["kupovni_devize"] ."</td><td>". $row["srednji_devize"] ."</td><td>". $row["prodajni_devize"] ."</td></tr>";
  }
 
  
}
else{
  echo "0 result";
}
$conn->close();
?>
 
    </table>
   
</body>
</html>