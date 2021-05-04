<?php
include("./kontaktoss.php");
extract($_POST);
    $sql = "insert into logg_inn(navn, epost, mobilnummer, melding) values ('$navn','$epost','$mobilnummer','$melding')";
    $result = mysqli_query($con,$sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo "Thank You For Contacting Us ";
$mysqli->close();
?>