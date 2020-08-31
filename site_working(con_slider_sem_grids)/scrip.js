

	function validation(){
		var name = document.getElementById('cNome').value;
		var email = document.getElementById('cMail').value;
		var password = document.getElementById('cSenha').value;
		if (name == '' || password=='' || email=='') 
		{
			document.getElementById("eresult").innerHTML = "All field required";
			document.getElementById('alert').style.display="block";/*muestra imagen*/
			

			return false;

		}
		else if(password.length<8){
			document.getElementById("eresult").innerHTML = "password must be at least 8 character";
			
			return false;			
		}
		else{
			alert("Eu sou um alert!");
			document.getElementById('alert').style.display="none";/*oculta imagen*/
			return true;

		}

	}
