function Modulo() {
	//Variabili
	var email_reg_exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/;
	var cognome=document.modulo.cognome.value;
	var nome=document.modulo.nome.value;
	var email=document.modulo.email.value;
	var	pass=document.modulo.pass.value;
	var confermapass=document.modulo.confermapass.value;
	var venditore=document.modulo.venditore.value;
	alert(venditore);
	

	if ((cognome == "") || (cognome == "undefined")) 
		{
		alert("Il campo Cognome e' obbligatorio.");

		return false;
		}
	else if ((nome == "") || (nome == "undefined")) 
		{
		alert("Il campo Nome e' obbligatorio.");

		return false;
		}

	else if (!email_reg_exp.test(email) || (email == "") || (email == "undefined")) {
        alert("Inserire un indirizzo email corretto.");

        return false;
		}
	else if ((pass!=confermapass) || (pass == "undefined")){
		alert("Le due password devono essere uguali.");
		document.modulo.pass.value="";
		document.modulo.confermapass.value="";
        return false;
		}
	else {
	alert("I dati sono corretti.")
	}
}