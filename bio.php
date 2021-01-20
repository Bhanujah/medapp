<?php
session_start();
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
</br>

<!DOCTYPE html>
<html>
	<head>
			
		<title>Page connecté à votre compte</title>
		<link rel="icon" type="image/png" href="logo1.png" />
		<link rel="stylesheet" href="page3.css">
		<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
		<script src="download.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
		<link rel="stylesheet" type="text/css" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	</head>
	<body style="background: url(thumbnail.png) no-repeat center center fixed;background-size: cover;background-position: center;">
	<div id ="menu" align="middle">
	<a style= "color:white;" href="index.html">HOME | </a>
			<a style= "color:white;" href="index.html">RGPD | </a>
			<a style= "color:white;" href="liens_utiles.html">LIENS UTILES</a><br>
			<a style= "color:white;" href="mentions_legales.html"> Copyright© SBEPISEN 2021 - Tous droits réservés Réalisation | Mentions légales</a>
			<h1 style="background: rgba(211,211,230, 0.7)">Vos analyses médicales</h1>
			<div style="background: rgba(211,211,230, 0.7); color:black">
<?php
	echo 'Genre: '.$_POST["genre"].'<br>';
	echo 'Prénom : '.$_POST["prenom"].'<br>';
	echo 'Nom : ' .$_POST["nom"].'<br>';
	echo 'sécurité : ' .$_POST["secu"].'<br>';
	echo 'Adresse : ' .$_POST["adresse"].'<br>';
	echo 'Code Postal : ' .$_POST["codepostal"].'<br>';
	echo 'Medecin : ' .$_POST["medecin"].'<br>';
	echo 'Contact : ' .$_POST["contact"].'<br>';
	echo 'Date : ' .$_POST["date"].'<br>';
				
?>
</div>
	</div>
	<button type="button" class="btn btn-primary" style="width:25% !important; margin:auto;display:grid;" onClick="generatePDF()">Afficher en pdf</button><br>	
		<div id= "invoice" class="login-page">
			<div class="form">
				<form class="login-form">
					<form>
						<ul type="square" style="border:2px solid black; background:grey">
							<h2>LABORATOIRES D'ANALYSES MEDICALES DE CRETEIL (SBEPISEN)</h2>
								<p style="color:black">122 Rue Paul Armangot, 94081 Vitry-Sur-Seine<br>
								Tél: 01 56 72 62 55<br> </p>
						</ul >
								<p style="color:black">DR. JEAN SROUSSI<br></p>
								
							<div align="right" style="color:black">
								<?php echo $_POST['genre'];?>.<?php echo $_POST['nom'].' '.$_POST['prenom'];?><br>
								<?php echo $_POST['adresse'];?><br>
								<?php echo $_POST['codepostal'];?><br>
							</div>
							<p style="color:black">Dossier n° <?php echo $_POST['dossier'];?><br>
							Date: <?php echo $_POST['date'];?><br>
							Médecin Traitant: <?php echo $_POST['medecin'];?><br> </p>

							<ul type="square" style="border:2px solid black ; background:grey">
								<br>
								<center>
									<FONT size="4pt" style="color:black">COMPTE RENDU D'ANALYSES DE BIOLOGIE MEDICALES
									</FONT>
								</center>
							</ul>

							<ul type="square" style="background:none; text-decoration:underline; color:black">
								<br>
								<center>
									<FONT size="6pt">BIOCHIMIE ANALYSE
									</FONT>
								</center>
							</ul>
						<h4 style="color:black;text-decoration:underline;">BIOCHIMIE SANGUINE</h4>
							<table>
								<tr>
									<td>GLYCEMIE A JEUN</td>
									<td><?php echo(rand(7,11)/10);?> g/l</td>
									<td>(0.70 - 1.10)</td>
								</tr>
								<tr>
									<td> </td>
									<td><?php echo(rand(389,611)/100);?> mmol/l</td>
									<td>(3.89 - 6.11)</td>
								</tr>
								<tr>
									<td>FERRITINE</td>
									<td><?php echo(rand(15,150));?> μg/l</td>
									<td>(15.0-150.0)</td>
								</tr>
								<tr>
									<td> </td>
									<td><?php echo(rand(337,3371)/10);?> pmol/l</td>
									<td>(33.7 - 337.1)</td>
								</tr>
							</table>
							
						<h4 style="color:black;text-decoration:underline;">BIOCHIMIE URINAIRE</h4>
							<table>
								<tr>
									<td>PROTEINURIE</td>
									<td><?php echo(rand(0,37)/100);?> g/l</td>
									<td>(inférieur à 0.15)</td>
								</tr>
								<tr>
									<td>GLYCOSURIE</td>
									<td><?php echo(rand(0,37)/100);?> g/l</td>
									<td>(inférieur à 0.15)</td>
								</tr>
								<tr>
									<td> </td>
									<td><?php echo(rand(0,159)/100);?> mmol/l</td>
									<td>(inférieur à 0.83)</td>
								</tr>
							</table>
							<br>
					</form>
				</form>
			</div>
			</br>
		</div>
	</body>
</html>