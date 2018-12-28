<!DOCTYPE HTML>

<html>
<head>
<title>Kid's kreation</title>
<link href="css/a.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="image\image\js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="image\js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="image\js/menu_jquery.js"></script>
</head>
<body>
<!-- content -->
<div class="container">
<div class="main">
	
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create a account </span></h2>
		<a href="#"><div class="reg_fb"><i>register </i><div class="clearfix"></div></div></a>
		
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">

		 
			<form id="registration_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div>
					<label>
						<input placeholder="first name:"  type="text" name="fname" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="last name:"  type="text"name="lname" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email address:"  type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="gender" checked=""><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="gender"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" name="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<label>
						<input placeholder="retype password" type="password" name="repassword" tabindex="4" required>
					</label>
				</div>	
				<div>
					<input type="submit" value="submit" id="register-submit">
				</div>
				
			</form>
			
		</div>
	</div>
	
			</div>
	</div>
	<div class="clearfix"></div>
	</div>
	
</div>
</div>

</body>
</html>
