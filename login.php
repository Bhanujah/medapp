<html>
<head>
    <title> User Login and registration </title>
    <link rel="icon" type="image/png" href="logo1.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" /> 
</head>
<body>
    <nav style="height:80px">
		<ul id="nav"><!--
			--><li style="float:left"><a href="#"><img id="logo" src="logo.png" alt="logo"/></a></li>
		</ul>
	</nav>
<div class="container">
    <div class="login-box"> 
    <div class="row">
    <div class="col-md-6 login-left">
        <h2 style="color:black"> Se connecter </h2>
        <form action="validation.php" method="post">
            <div class="form-group">
                <label> Username (⚠️votre prénom)</label>
                <input type="text" name="username" class="form-control" required>
            </div>    
            <div class="form-group">
                <label> Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <input type="checkbox" onclick="Afficher()"> Afficher le mot de passe
            </div>
            <button type="submit" class="btn btn-primary"> Connectez-vous </button>
        </form>
    </div>
    <div class="col-md-6 login-right">
        <h2 style="color:black"> S'inscrire </h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <label> Username (⚠️votre prénom)</label>
                <input type="text" name="username" class="form-control" required>
            </div>    
            <div class="form-group">
                <label> Mot de passe</label>
                <input type="password" id="password1" name="password" class="form-control" required>
                <input type="checkbox" onclick="Afficher1()"> Afficher le mot de passe
            </div>
            <button type="submit" class="btn btn-primary"> Inscrivez-vous </button>
        </form>
    </div>
    </div>
    </div>
    <script>
		function Afficher() {
			var input = document.getElementById("password");
			console.log(input);
			if (input.type == "password") {
				input.type = "text";
			}
			else {
				input.type = "password";
			}
		} 
    </script>
    <script>
		function Afficher1() {
			var input = document.getElementById("password1");
			console.log(input);
			if (input.type == "password") {
				input.type = "text";
			}
			else {
				input.type = "password";
			}
		} 
	</script>


</div>
<div id ="menu" align="center">
	<a style= "color:white;" href="index.html">HOME | </a>
	<a style= "color:white;" href="contact.html">CONTACT | </a>
	<a style= "color:white;" href="index.html">RGPD | </a>
    <a style= "color:white;" href="liens_utiles.html">LIENS UTILES | </a><br>
    <a style= "color:white;" href="faq.html">FAQ </a><br>
	<a style= "color:white;" href="mentions_legales.html"> Copyright© SBEPISEN 2021 - Tous droits réservés Réalisation | Mentions légales</a>
</div>
</body>
</html>