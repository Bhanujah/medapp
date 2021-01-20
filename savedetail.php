<?php
session_start();
header('location:home.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$dossier=$_POST['dossier'];
$genre=$_POST['genre'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$secu=$_POST['secu'];
$adresse=$_POST['adresse'];
$codepostal=$_POST['codepostal'];
$medecin=$_POST['medecin'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$s= "select * from mytable where prenom='$prenom'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$del="delete from mytable where prenom='$prenom'";
$reg="insert into mytable (dossier,genre,prenom,nom,secu,adresse,codepostal,medecin,contact,date) values ('$dossier','$genre','$prenom','$nom','$secu','$adresse','$codepostal','$medecin','$contact','$date')";
mysqli_query($con,$del);
mysqli_query($con,$reg);
echo "Vous avez bien rentré vos données!";

?>