<!DOCTYPE HTML>
<html>
<head>
<title>kid's kreation</title>
<link href="css/a.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<script src="js/menu_jquery.js"></script>
<!--end slider -->
</head>

<!--html>
<head>
<title>kids kreations</title>
<link href="css/a.css" rel='stylesheet' type='text/css' />
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head-->
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
			<li><a href="#"></a></li>
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
		<div class="create_btn">
			<a class="arrow"  href="registration.php">create account   </a>
		</div>
		
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		
	
		
		
		
		
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="first.php">Home</a></li>
				
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			
						</ul>
						</div>
						</div>
						</div>
	


	<!-- start content -->
	<div class="col-md-9 w_content">

	
	<?php
	session_start();
			$con=mysqli_connect("localhost","root","","img");
			if(!$con){
			die("connection cannot be established:" .mysqli_connect_error());
			}
	
			$sql="SELECT * FROM `table1`";
			$rs=mysqli_query($con,$sql);
			
		while($res=mysqli_fetch_array($rs,MYSQLI_ASSOC))
		{
			echo '<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
				  <a href="det.php?img='.$res['url'].'"><img src="image/'.$res['url']. '">
				   
			   			<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				   
				<div> '.$res['description'].'<br>
				     Rs. '.$res['price'].'</div>
					   <fieldset id="body">
			
					 <input type="hidden" name="quantity" class="" value="1" />
					 <input type="hidden" name="price" value="<?php echo   Rs. '.$res['price'].'; ?>" />
						
					 <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
	
					 </fieldset>
			   	</div>
			</div>';
			}
						
?>
	
	<!-- end content -->
</div>
</div>
<!-- footer_top -->
<div class="footer_top">
 <div class="container">
	<div class="span_of_4">
		<div class="span1_of_4">
			<h4>Shop</h4>
			<ul class="f_nav">
				
			</ul>	
		</div>
		
		</div>
		<!-- start span_of_2 -->
		
  </div>
</div>
<style>
		


/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

		
			.slide img{
				height:700px;
				width:120%;
				
			}
			#fwslider .slide img {
				width: 300px;
			}
			#fwslider{
				width: 80%;
				
			}
		div.footer,p.footer{
margin-top:120px;
margin-bottom:;
margin-left:;
margin-right:10;

}
		</style>
		
       
<!-- footer -->

<div class="footer">
 <div class="container">
	<div class="copy">
	<h5>Buy Trendy Kids Wear Online</h2>
			<p>When it comes to trend, we all love seeing our children being in it and that's what kid's kreations strives for.
 With quality make, you can bet this kids apparel will last longer than your kids will wear them. 
With fun patterns, colours and styles, your kids will enjoy wearing apparel as long as possible. 
Whether you're stocking up on kids' t-shirts or getting ready for a special occasion with girls' dresses and party wear,
 you will be sure to find what you need at kid's kreations.com. For your kids to show off their unique style statement, indulge in this apparel collection which is definitely a must-have. Presenting various designs and other #, each piece is comfortable and compliments their style in best way.</p>

	<p>
         Your little princess deserves only the best, so dress them in beautifully designed garments.
		 Alluring in various designs like gathered, layered and shift will make your little princess look really cute. 
		 Leggings and jeans in different colours and sizes to match floral or plain tops are also available on kids kreation. For festive occasions or joyous ceremonies, bright 
		kids ethnic outfits</a> are ideal selections to pick from.
		Indulge in our offers on a trendy line of kids wear. 
		Browse through a wonderful variety of kids' clothing designed especially for your young ones. 
		Kids Kreation showcases the right concoction of brands and merchandise to give you the ‘wow' shopping experience. 
		Made from soft fabric, these branded garments come in a host of colourful motifs and patterns.
      </p>
 
	</div>
 </div>
</div>

</p>
 <!--div class="container">
	<div class="copy">
	
	
	<p>
		<div class="span1_of_4">
	<h4>SHIPPNG AND POLICIES</h4>
			<ul class="f_nav">
				 <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank">payment</a></li>
				        <li><a href="#" target="_blank">shipping policy</a></li>
				        <li><a href="#" target="_blank">return policy </a></li>
				        <li><a href="#" target="_blank">term of use</a></li>
						 <li><a href="#" target="_blank">privacy policy</a></li>
				        <li><a href="#" target="_blank">next day and same day delivery policy</a></li>
				        <li><a href="#" target="_blank"></a></li>
			</ul>	
			</div>
			<div class="span1_of_4">
			<h4>CATEGORIES</h4>
			<ul class="f_nav">
				<li><a href="#">Tops & Tees</a></li>
				<li><a href="#">Frocks</a></li>
				<li><a href="#">Shirts</a></li>
				<li><a href="#">accessories</a></li>
				<li><a href="#">Pajamas & Leggings</a></li>
				<li><a href="#">Sets & Suits</a></li>
				
			</ul>			
		</div>
		
		<div class="span1_of_4">
			
		
			<h4 class="top">CONNECT WITH US</h4>
			<ul class="f_nav">
				<li><a href="#">facebook</a></li>
				<li><a href="#">you tube</a></li>
				<li><a href="#">twitter</a></li>
				<li><a href="#">google+</a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>	
		</div><br>
			
			<div class="span_of_2">
		<div class="span1_of_2">
			<h5>need help? <a href="#">contact us <span> ></span> </a> </h5>
			<p>(or) Call us: +91-70-45022088</p>
		</div>
		
		
		</div>
		</p>
	</div>
 </div>
</div-->
</p>
</body>
</html>