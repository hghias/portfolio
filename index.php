<!DOCTYPE html>
<html lang="en">
<head>
	<?php include ('head.php');?>

</head>
<body>

	<?php include ('nav.php');?>

<!-- LANDING PAGE !-->

<div class = "container-fluid"> 
	<div class="row ">  
		<div class="col-4 my-auto landing_page_Hafsa">
			<h1> HAFSA </h1>
		</div>
		<div class="col-4 my-auto landing_page_lion" id="parallax" data-speed="0.1" >
 

			<div class="logo_lion_container" data-speed="0.05">
				<img class="img-fluid logo_lion_image" src="Hafsa Logo-13.png" alt="lion logo">
			</div>
			
			<div class="logo_lion_shadow_container" data-speed="0.02">
				<img class="img-fluid logo_lion_shadow" src="logolion.png" alt="lion logo">
			</div>
		</div>
		<div class="col-4 my-auto landing_page_Ghias h-100">
			<h1> GHIAS </h1>
		</div>
	</div>

	<div class= "row">
		<div class="col scrollcontainer ">
			<img class="scrollimage mx-auto d-block" src="scroll.png" alt="scroll">
		</div>
	</div>
</div>

<div class=container-fluid>
	<div class="row p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="parallax">
		<div class="col pb-3 about text-center">
			<h1> Welcome! </h1>
			</br>
			<h2> I’m a user experience designer </br> with a passion for designing inclusive social innovation. </h2>
			</br>
			<p> Scroll to see my projects! </p>
		</div>
	</div>
</div>

<div class="container-fluid">
	
	<div class="row p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="parallax" >
		<div class="col-6 p-4 UXtext">
			<h1> ALLY EFFECTIVE</br>PHILANTHROPY WIDGET</h1>
			<h2> UX DESIGN </h2>
			<a class="btn" id="uxbutton" href="design.php?filter=ux" role="button">See All Projects > </a>
		</div>
		<!--<div class="col-lg-6 p-4 UX_image_container" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-perspective="300" style="transform-style: preserve-3d">!-->
		<div class="col-6">
			<img class="uximg" src="home page mockups-01.png" alt="UXdesign"> 
		</div>
	</div>

	<!-- BRANDING DESIGN !--> 
	<div class= "row p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="parallax">
		<div class="col-6">
			<img class="MichiganMovement-img float-right" src="home page mockups-05.png" alt="Michigan Movement">
 		</div>
 		<div class="col-6 brandingtext">
 			<h1> MICHIGAN MOVEMENT </h1>
			<h2> BRANDING DESIGN </h2>
			<a class="btn" id="brandingbutton" href="design.php?filter=branding" role="button" onclick="design()">See All Projects > </a>
		</div>
	</div>

	<!-- PRODUCT DESIGN !--> 
	<div class="row p-5" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="parallax">
		<div class="col-6 producttext">
 			<h1> THE BUDDY BIRD </h1>
			<h2> PRODUCT DESIGN </h2>
			<a class="btn" id="productbutton" href="design.php?filter=product" role="button">See All Projects > </a>
		</div>

		<div class="col-6">
			<img class="bird-img float-left" src="home page mockups-02.png" alt="">
				
			
		</div>
	</div>

	<!-- PHOTOGRAPHY !--> 
	<div class= "row p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="parallax">
		<div class="col-6">
			<img class="portrait-img float-right" src="home page mockups-03.png" alt="Photography" >
		</div>

		<div class="col-6 photographytext">
			<h1> HAFSA G PHOTOGRAPHY </h1>
			<h2> PHOTOGRAPHY </h2>
			<a class="btn" id="photographybutton" href="design.php?filter=photography" role="button">See All Projects > </a>
		</div>
	</div>

	<!-- MIXED MEDIA!--> 
	<div class= "row p-5" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="parallax">
		<div class="col-6 mmtext">
 			<h1> SUMMER TIME BLUES </h1>
			<h2> PAINTING </h2>
			<a class="btn" id="mmbutton" href="mixedmedia.php" role="button">See All Projects > </a>
		</div>
		<div class="col-6">
			<img class="SummerTimeBlues-img" src="home page mockups-04.png" alt="Summer Time Blues">
 		</div>
	</div>

	<?php include ('footer.php');?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
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

</script>

<script >
	/*var tween = new TimelineMax()
		.add ([
			TweenMax.fromTo(".brandingimage", 1, {scale:3, autoAlpha: 0.05,left:300}, {left:-350,ease: Linear,easeNone}),
			TweenMax.fromTo(".brandingbackground", 1, {scale:2, autoAlpha: 0.3,left:150}, {left:-175,ease: Linear,easeNone}) 
			]);*/

	window.onscroll = function() { 
		document.body.style.webkitPerspectiveOrigin = window.scrollX + "px" + window.scrollY + "px";
	}

</script>

<script>
  AOS.init();
</script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js">
	
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.7.1/rellax.min.js">
	var rellax = new Rellax('.rellax');
</script>


</body>
</html>