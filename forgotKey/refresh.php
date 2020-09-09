<?php
    session_start();
      
    if (!isset($_POST['look2'])){

      $id = $_SESSION['users1'] ;  

      $psw = $_SESSION['users6'] ;

    }

     
    if(isset($_POST['look2'])){
        if( $_POST['psw'] == $_POST['conPass'] ){
          $psw = $_POST['psw'];
          $id = $_POST['id'] ;  
        }
    }
    
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.login {
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
  .cancelbtn {
     width: 100%;
  }
  .login {
     width: 100%;
  }
}
</style>


</head>
    <body>

        <section id="senhas" >

            <h2>Refreshin key</h2>

            <form action="process.php" method="POST">

                <div class="imgcontainer">
                  <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">

                  <label for="psw"><b>Password:</b></label>
                  <input id="myPass" type="password" minlength="8" maxlength="20" placeholder="Enter Password" name="psw"  required>

                  <label for="cpsw"><b>Confirm Password:</b></label>
                  <input  id="myPassCon" type="password" minlength="8" maxlength="20" placeholder="Repeat your Password" name="conPass" required>

                  <input type="hidden" name="id" value="<?php echo $id; ?>">

                </div>      

                <button id="look2" type="submit" name="look2">Refresh</button>

                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button id="back" type="button" class="cancelbtn">Cancel</button>
                  <button id="login" type="button" class="login">Login</button>
                </div>
            </form>

        </section>
    </body>
</html>

<script type="text/javascript">

document.getElementById("look2").onclick = function () {

    var x = document.querySelector("#myPass").value; 
    var y = document.querySelector("#myPassCon").value;

    if ( x == "" || y == "" ){
      alert("Fields cannot be empty.");
    }
    else if( x != y ){
      alert("Password didn't match try again.");  
      return false
    }
    else if( x==y ){
      alert("Password Confirm it");  
    }
    return true
};

    document.getElementById("back").onclick = function () {
        <?php
          session_unset();
          session_destroy();
        ?>
   
        location.href = "index.php";
    };
    document.getElementById("login").onclick = function () {
        location.href = "login.php";
    };




</script>
