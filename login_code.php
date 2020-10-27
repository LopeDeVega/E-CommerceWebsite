<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login-code</title>
</head>
	


<body>
	
	<?php
	
		try{
			
			
			//connecting with the database
			//localhost - database name - user_name - password
				include("connection.php");

			
		//set attribute //propiedades de la conexion
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//sql sentence //Checking if user is created(entered) or not
		$sql="SELECT * FROM customer Where user_name= :user_n AND password= :pass_w";
			
		//sql query
		$result=$conexion->prepare($sql);
			
		//get the informataion typed in the texbox
		//htmlentities - convert any symbol to html txt.
		//addslashes - avoid symbols to avoid sql injections
		$u_name=htmlentities(addslashes($_POST["logIn"]));
		$p_word=htmlentities(addslashes($_POST["password"]));
			
		//bimValue because usamos marcadores User_N, passw
		//binParam is the same pero para parametros
		$result->bindValue(":user_n", $u_name);
		$result->bindValue(":pass_w", $p_word);
			
			//execute result
			$result->execute();
			
			//count if there are user inserted
			$numb=$result->rowCount();
				
				if($numb !=0){
					
					//initiate sesion 
					session_start();
					//logIn from table-LogIn
					$_SESSION["user"]=$_POST["logIn"];
					echo "\bien echo ";
					header("location:order_page.php");
				
				}else{
					//send me back to checkLogIn
					
					
					
					//alert message pop on the screen 
					echo "<script> alert ('User Name  or Password Incorrect!   Please Try Again'); window.location.href='login_form.php';</script>";
				
				}
		
		
					
		}catch(Exception $e){
			
			
			//show the error
			//die("Error: " . $e->getMessage());
			echo "Error line is : " . $e->getLine();
			
			
			
			
		}
	
	
	
	
	
	?>
	
	
	
	
	
	
</body>
</html>