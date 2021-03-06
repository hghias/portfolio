<!DOCTYPE html>
<html lang="en">
<head>
	<?php include ('head.php');?>
</head>
<body id="index">
	<?php include ('nav.php');?>

<!-- LANDING PAGE !-->

<div class = "container-fluid"> 
	<div class="row ">  
		<div class="index-Hafsa col-4 pr-5 my-auto">
			<div class="index-animation">
				<h1> HAFSA </h1>
			</div>
			<div class="index-animation hide">
				<h1> GHIAS </h1>
			</div>
		</div>

		<div class="index-lion col-4 my-auto" id="parallax" data-speed="0.1" iosFix="true" androidFix="true">
			<div class="index-lion-container" data-speed="0.05" iosFix="true" androidFix="true">
				<img class="index-lion-img" src="Hafsa Logo-13.png" alt="lion logo">
			</div>
			
			<div class="index-lion-shadow-container" data-speed="0.02" iosFix="true" androidFix="true">
				<img class="index-lion-shadow-img" src="Hafsa Logo-13.png" alt="lion logo">
			</div>
		</div>
		<div class="index-Ghias col-4 pl-5 my-auto h-100">
			<h1> GHIAS </h1>

		</div>
	</div>
	<div class="row">
		<span class="scrollcontainer my-auto mx-auto">
			<img class="arrow" src="arrow.svg" alt="">
		</span>
	</div>
	
</div>

<div class="container-fluid p-0">
	<div class="row pl-0 pt-5 pb-5" data-aos="fade-up" data-aos-anchor-placement="top-center" id="parallax">
		<div class="pl-0 col-3 index-intro"> </div>
		<div class="col-8 col-md-7 pl-md-5 pt-md-5 pt-3 pb-md-5 pb-3 mt-md-5 mb-md-5 about">
			<h1 style="color:#48A2B5;"> Hi, I'm Hafsa! </h1>
			</br>
			<h4 style="line-height:1.5 !important"> I'm a user experience designer passionate about fostering inclusivity and creating equal opportunity. My name means 'lioness' in Arabic and just like the animal, I strive to embody creativity, curiosity, ambition and vision. My development background allows me to understand and collaborate effectively with engineering partners. With experience designing SaaS products in the healthcare and fintech industries, I can easily navigate and translate complex systems and compliance into user friendly experiences. </h4>
			</br>
			<!-- <h4 style="line-height:1.5 !important"> I am currently seeking full time user experience design opportunities where I can be involved in the whole design process and learn from seasoned designers.  Feel free to reach out at <a style="color:#48A2B5;" href="mailto:hghias@umich.edu">hghias@umich.edu.</a></h4>
			</br> -->
			<a class="btn pb-2 pt-2 pl-4 pr-4" id="Contact" href="aboutme.php" role="button">About Me </a>
		</div>
	</div>

</div>

<div class="container-fluid p-0 pl-2 pr-2 pb-5">
	
	<h2 class="text-center" data-aos="fade-down"> EXPLORE MY WORK </h2>

	<!-- UX DESIGN !-->
	<div class="row pt-5 flex-row" data-aos="fade-up" data-aos-anchor-placement="top-center" id="parallax">
		<div class="col-md-6 p-4 text-left text-md-right align-self-center order-2 order-md-1"> <!-- index-center !-->
			<h1 style="color: #C69E2E;"> USER EXPERIENCE DESIGN </h1>
			<a class="btn mt-2 pb-2 pt-2 pl-4 pr-4 " id="uxbutton" href="design.php?filter=ux" role="button">View UX Projects</a>
		</div>

		<div class="col-md-4 text-md-center order-1 order-md-2">
			<a href="design.php?filter=ux"> <img class="indeximg" src="index-ux1.png" alt="UX Design Image"> </a> 
		</div>
	</div>

	<!-- BRANDING DESIGN !-->
	<div class= "row pt-5" data-aos="fade-up" data-aos-anchor-placement="center-center" id="parallax">
		<div class="col-md-2"> </div>
		<div class="col-md-4">
			<a href="design.php?filter=branding"> <img class="indeximg float-right" src="index-branding.png" alt="Branding Design Image"> </a>
 		</div>
 		<div class="col-md-6 align-self-center index-center">
 			<h1 style="color: #5198A7;"> BRANDING DESIGN </h1>
			<a class="btn mt-2 pb-2 pt-2 pl-4 pr-4" id="brandingbutton" href="design.php?filter=branding" role="button" onclick="design()"> View Branding Projects</a>
		</div>
	</div>

	<!-- PRODUCT DESIGN !--> 
	<div class="row pt-5 flex-row" data-aos="fade-up" data-aos-anchor-placement="center-center" id="prod parallax">
		<div class="col-md-6 text-left text-md-right align-self-center order-2 order-md-1">
 			<h1 style="color:#BD975A;" > PRODUCT DESIGN </h1>
			<a class="btn mt-2 pb-2 pt-2 pl-4 pr-4" id="productbutton" href="design.php?filter=product" role="button"> View Product Design Projects</a>
		</div>

		<div class="col-md-4 order-1 order-md-2">
			<a href="design.php?filter=product"> <img class="indeximg float-left" src="index-product.png" alt="Product Design Image"> </a>
		</div>
	</div>

	<!-- PHOTOGRAPHY !--> 
	<div class= "row pt-5" id="portrait" data-aos="fade-up" data-aos-anchor-placement="center-center" id="parallax">
		<div class="col-md-2"> </div>
		<div class="col-md-4">
			<a href="photography.php"> <img class="indeximg float-right" src="index-photography.png" alt="Photography Image"> </a>
		</div>

		<div class="col-md-6 align-self-center">
			<h1 style="color:#67353D;"> PHOTOGRAPHY </h1>
			<a class="btn mt-2 pb-2 pt-2 pl-4 pr-4" id="photographybutton" href="photography.php" role="button">View Photography Projects </a>
		</div>
	</div>

	<!-- EXPLORATIONS !--> 
	<div class= "row pt-5 flex-row" data-aos="fade-up" data-aos-anchor="#portrait" data-aos-anchor-placement="center-center" id="parallax">
		<div class="col-md-6 text-left text-md-right align-self-center order-2 order-md-1">
 			<h1 style="color:#3D5EAC;"> EXPLORATIONS </h1>
			<a class="btn mt-2 pb-2 pt-2 pl-4 pr-4" id="mmbutton" href="explorations.php" role="button">View Explorations</a>
		</div>
		<div class="col-md-4 order-1 order-md-2">
			<a href="mixedmedia.php"> <img class="indeximg" src="index-explorations.png" alt="Explorations Image"> </a>
 		</div>
	</div>
</div>

	<?php include ('footer.php');?>

</body>

<script>
	var width = window.innerWidth;

	if (width >= 576) { 
		$('html').mousemove(function(e){

		var wx = $(window).width();
        var wy = $(window).height();

        var x = e.pageX - this.offsetLeft;
	    var y = e.pageY - this.offsetTop;

	    var newx = x - wx/3;
	    var newy = y - wy/3 ;

	    $('#parallax div').each(function(){
	    	var speed = $(this).attr('data-speed');
	    	if($(this).attr('data-revert')) speed *= -1;
	    	TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
	    });
		});

		window.onscroll = function() { 
			document.body.style.webkitPerspectiveOrigin = window.scrollX + "px" + window.scrollY + "px";
		}
	}

  AOS.init({
  	disable: 'phone',
  	duration: 800, 
  	mirror:true,
  });


</script>
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.7.1/rellax.min.js">
	var rellax = new Rellax('.rellax');
</script>


</body>
</html>