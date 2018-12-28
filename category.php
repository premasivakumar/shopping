<!DOCTYPE HTML>
<html>
<head>
<title>kids kreations</title>
<link href="css/a.css" rel='stylesheet' type='text/css' />
<script type='text/javascript' src="image/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="image/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="image/js/menu_jquery.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="image/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head>
<body>

<!-- content -->

<div class="top_bg">
<div class="container">

<div class="header_top">
	<div class="top_left">
		<h2><a href="#">50%off</a> </h2>
	</div>
	<div class="top_right">
		<ul>
			<li><a href="#"></a></li>
			<li><a href="contact.html"></a></li>
			<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
							 </form>
				        </div>
			      </div>
			</li>
		</ul>
	</div>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="#"><img src="image/coollogo_com-12523981.png" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
		<!--div class="create_btn">
			<a class="arrow"  href="registration.html"></a>
		</div-->
		
		<div class="clearfix"> </div>
		</div>
		
		
		
		
		
		
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="first.php">Home</a></li>
			<li class="grid"><a class="color2" href="#"></a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop by category</h4>
								<ul>
									<li><a href="kid.php">Party wear</a></li>
									<li><a href="kid.php">Frocks and Dresses</a></li>
									<li><a href="kid.php">Tops and Tees</a></li>
									<li><a href="kid.php">Night Wear</a></li>
									<li><a href="kid.php">Shorts,skirts and jeans</a><li>
									<li><a href="kid.php">pajamas and leggings</a></li>
								</ul>	
							</div>							
						</div>
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="kid.php">new arrivals</a></li>
									<li><a href="kid.php"></a></li>
									<li><a href="kid.php">kid</a></li>
									<li><a href="kid.php"></a></li>
									<li><a href="kid.php">kid</a></li>
									<li><a href="kid.php">style videos</a></li>
								</ul>	
							</div>
						</div-->
						<img src="image/img_0121.jpg" style="width:100px;height:80px;margin:60px;">
						</img>					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
</li>
			<li class="active grid"><a class="color4" href="#">Boy</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop by category</h4>
								<ul>
									<li><a href="kid.php">T-shirts</a></li>
									<li><a href="kid.php">Shirts</a></li>
									<li><a href="kid.php">Jeans and Trousers</a></li>
									<li><a href="kid.php">Track Pants and Pyjamas</a></li>
									<li><a href="kid.php">Sweaters,Sweatshirts and Jackets</a></li>
									<li><a href="kid.php">Rompers and Sleepwear</a></li>
								</ul>	
							</div>							
						</div>
						</div>
						</div>
</div>
						</div>
						</div>
						<?php 
		$con=mysqli_connect("localhost","root","","img");
			if(!$con){
			die("connection cannot be established:" .mysqli_connect_error());
			}
			$category = $_GET['category'];
			$sql = "SELECT * FROM `table1` WHERE category='$category' " ;

			
		    $rs=mysqli_query($con,$sql);
			
		while($res=mysqli_fetch_array($rs,MYSQLI_ASSOC))
		{
				 echo '<a href="det.php?img='.$res['url'].'"><img src="image/'.$res['url']. '"></a>';
			}
			
			
		?>
	


	<!-- start content -->
	
</div>
<!-- footer_top -->
<div class="footer_top">
 <div class="container">
	<div class="span_of_4">
		<div class="span1_of_4">
			<h4>Shop</h4>
			<ul class="f_nav">
				<li><a href="#">new arrivals</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kid</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">sale</a></li>
				<li><a href="#">style videos</a></li>
			</ul>	
		</div>
		<div class="span1_of_4">
			<h4>help</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kid</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>				
			<h4 class="top">company name</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kid</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>	
		</div>
		<div class="span1_of_4">
			<div class="span1_of_4">
	<!--h4>SHIPPNG AND POLICIES</h4>
			<ul class="f_nav">
				 <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank">payment</a></li>
				        <li><a href="#" target="_blank">shipping policy</a></li>
				        <li><a href="#" target="_blank">return policy </a></li>
				        <li><a href="#" target="_blank">term of use</a></li>
						 <li><a href="#" target="_blank">privacy policy</a></li>
				        <li><a href="#" target="_blank">next day and same day delivery policy</a></li>
				        <li><a href="#" target="_blank"></a></li>
			</ul-->	
			</div>
		<h4 class="top">style zone</h4>
			<ul class="f_nav">
				<li><a href="#">frequently asked  questions</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kid</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
			</ul>				
		</div>
		<div class="span1_of_4">
			<h4>popular</h4>
			<ul class="f_nav">
				<li><a href="#">new arrivals</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kid</a></li>
				<li><a href="#"></a></li>
				<li><a href="#">kids</a></li>
				<li><a href="#">brands</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">sale</a></li>
				<li><a href="#">style videos</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">brands</a></li>
			</ul>			
		</div>
		<div class="clearfix"></div>
		</div>
		<!-- start span_of_2 -->
		<div class="span_of_2">
		<div class="span1_of_2">
			<h5>need help? <a href="#">contact us <span> </span> </a> </h5>
			<ul>
					     <li><a href="#" target="_blank">(or) Call us: +91-70-45022088</a></li>
				        
					</ul>
			</div>
		<div class="span1_of_2">
			<h5>follow us </h5>
			<div class="social-icons">
				     <ul>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
					</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
  </div>
</div>
<!-- footer -->
<div class="footer">
 <div class="container">
	<div class="copy">
		
	</div>
 </div>
</div>
</body>
</html>