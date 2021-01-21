<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<html>
<head>
<title> Saisie de données </title>
<link rel="stylesheet" type="text/css" href="page2.css">
<link rel="icon" type="image/png" href="logo1.png" />    
<link rel="stylesheet" type="text/css" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" /> 
</head>

    <body>
        <nav style="height:80px">
			<ul id="nav">
				<li style="float:left"><a href="#"><img id="logo" src="logo.png" alt="logo"/></a></li>
			</ul>
		</nav>
        

        
        <div class="container" style="text-align:center">
        <a style= "color:white;" href="logout.php"> se déconnecter </a>
        <h2 style="background-color:aliceblue;border:3px solid black; color:black";> BONJOUR <?php echo $_SESSION['username'];?> </h2>
        </div>
        <h5 style="background-image:url(thumbnail.png); color:black; background:aliceblue; text-align:center"> Saisissez les informations du patient: </h5>
        <form action="savedetail.php" method="post" name="info" style="background:rgba(211,211,211, 0.6);text-align:left;">
            <div class="form-donnee">
            N°DOSSIER: <input type="text" name="dossier" placeholder="2478999" required/></br>
            </br>
            Genre: <input type="text" name="genre" placeholder="Insérer M/ MME/ MLLE" required/></br>
            </br>
            Prénom:<input value=<?php echo $_SESSION['username'];?> type="text" name="prenom" placeholder="prenom"> </br>
            </br>
            Nom de Famille: <input type="text" name="nom" placeholder="Nom de Famille" required/></br>
            </br>
            N° de sécurité social: <input type="text" name="secu" placeholder="n° de sécurité sociale" required/></br>
            </br>
            Adresse:<input type="text" name="adresse" placeholder="ex: 47 Avenue des Ternes"required/></br>
            </br>
            Code Postal<input type="text" name="codepostal" placeholder="ex: 75000 Paris"required/></br>
            </br>
            Médecin traitant: <input type="text" name="medecin" placeholder="ex: DR.GILLES"required/></br>
            </br>
            Personne à contacter en cas d'urgence: <input type="text" name="contact" placeholder="ex:M.DUPONT"required/></br>
            </br>
            Date d'intervention: <input type="text" name="date" placeholder="ex: 13/12/2017"required/></br>
            </br>
            <h5>Choix du type d'analyses:</h5>
            <SELECT name="choix" size="1" onclick="this.form.texte.value=this.options[this.selectedIndex].text;">
                <OPTION>HEMATOLOGIE du 22.08.20
                <OPTION>BIOCHIMIE SANGUINE du 08.10.19
            </SELECT> Choix du traitement: <input type="text" name="texte" placeholder="Choisissez votre analyse" disabled="disabled" required/></br><br>
            <br>
            Choisissez un parmi vos deux analyses: <button type="submit" class="btn btn-primary" formaction="page3.php"> Afficher les analyses hématologiques </button>
            <button type="submit" class="btn btn-primary" formaction="bio.php"> Afficher les analyses biochomiques</button>
            <br>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" formaction="savedetail.php"> Modifier et enregistrer vos données </button></br>
        
            </div>
        </form>
        </br>    
        
        <div id ="menu" text-align="center">
			
			<a style= "color:white;" href="index.html">HOME | </a>
			<a style= "color:white;" href="index.html">RGPD | </a>
            <a style= "color:white;" href="liens_utiles.html">LIENS UTILES | </a><br>
            <a style= "color:white;" href="faq.html">FAQ </a><br>
			<a style= "color:white;" href="mentions_legales.html"> Copyright© SBEPISEN 2021 - Tous droits réservés Réalisation | Mentions légales</a>
		</div>
    </body>    
</html>