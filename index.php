<!DOCTYPE html>
<html>
<head>
	<title>MySQL - Anmeldung</title>
	<meta charset="UTF-8" />
	<script src="jquery-3.1.1.min.js"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<p id="textEinloggen">Bitte loggen Sie sich erst ein und wenn Sie kein Account bei uns haben,bitte erst registieren. wir freuen uns auf Sie</p>
<div id="anmeldenBereich">
	<form action="seite1.php" method="post">
	<label for="name">Name:</label>
	<input id="formName" type="text" name="name" />
	<label for="name">Family:</label>
	<input id="formFamily" type="text" name="family" />
	<label for="name">E-mail:</label>
	<input id="formEmail" type="email" name="email" />
	<label for="name">Password:</label>
	<input  id="formPassword" type="password" name="password" />
	</br>
	<!-- <input type="submit" value="Anmelden" /> -->
	</form>
	<Button id="btn8" Value="" name="weiterZumEinloggen" style="height: 40px; width: 190px;  margin-top: 20px;" >Weiter zum Einloggen</button>
</div>

<div id="einloggenKalender">
	<form action="seite1.php" method="post">
	<label for="name">E-mail:</label>
	<input id="einloggenEmail"type="email" name="email" />
	<label for="name">Password:</label>
	<input id="einloggenPassword"type="password" name="password" />
	</br>
	<!-- <input type="submit" value="Einloggen" /> -->
	</form>
	</br>
	<Button id="btn9" Value="" name="weiter" style="height: 40px; width: 190px;  margin-top: 20px;" >Weiter</button>
</div>

<div id="terminMerkmale">
	<form action="seite1.php" method="post">
	<label for="titel">Titel:</label>
	<input id="nameDesTermin" type="text" name="nameDesTermin" />
	<label for="tp">Typ:</label>
	<select id="typ" name="typ">
			<option>Intern</option>
			<option>Kunde</option>
			<option>Urlaub</option>
		</select>
	<label for="dabe">Datum-Beginn:</label>		
	<input id="datumBeginn" type="Date" name="datumBeginn" />
	<label for="daen">Datum-Ende:</label>
	<input id="datumEnde" type="Date" name="datumEnde" />
	<label for="beme">Bermerkung:</label>
	<input id="bemerkung" type="text" name="bemerkung" />
	</br>
	<!-- <input type="submit" value="Schicken" /> -->
	</form>
	<Button id="btn7" Value="" name="schicken" style="height: 40px; width: 190px;  margin-top: 20px;" >Schicken</button>
</div>


<!-- <div id="allButtons" >
<button id="btn1" Value="" name="anzeigen" style="height: 40px; width: 190px;  margin-top: 20px;" >Abmelden</button>
<button id="btn2" Value="" name="hinzufügen" style="height: 40px; width: 190px;  margin-top: 20px;" >Hinzufügen</button>
<button id="btn3" Value="" name="aendern" style="height: 40px; width: 190px;  margin-top: 20px;" >Ändern</button>
<button id="btn4" Value="" name="anzeigen" style="height: 40px; width: 190px;  margin-top: 20px;" >Entfernen</button>
</div> -->

<button id="btn5" Value="" name="einloggen" style="height: 40px; width: 190px;  margin-top: 20px;" >Einloggen</button>
<button id="btn6" Value="" name="registieren" style="height: 40px; width: 190px;  margin-top: 20px;" >Registieren</button>
<div id="result"></div>



</body>


</html>
