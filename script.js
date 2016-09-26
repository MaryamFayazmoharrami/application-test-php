
$( document ).ready(function() {
  // Handler for .ready() called.
	  $("#anmeldenBereich").hide();
	$("#einloggenKalender").hide();
	$("#terminMerkmale").hide();
	$("#allButtons").hide();






$("#btn5").click(
	function() {
		$("#einloggenKalender").show();
		$("#btn5").hide();
		$("#btn6").hide();
	}
);


$("#btn6").click(
	function() {
		$("#anmeldenBereich").show();
		$("#btn6").hide();
		$("#btn5").hide();
	}
);

$("#btn8").click(
	function(event) {
		//$("#einloggenKalender").show();
	//	$("#btn8").hide();
		//$("#einloggenKalender").hide();
		//alert(event);
		var formName = $("#formName").val();
		var formFamily = $("#formFamily").val();
		var formEmail = $("#formEmail").val();
		var formPassword = $("#formPassword").val();
		$.post( "register.php", { name: formName, family: formFamily, email: formEmail ,password: formPassword })
		  .done(function( data ) {
			alert( data);
		  });
		
	}
);


$("#btn9").click(
	function() {
		//$("#einloggenKalender").show();
	//	$("#btn8").hide();
		//$("#einloggenKalender").hide();
		var einloggenEmail = $("#einloggenEmail").val();
		var einloggenPassword = $("#einloggenPassword").val();
		$.post( "login.php", {  email: einloggenEmail ,password: einloggenPassword })
		  .done(function( data ) {
			//$("#einloggenKalender").hide()
			if( data !="nutzer oder kenntwort ist falsch"){
				$("#einloggenKalender").hide();
				$("#allButtons").show();
				$("#textEinloggen").hide();
				$("#terminMerkmale").show();
				}
			$("#result").html(data);
			$("td").click(function(){  
				if(!$(this).hasClass("opened")){
						$(this).addClass("opened");
						
						if($(this).hasClass("datum"))
							$(this).html('<input type="date" value='+$(this).html()+' />' )
						
						else if($(this).hasClass("auswahl"))
							$(this).html('<select><option>Intern</<option><option>Urlaub</<option><option>Kunde</<option></select>' )
						
						else $(this).html('<input type="text" value='+$(this).html()+' />' )
							
						
					}
					
			
			});
			$("#terminMerkmale").click(function(){  
				$.each($("td.opened"), function(index, td){
					if($(td).hasClass("auswahl"))
						editedText = $(td).find("select").val();
					else
						editedText = $(td).find("input").val();
					$(td).html(
						editedText
					);
					$(td).removeClass("opened");
					
				});
			});

			//console.log( data);
			$("tr").addClass("colored");
			$("tr").mouseover(function(){
				$(this).addClass("mouseon");
			});
			$("tr").mouseout(function(){
				$(this).removeClass("mouseon");
			});
			
			
		  });
		
	}
);

$("#btn7").click(
	function() {
		//$("#einloggenKalender").show();
	//	$("#btn8").hide();
		//$("#einloggenKalender").hide();
		var terminNameDesTermin = $("#nameDesTermin").val();
		var terminTyp= $("#typ").val();
		var terminDatumBeginn = $("#datumBeginn").val();
		var terminDatumEnde = $("#datumEnde").val();
		var terminBemerkung = $("#bemerkung").val();
		$.post( "speichern.php", { 
		nameDesTermin: terminNameDesTermin, 
		typ: terminTyp, 
		datumBeginn: terminDatumBeginn ,
		datumEnde: terminDatumEnde, 
		bemerkung: terminBemerkung 
		})
		  .done(function( data ) {
			alert( data);
		  });
		
	}
);

});
