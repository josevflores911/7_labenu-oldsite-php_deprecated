<?php
	session_start();
	
	if (!isset($_POST['actualiza'])){
	
		$id = $_SESSION['users1'] ;  
		$name = $_SESSION['users2'] ;
		$data = $_SESSION['users3'] ;
		$adress = $_SESSION['users4'] ;
		$mail = $_SESSION['users5'] ;
		$psw = $_SESSION['users6'] ;
	}
/*	else{
	
 		$name = $_POST['name'];
        $data = $_POST['data'];
        $adress = $_POST['adress'];
        $mail = $_POST['mail'];
        $psw = $_POST['psw']; 
	}
*/
	
?>


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

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

.delete {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.update {
  width: auto;
  padding: 10px 18px;
  background-color: #409adb;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;

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
  .delete {
     width: 100%;
  }
  .update {
     width: 100%;
  }
}
</style>


</head>
<body>
<section>

<h2>Profile information</h2>



<form action="process.php" method="POST">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

  	<a id="logOut" href="logout.php" style="margin-left:  100%;"> [x]</a><br>

    <label for="uname"><b>Username:</b></label>
    <p class="tag"><?php echo "Óla,".$name; ?></p>
    <input type="text" style="visibility: hidden;" placeholder="Enter UserName" name="name" id="name"required>

    <label for="data"><b>Birthday:</b></label>
    <p class="tag"><?php echo $_SESSION['users3']; ?></p>
    <input type="date" style="visibility: hidden;" placeholder="Enter Birthday" name="data" id="data"required>

    <label for="adress"><b>Adress:</b></label>
    <p class="tag"><?php echo $_SESSION['users4']; ?></p>
    <input type="text" style="visibility: hidden;" placeholder="Enter Adress" name="adress" id="adress" required>

    <label for="umail"><b>E-mail:</b></label>
    <p class="tag"><?php echo $_SESSION['users5']; ?></p>
    <input type="email" style="visibility: hidden;" placeholder="Enter E-mail" name="mail" id="mail" required>

    <label for="psw"><b>Password:</b></label>
    <p class="tag"><?php echo $_SESSION['users6']; ?></p>
    <input type="text" style="visibility: hidden; " placeholder="Enter password" name="psw" minlength="8" maxlength="20" id="psw" value="<?php echo $_SESSION['users6'] ;?>" disabled>
        
    <button id="actualiza" style="visibility: hidden;" type="submit" name="actualiza">Save</button>
  
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <button  type="submit" name="delete" class="delete">Delete</button>

    <button id="update" type="button" name="update" class="update">Update</button>
    
  </div>
</form>



</section>
</body>
</html>

<script type="text/javascript">


    document.getElementById("update").onclick = function () {
        document.getElementById("actualiza").style.visibility = "visible"; 

        document.getElementById("name").style.visibility = "visible"; 
        document.getElementById("data").style.visibility = "visible"; 
        document.getElementById("adress").style.visibility = "visible"; 
        document.getElementById("mail").style.visibility = "visible"; 
        document.getElementById("psw").style.visibility = "visible";

         var x = document.querySelectorAll(".tag");
    
	    for (var i = 0; i < x.length; i++) {
	        x[i].style.display = "none";
	    }

	    document.querySelector(".delete").style.display = "none"; 
        //document.getElementsByClassName("delete")

       


    };

    


   /*document.getElementById("back").onclick = function () {
        location.href = "index.php";
    };*/

</script>