	<?php 
	$verbindung = mysql_connect("localhost", "mariwelt","mariwelt")
	or die("Fehler im System");
	session_start();
	mysql_select_db("terminkalender")
	or die("Verbindung zur Datenbank war nicht möglich...");
	
/* 	print_r(); */
if(isset($_POST["nameDesTermin"])){
		$nameDesTermin= $_POST["nameDesTermin"];
		$typ= $_POST["typ"];
		$datumBeginn= $_POST["datumBeginn"];
		$datumEnde= $_POST["datumEnde"];
		$bemerkung= $_POST["bemerkung"];
		$userId= $_SESSION["userid"];
	
	
	
	if($nameDesTermin == "" or $typ == ""  or $datumBeginn == ""or  $datumEnde == "" or $bemerkung == "" ){		
		echo"Du hast die Felder nicht ausgefüllt...";	
	}
		else{
		
			$eintrag="INSERT INTO plannungs(userid, nameDesTermin, typ,datumBeginn,datumEnde, bemerkung) VALUE ('$userId','$nameDesTermin', '$typ','$datumBeginn', '$datumEnde', '$bemerkung')";
			$eintragen=mysql_query($eintrag);
			echo mysql_error();
			if($eintragen==true){
				echo"Deine Date wurde gespeichert";
			
			}
			else{
				echo" Fehler im System. Konnte nicht gespeichert werden";
		
			}
		}
}
	
	mysql_close($verbindung);
	?>
