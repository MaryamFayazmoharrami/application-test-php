<?php 
	$verbindung = mysql_connect("localhost", "mariwelt","mariwelt")
	or die("Fehler im System");
	
	mysql_select_db("terminkalender")
	or die("Verbindung zur Datenbank war nicht möglich...");
	//	print_r($_POST);
	if(isset($_POST["name"])){
	
		$name= $_POST["name"];
		$family= $_POST["family"];
		$email= $_POST["email"];
		$password= $_POST["password"];	
		
		if($family == "" or $email == ""  or $name == ""or  $password == "" ){		
			echo"Du hast die Felder nicht ausgefüllt...";	
		}
			else{
			
				$eintrag="INSERT INTO users(name, family,email,password) VALUE ('$name', '$family','$email', '$password')";
				$eintragen=mysql_query($eintrag);
				
				if($eintragen== true){
					echo"Deine Daten wurde gespeichert";
				}
				else{
					echo"Fehler im System. Konnte nicht gespeichert werden";
			
				}
			}
	}
	
	mysql_close($verbindung);
	?>