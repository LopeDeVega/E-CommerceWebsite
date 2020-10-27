
<?php 
		
		//star session
		session_start();
		//checking if there is somthing stored into - $_SESSION
		if(!isset($_SESSION["user"])){
			
			header("Location:login_form.php");
		}
	
	
	
	?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


	<link href="style3.css" rel="stylesheet" />
	
</head>

<body>
	
	
			<header>
    	<h1>
    		Order Page
            
    	</h1>
   				<img  align="right" id="img_1" src="Photo/logo.2.jpg"/>
				

				
    </header>
	


	
	<?php
	
		include("connection.php");
		
		//resulset creado
		//$sql = $conexion->query("SELECT * FROM DATOS_USUARIOS");
		//almacenar resulset - cramos un array de objetos
	//	$registros=$sql->fetchAll(PDO::FETCH_OBJ);
		
	//simplificacion del codigo //las dos ultima lineas son lo mismo pero unidas 
	//almacenado un array de objetos -- cada objeto tiene diferentes propiedades // las propiedades seran los campos de la tabla // id-nombre-apellido-direcion
		try{
	
	//este if: si pulsamos el boton cr 
			if(isset($_POST["cr"])){
		
		//id no es necesario al ser un cuadro autonumerico
		//se creara solo como cuando se inserta un data directamente desde mysql
			$name=$_POST["u_name"];
			$password=$_POST["u_pass"];
			$feedback=$_POST["tbMultiLine"];

			$sql="INSERT INTO feedback  (user_name , password, feedback) VALUES(:A, :B, :C)";

			$result=$conexion->prepare($sql);

			$result->execute(array(":A"=>$name,
								  ":B"=>$password,
								  ":C"=>$feedback));

			$numb=$result->rowCount();
				
				if($numb !=0){
										
					
					echo "<script> alert ('The feedback is sent   Thank very much');</script>";
					//header("location:feedback.php");
				
				}else{
						echo "Feedback could not be sent <br> Please try again ";
					
				}
		
		

		}			
			}catch(Exception $e){


				//show the error
				//die("Error: " . $e->getMessage());
				echo "Error line is : " . $e->getLine();
			
		}
		
	
?>	
	
	<section id="session">
		
			<img  id="img_3" src="Photo/alhambra-4.jpg"/><br>
		 
		
			<?php
	
		//printing the name of the user is logged 
		echo "Hello: " . $_SESSION["user"] . ".<br><br>";
		echo  "<a href='closing_Session.php'>Log out :</a>" . $_SESSION["user"];
		
			
		
	?>
		
	</section>

	 <nav class="bar">
     			<br>
    		<ul>
				<li><a href="register_form.php"><label></label>Register</label></a></li>
				<li><a href="order_page.php"><label>Order Page</label></a></li> 
				<li><a href="feedback.php"><label>Feedback</a></label></li>
                <li><a href=""><label>About Us/ Policy</a></label></li>
                
            </ul>
    </nav>
	
	 <aside>
    
            <p> Leave</p>
            <br></br>
            <p> Your </p>
          	<br></br>
            <p> Feedback </p>
            <br></br>
            <p> Cayetano </p>
             <br></br>
            <p> Online</p>
    
    
    
   	</aside>

	<aside id="aside_2">
    
            <p> Your</p>
            <br></br>
            <p> Opion </p>
          	<br></br>
            <p> Is  </p>
            <br></br>
            <p> Very </p>
             <br></br>
            <p>Important </p>
    
    
    
   	</aside>
	

	
	
	
	<section id="feedb">
		<br>
		<p> Your opion make us better</p>
		
		
	<form action="feedback.php" method="post" >
		<table width="50%" border="0" align="center">
    <tr >
      
      <td  id="labl"><label>User name</label></td>
		<td><input type="text" name="u_name" required </td></tr>
    <tr>
      
      <td  id="labl"><label>Password</label></td>
      <td><input type="text" name="u_pass" required</td></tr>
      
     <tr>
      <td  id="labl"><label>Feedback</label></td>
      <td class="primera_fila" id=".textboxclass "><textarea  Name="tbMultiLine" cols="70" rows="10" maxlength="300" TextWrapping="Wrap" AcceptsReturn="True" VerticalScrollBarVisibility="Visible"></textarea></td></tr>
    
       <tr><td colspan="3"> <input type="submit" name="cr" value="Send Feedback"></td></tr>
    
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
	
	</form>
		
		</table>	
		
	</section><br>

		<section> 
			
			<p> Always close to you </p>
	
			
		</section>
 		<footer>
		
            <small>  San Cayetano Restaurant <address> tlf: 074 990190467 </address> </small>
            <small> find us in : <address> Facebook Twitter  </address> </small>
                
            <a id="ctl00_lnk_Share_Twitter" href="http://www.mesonsancayetano.com/"><img src="Photo/tw5.gif"/></a>
            <a id="ctl00_lnk_Share_Facebook" href="https://www.facebook.com"><img src="Photo/fb-icon.png"/></a>
       
		
		<footer>
		

</body>
</html>