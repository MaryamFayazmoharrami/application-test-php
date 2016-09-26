<?php 
	$verbindung = mysql_connect("localhost", "mariwelt","mariwelt")
	or die("Fehler im System");
	session_start();
	mysql_select_db("terminkalender")
	or die("Verbindung zur Datenbank war nicht möglich...");
	//	print_r($_POST);
	if(isset($_POST["email"])){
	
		
		$email= $_POST["email"];
		$password= $_POST["password"];	
		
		if($email == "" or $password == "" ){		
			echo"Du hast die Felder nicht ausgefüllt...";	
		}
		else{

				$eintrag="SELECT * FROM users WHERE email like '$email' AND password like '$password'";
				$eintragen=mysql_query($eintrag);
				//print_r($eintragen);
				if($eintragen && $personDaten = mysql_fetch_object($eintragen)){
					$id= $personDaten->id;
					$_SESSION["userid"] = $id;
					$eintrag2="SELECT * FROM plannungs WHERE userid=$id";
					$eintragen2=mysql_query($eintrag2);
					echo "<table>";
					echo "<tr><th>Title </th><th>Typ </th><th>Datum Beginn</th><th>Datum Ende</th><th>Bemerkung</th><tr>";
					while($row = mysql_fetch_object($eintragen2)){
						echo "<tr>";
							echo "<td style='display: none;'>".$row->id."</td>";
							echo "<td>".$row->nameDesTermin."</td>";
							echo "<td class='auswahl'>".$row->typ."</td>";
							echo "<td class='datum'>".$row->datumBeginn."</td>";
							echo "<td class='datum'>".$row->datumEnde."</td>";
							echo "<td>".$row->bemerkung."</td>";
						echo "</tr>";
					}
					echo "</table>";					
				}
				else{
					echo"nutzer oder kenntwort ist falsch";
			
				}
			}
	}
	
	mysql_close($verbindung);
	?>