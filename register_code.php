<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Code</title>
	
	
</head>

<body>
	
	<?php
	
	try{
	
			include("connection.php");
		
		
		//if button register is pressed
		if(isset($_POST["register"])){

			//calling errors attributes
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				//sql query //search for user_name
				$sql="SELECT * FROM customer Where user_name= :user_n";

				//store the query 
				$result=$conexion->prepare($sql);

		//get the informataion typed in the texbox
		//htmlentities - convert any symbol to html txt.
		//addslashes - avoid symbols to avoid sql injections
				$user=htmlentities(addslashes($_POST["user_n"]));


				//bimValue a value to a corresponding named paclehoder in the sql statement used to prepare the statement. 
				$result->bindValue(":user_n", $user);
		
			
			//execute result
			$result->execute();
			
			//count if there are user inserted
			$numb=$result->rowCount();
				
			//if user_name is taken an alert message 
				if($numb !=0){
					
					//alert message pop on the screen 
					echo "<script> alert ('User Name  Taken!  Try Again'); window.location.href='register_form.php';  </script>";
					
					
				//if user name is not taken inserte the new user name				
				}else{
					
		$user=$_POST["user_n"];
		$passw=$_POST["pass_w"];
		$city=$_POST["city"];
		$street=$_POST["street"];
		$post=$_POST["post"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		
		$sql="INSERT INTO customer (user_name, password, city, street, postcode, email, phone) VALUES(:A, :B, :C, :D, :E, :F, :G )";
		
		$resulatdo=$conexion->prepare($sql);
		
		$resulatdo->execute(array(":A"=>$user,
								  ":B"=>$passw,
								  ":C"=>$city,
								  ":D"=>$street,
								  ":E"=>$post,
								  ":F"=>$email,
								  ":G"=>$phone));
		
					
					
			echo "<script> alert ('User inserted Correctly,  Log in to Begin!'); window.location.href='login_form.php';</script>";
					
				
			
				}
			
		}
		
					
		}catch(Exception $e){
			
			
			//show the error
			//die("Error: " . $e->getMessage());
			echo "Error line is : " . $e->getLine();
			
		
	}
			
		
	
	
	
	
		//header("location:login_form.php");
		
	
 		//$result->rowCount();
	
		 //verificamos si el user exite con un condicional
		
		
		
		
		

	
	
	
?>
	
	
	
</body>
</html>