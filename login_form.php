<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LogIn</title>
	<link href="style.css" rel="stylesheet" />
	
	
</head>

<body>
	<header>
		<h1>
				 San Cayetano Restaurant
		</h1>
		
	
	<img  align="right" id="img_1" src="Photo/logo.2.jpg"/>
	
		
	</header>
	
	<section id="sec1">
		
	
	
		<img  id="img_3" src="Photo/alhambra- 2.jpg"/>
		
			<p>  Real Spanish Food  </p>
			<p>   Traditional Dishes from the South of Spain  </p>
			<p> Since 1990 </p>
	
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
    
            <p> Now</p>
            <br></br>
            <p> Available </p>
          	<br></br>
            <p> Online </p>
            <br></br>
            <p> Don't </p>
             <br></br>
            <p>Hesitate </p>
    
    
    
   	</aside>

			<section>
				
			<img align="right" id="img_2" src="Photo/restaurante foto3.jpg"/>
			<img  id="img_2" src="Photo/restaurante foto.jpg"/>
				
			<p> Sing in and Enjoy </p>
			<p> Click on Register and cretate an account </p>

			</section>
			

			<section> 
				
			
	
			<form action="login_code.php" method="post">

	<table>
			<tr>
				<td class="left"><label id="labl"> Login: </label></td>
				<td class="right" id="textb"><input type="text" name="logIn" required ></td></tr>
			<tr>
				<td class="left"><label id="labl"> Password: </label></td>
				<!--type password dont let see what is typed in the texbox -->
				<td class="right" id="textb"><input type="password" name="password" required></td></tr>
			<tr>
			<td colspan="2"><input type="submit" name="send"
			value="LogIn"</td></tr>
			
			<!--the button load the user to registration form-->
			<td colspan="2"><input type="button" onClick="location.href='register_form.php';" name="register" value="Register"</td></tr>
			
			
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