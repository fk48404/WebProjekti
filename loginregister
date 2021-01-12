<html>
<head>
	<title>Login/Register</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
<!--HEADER-->
		<?php include 'include/header.php'; ?>
<br></br>

	<div class="pjesaContact">
	<h1>Per te na kontaktuar fillimisht duhet te ndjekni proceduen me poshte: </h1>
	<p>( Ju lutem regjistrohuni ne rast qe nuk keni nje llogari ne faqen tone, nuk do te zhgenjeheni  &#9787;) </p>

		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button> 
				<button type="button" class="toggle-btn" onclick="register()">Register</button> 
			</div>
			<div class="animals-icons">
				<img src="images/d.png">
				<img src="images/c.png">
				<img src="images/b.png">
			</div>
			<form id="login" class="input-group" onsubmit="return loginValidate()">
				<input type="text" id="email" class="input-field" placeholder="Email">
				<input type="password" id="pw" class="input-field" placeholder="Fjalekalimi"></br>
				<button type="submit" class="submit-btn" onclick="validimi(0)"> Log in</button>
			</form>

			<form id="register" name="reg" class="input-group" onsubmit="return registerValidate()">
				<input type="text" id="emri" class="input-field" placeholder="Emri">
				<input type="text" id="mbiemri" class="input-field"  placeholder="Mbiemri">
				<input type="text" id="mail" class="input-field"  placeholder="Email">
				<input type="password" id="psw" class="input-field" name="password" placeholder="Fjalekalimi">
				<input type="password"  class="input-field" name="password2" placeholder="Konfirmo Fjalekalimin"></br>
				<button type="submit" class="submit-btn" onclick="return validimi(1)">Register</button>
			</form>
		</div>
			<div id="lastFooter">
				<p>&copy; 2020 Littlest Pet Shop </p>
			</div>
	</div>
		
	<script src="js/contact.js"></script>
</body>
</html>
