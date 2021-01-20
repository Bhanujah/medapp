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
		<link rel="stylesheet" href="page3.css">
		<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
		<script src="download.js"></script>
		<link rel="icon" type="image/png" href="logo1.png" />
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
								<p style="color:black">5 Place de l'Abbaye, 94000 Créteil<br>
								Tél: 01 43 77 56 25<br> </p>
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
									<FONT size="6pt">HEMATOLOGIE SANGUINE
									</FONT>
								</center>
							</ul>
						<h4 style="color:black;text-decoration:underline;">NUMERATION</h4>
							<table>
								<tr>
									<td>GLOBULES ROUGES</td>
									<td><?php echo(rand(3000000,6000000));?> /m3</td>
									<td>normal</td>
								</tr>
								<tr>
									<td>HEMOGLOBINE</td>
									<td><?php echo(rand(8,27));?> g/dl</td>
									<td>anormal</td>
								</tr>
								<tr>
									<td>HEMATOCRITE</td>
									<td><?php echo(rand(26,80));?>%</td>
									<td>anormal</td>
								</tr>
								<tr>
									<td>VOLUME GLOBULAIRE MOYEN</td>
									<td><?php echo(rand(45,110));?> fl</td>
									<td>normal</td>
								</tr>
							</table>
							
						<h4 style="color:black;text-decoration:underline;">FORMULE LEUCOCYTAIRE</h4>
							<table>
								<tr>
									<td>POLYNEUTROPHILES</td>
									<td><?php echo(rand(33,69));?> %</td>
									<td>3 311 /mm3</td>
								</tr>
								<tr>
									<td>POLYBOSINOPHILES</td>
									<td><?php echo(rand(1,25));?> %</td>
									<td><?php echo(rand(157,399));?> /mm3</td>
								</tr>
								<tr>
									<td>POLY BASOPHILES</td>
									<td><?php echo(rand(1,14));?> %</td>
									<td><?php echo(rand(41,68));?> /mm3</td>
								</tr>
								<tr>
									<td>LYMPHOCYTES</td>
									<td><?php echo(rand(8,28));?> %</td>
									<td><?php echo(rand(1099,2780));?> /mm3</td>
								</tr>
							</table>
							<br>
							
						<h4 style="color:black;text-decoration:underline;">PLAQUETTES</h4>
							<table>
								<tr>
									<td>EN TISSU</td>
									<td><?php echo(rand(1920000,3540000));?> /mm3</td>
									<td>normal</td>
								</tr>
							</table>
						<h4 style="color:black;text-decoration:underline;">VITESSE DE SEDIMENTATION</h4>
							<table>
								<tr>
									<td>1ère HEURE</td>
									<td><?php echo(rand(0,7));?> fft</td>
									<td>0 à 7</td>
								</tr>
								<tr>
									<td>2ème HEURE</td>
									<td><?php echo(rand(7,13));?> fft </td>
									<td>7 à 13</td>
								</tr>
							</table>				

					</form>
				</form>
			</div>
			</br>
		</div>
	</body>
</html>