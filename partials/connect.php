<?php 


 $con = new mysqli('localhost','root','','WolfabilityWebsite');
 
 
 if(!$con){ 
 
    die(mysqli_error($con));
 }

?> 