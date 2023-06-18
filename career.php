

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style5.css" rel="stylesheet">
    <title>WolfAbility</title>
</head>
<body>



<?php 

include 'header.php';

include './partials/connect.php';


$sql = "SELECT * FROM `Careers` ";

$result = mysqli_query($con,$sql);
echo "<h1 class='alpha'>We are hiring..</h1>" ;
while($row = mysqli_fetch_assoc($result)){
    $careername = $row["CareerName"];
    $careerdesc = $row["CareerDescription"];
    
  echo " <h2>$careername</h2><p>$careerdesc</p>";

  
  
    

};
   

 echo "<br><br><br><br><p>send CVs and applications to <a href='mail.sam@wolfability.com'>sam@wolfability.com</a></p>
 "

?>
  

</body>
</html>