<!DOCTYPE html>

<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="styletest.css">
	<script type="text/javascript" src="verif.js"></script>
  <script type="text/javascript" src="password.js"></script>
<script src="email-validation.js"></script>
	
</head>
<body><form name="form1" method="POST" action="views/modifierclient.php">
		 <p class="bienvenue">Inscription </p>
		 <br> <br>
		 
<div class="content">
  	<fieldset class ="border1">
  			<legend class="h1"> Formulaire d'inscription </legend>
 			<br>
 		<div class="h2">
 			<label class="label"> CIN:</label><input class="controle" type="text" maxlength="8" name="cin" placeholder="numero de votre carte d'identité" oninput="return verif(this.value)">
 		<span class="resultat"></span></div>
  		<div class="h2">
  			<label class="label">Nom:</label><input class="controle" type="text" name="nom" placeholder="votre nom">
  		<span class="resultat"></span>
  	</div>
  		<div class="h2">
  			<label class="label">Prenom:</label><input class="controle" type="text" name="prenom" placeholder="votre prenom">
  		<span class="resultat"></span></div>
  		<div class="h2">
  			<label for="psw" class="inputFields">e-mail:</label><input class="controle" type="text" name="email" placeholder="exemple@mail.com">
  		<span class="resultat"></span></div>
  		<div class="h2">
  			<label class="label">mot de pass:</label><input class="controle" type="password" name="mdp" placeholder="doit contenir des chiffres et des lettres">
  	
  		<div class="h2">
  		
  		<div class="h2">
  			<label class="label">date de naissance:</label><input class="controle" type="date" name="daten">
  		<span class="resultat"></span></div>
  		<div class="h2">
  			<label class="label">telephone:</label><input class="controle" type="text" name="tel" placeholder="votre adresse">
  		<span class="resultat"></span></div>
  
    
  						
			<br> <br>

					<input type="submit" name="save" value="Enregistrer" class="button"   ></form>
 
				
					<input type="button" name="cancel" value="annuler" class="button">
</form>
					
					
		</div>
		
	</fieldset>
</div>
</body>
</html>