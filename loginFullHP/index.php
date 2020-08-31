<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jose Viera´s Resume Registry</title>
	<link rel="stylesheet" href="">

		<style>
			body {font-family: Arial, Helvetica, sans-serif;}
			form {border: 3px solid #f1f1f1;}

			section{
			  display: flex;
			  flex-direction: column;
			  width: 500px;
			  justify-content: center;
			  align-items: center;
			 margin-left: 10%;
			 background-color: rgb(0,0,0);
			  

			}


			button {
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}

			button:hover {
			  opacity: 0.8;
			}

			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			}
			
			.signbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #409adb;
			}

			.loginbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #409adb;
			}

		

			img.avatar {
			  width: 40%;
			  border-radius: 50%;
			}

			.container {
			  padding: 16px;

			}

			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
			     display: block;
			     float: none;
			  }
			  .loginbtn {
			     width: 100%;
			  }
			  .signbtn {
			     width: 100%;
			  }
			}
		</style>

</head>
<body>
	<section>

	<h1>Jose Viera's Resume Registry</h1>

		<div class="imgcontainer">
			<img src="img_avatar2.png" alt="Avatar" class="avatar">
		</div>
	  
		<div class="container">
		
			<p> This implementation retain data across multiple logout/login sessions.</p>

			<div class="container" style="background-color:#f1f1f1; display: flex; justify-content: space-around;">
				<button id="login" type="button" class="loginbtn">Login</button>
				<button id="signup" type="button" class="signbtn">Signup</button>
			</div>
	  
		</div>

	</section>
</body>
</html>

<script type="text/javascript">
    document.getElementById("login").onclick = function () {
        location.href = "login.php";
    };

        document.getElementById("signup").onclick = function () {
        location.href = "signup.php";
    };
</script>