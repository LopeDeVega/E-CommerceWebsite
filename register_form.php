<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
	
	
	<link href="style2.css" rel="stylesheet" />

</head>

<body>
	
	
	<header>
    	<h1>
    		
			Register Page
            
    	</h1>
		
		
			<img  align="right" id="img_1" src="Photo/logo.2.jpg"/>
		
   		
    </header>
	
	<section>
		
			<img  id="img_3" src="Photo/imagen.jpg"/>
		
	</section>
	
		 <aside>
    
            <p> Welcome</p>
            <br></br>
            <p> to </p>
          	<br></br>
            <p> San </p>
            <br></br>
            <p> Cayetano </p>
             <br></br>
            <p> Online</p>
    
    
    
   	</aside>

	<aside id="aside_2">
    
            <p> Register</p>
            <br></br>
            <p> Now </p>
          	<br></br>
            <p> Enjoy </p>
            <br></br>
            <p> Spanish </p>
             <br></br>
            <p>Food </p>
    
    
    
   	</aside>

		
	
	<section id="secc_2" >		<!--Register form  -->	
			
			
			<img align="right" id="img_2" src="Photo/restaurante foto2.jpg"/>
			<img   align="left" id="img_4" src="Photo/restaurante foto6.jpg"/>
		
			
				
		<p id="p_1"> Register form </p>
		
		<form action="register_code.php" method="post">
		
		<table><tr><td>
		<label id="labl">User Name:</label></td>
		<td> <input type="text" name="user_n" required></td></tr>
		<tr>
		<td><label id="labl">Password:</label></td>
		<td> <input type="password" name="pass_w" required></td></tr>
		<tr>
		<td><label id="labl">City:</label></td>
		<td> <input type="text" name="city" required></td></tr>
		<tr>
		<td><label id="labl">Street:</label></td>
		<td> <input type="text" name="street" required ></td></tr>
		<tr>
		<td><label id="labl">Postcode:</label></td>
		<td><input type="text" name="post" required></td></tr>
		<tr>
		<td><label id="labl">Email:</label></td>
		<td><input type="email" name="email" required></td></tr>
		<tr>
		<tr>
		<td><label id="labl">Phone:</label></td>
		<td><input type="text" name="phone" pattern="[1-9]{11}" required></td></tr>
		 <tr><td colspan="2"> <input type="submit" name="register" value="Register" >
        </td></tr>
        
		<tr>	<!--load the user to Login page.  -->	
        <td colspan="2"><input type="button" onClick="location.href='login_form.php';" name="loginback" value="Back to Login"</td></tr>
        
	</table>
	
	</form>
	
	</section>

	<section id="sec_2">
				
			</section>

			<footer>
		
            <small>  San Cayetano Restaurant <address> tlf: 074 990190467 </address> </small>
            <small> find us in : <address> Facebook Twitter  </address> </small>
                
            <a id="ctl00_lnk_Share_Twitter" href="http://www.mesonsancayetano.com/"><img src="Photo/tw5.gif"/></a>
            <a id="ctl00_lnk_Share_Facebook" href="https://www.facebook.com"><img src="Photo/fb-icon.png"/></a>
       
		
		<footer>

	
</body>
</html>
