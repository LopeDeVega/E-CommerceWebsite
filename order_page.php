
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="hoja.css">
	<link rel="stylesheet" type="text/css" href="style4.css">
	
	<script type="text/javascript" src="buttoms.js"></script>
	<title>Order Page</title>
	
	
</head>

		
	<section id="session">	
		
			<?php

				//printing the name of the user is logged 
				echo "Hello: " . $_SESSION["user"] . ".<br><br>";
				echo  "<a href='closing_Session.php'>Log out :</a>" . $_SESSION["user"];

			?>
		
	</section>	
				
	
	
	
		 <nav class="bar">
     			<br>
    		<ul>
				<li><a href="register_form.php">Register</a></li>
				<li><a href="order_page.php">Order Page</a></li> 
				<li><a href="feedback.php">Feedback</a></li>
                <li><a href="Help.html">About Us/ Policy</a></li>
                
            </ul>
    </nav>
	
	
<?php
	include("connection.php");
	$registros=$conexion->query("SELECT * FROM dishes")->fetchAll(PDO::FETCH_OBJ);
	
	
?>

<section>

	<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">	
		
	<table width="50%" border="0" align="center">
        <tr>
          	<td>Id</td>
        	<td class="primera_fila">Name</td>
          	<td class="primera_fila">Description</td>
    		<td class="primera_fila">Photo</td>
         	<td class="primera_fila">Price</td>
    		<td class="primera_fila">Quantity</td>
    		<td class="primera_fila">Total</td>
          	<td class="sin">&nbsp;</td>
          	<td class="sin">&nbsp;</td>
          	<td class="sin">&nbsp;</td>
        </tr> 
    	
    	<?php   	    
    	    $i=0;  
    	    $c=0;
      		foreach($registros as $record):
      		$c++;
      	?>
    		
       	<tr>
         	<td><?php echo $record->code_ID;?></td>
          	<td><?php echo $record->d_name;?> </td>
          	<td><?php echo $record->description;?></td>
    		<td><img src="file:///C:/wamp64/www/PHP-Curso/assign_code/upload_table/<?php echo $record->photo;?>" width="65%"/></td>
          
			<td><input type="text" id="p<?php echo $i; ?>" name="p<?php echo $i; ?>" value="<?php echo $record->price;?>"</td>
				
    		
			<td><input type="text" id="v<?php echo $i; ?>" name="v<?php echo $i; ?>" value="<?php echo 0;?>"></td>
				
    		
			<td><input type="text"  id="tot<?php echo $i; ?>" name="tot<?php echo $i; ?>" value="<?php echo 0;?>"></td>
			
    		<td id="bt"><button type="button" value="<?php echo $i; ?>">add</button></td>
    		<td id="bt"><button type="button" value="<?php echo $i; ?>">sub</button></td>
			
    	</tr>
    	
		<?php $i++; ?>
		<?php endforeach; ?>
				
	</table>
	<div>
		<table align="center">
			<tr>
				<td class="primera_fila" align="center"><lable><em>Total Price</em></lable></td>
	 			<!--<td class="primera_fila" id="total" name="total"></td>-->
				<td><input type="text" id="total" name="total" value="0" disabled></td>
				<td><input type='submit' name='add<?php echo $i?>' id='add' value='Order' ></td>
			<tr>	
				<td class='bot'><a href="bill_order.php?
		  				A=<?php echo $record->code_ID;?> &
		  				B=<?php echo $record->d_name;?> &	
		  				C=<?php echo $record->description?> &
		  				D=<?php echo $record->price?>"><input type='button' name='up' id='up' value='Actualizar' ></a></td>
				
			</tr>
	 			<td hidden id="ti"><?php echo $i?></td>
	 		</tr>
		</table>
	</div>
</section>
	
	<section>
	
	</section>
	
	 		<footer>
		
            <small>  San Cayetano Restaurant <address> tlf: 074 990190467 </address> </small>
            <small> find us in : <address> Facebook Twitter  </address> </small>
                
            <a id="ctl00_lnk_Share_Twitter" href="http://www.mesonsancayetano.com/"><img src="Photo/tw5.gif"/></a>
            <a id="ctl00_lnk_Share_Facebook" href="https://www.facebook.com"><img src="Photo/fb-icon.png"/></a>
       
		
		<footer>
	
		
</body>
</html>