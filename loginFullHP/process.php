
<?php 
	session_start();
	

//save  data

	
	if(isset($_POST['save'])){

		include('conexion.php');

	    $name = $_POST['name'];
	    $data = $_POST['data'];
	    $adress = $_POST['adress'];
	    $mail = $_POST['mail'];
	    $psw = $_POST['psw']; 



	    $sql = "INSERT INTO `usuario`( `name`, `data`, `adress`, `mail`, `psw`) VALUES ('$name', '$data', '$adress', '$mail', '$psw')";

	   
		if (mysqli_query($conexion, $sql)) {
			//echo "New record created successfully";
			header("location: index.php");
			mysqli_close($conexion);
			exit();
		} else {
			 echo "Error  record: " . $conexion->error;
			echo $sql;
		}

	}

	//acceso

	if(isset($_POST['acceso'])){
		
		include('conexion.php');

		$mail = $_POST['mail'];
	    $psw = $_POST['psw']; 

		$query = "SELECT * FROM usuario WHERE  mail = '$mail' AND psw = '$psw'";


		$result = mysqli_query($conexion, $query);
		while($row = $result->fetch_assoc()){
			$id = $row['id'];
			$name = $row['name'];
			$data = $row['data'];
			$adress = $row['adress'];
			$mail = $row['mail'];
			$psw = $row['psw'];
		}

		$row = mysqli_num_rows($result);
		if($row == 1) {
			$_SESSION['users1'] = $id;
			$_SESSION['users2'] = $name;
			$_SESSION['users3'] = $data;
			$_SESSION['users4'] = $adress;
			$_SESSION['users5'] = $mail;
			$_SESSION['users6'] = $psw;
		
			header('Location: view.php');
			exit();
		} else {
			//echo "Not Founded";
		 	header('Location: login.php');
		  exit();
		}

	}

	//erase

	if (isset($_POST['delete'])){

		include('conexion.php');

		$id = $_SESSION['users1'];

		$sql = "DELETE FROM usuario WHERE id='$id'";
		
		$ejecutar=mysqli_query($conexion, $sql);

		if($ejecutar){
			//echo "perro loco";
			session_unset();
  			session_destroy();
			header("Location:index.php");
			exit();
		}else{
			//echo "Not Founded";
		}
	
	}


	//update
	if (isset($_POST['actualiza'])){

		include('conexion.php');

		$id = $_SESSION['users1'] ; 
	 	$name = $_POST['name'];
        $data = $_POST['data'];
        $adress = $_POST['adress'];
        $mail = $_POST['mail'];
        $psw = $_SESSION['users6']; 

		$sql = "UPDATE `usuario` SET `name`=$name,`data`=$data,`adress`=$adress,`mail`=$mail,`psw`=$psw WHERE id=$id";

		$ejecutar=mysqli_query($conexion, $sql);

		if ($conexion->query($sql) === TRUE) {
		  echo "Record updated successfully";
		  //echo "loco".$sql;
			header('Location: index.php');
			exit();	

		} else {
			echo "loco".$sql;
		  echo "Error updating record: " . $conexion->error;
		}

		$conexion->close();

	}



 ?>

