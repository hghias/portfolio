<!DOCTYPE html>
<html lang="en">
<head>
	<?php include ('head.php');?>

</head>
<body id="design">

	<?php include ('nav.php');?>

<!-- LANDING PAGE !-->
<div class = "container-fluid" data-aos="fade-down" data-aos-duration="1000"> 
	<div class="row">
		<div class ="col my-auto align-self-center" style="padding-top: 15%; padding-bottom:18%;" >
			<div class="typed-wrap text-center">
				<h1> About Me </h1>

			</div>
		</div>
	</div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="row">
		<div class="col btn-toolbar btn-group pb-5 " role="group" data-toggle="buttons"> 
			<a class="btn sh" id="designbutton" role="button" > About Me </a>
			<a class="btn pn" id="designbutton" role="button" > Resume </a>
			<a class="btn dr" id="designbutton" role="button" > Design Process </a>
			<a class="btn dg" id="designbutton" role="button" > Commissions </a>
			<a class="btn 3d" id="designbutton" role="button" > Contact Me </a>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row" data-aos="fade-up" data-aos-duration="1000">
		<div class="col-7 about" style="padding-left: 350px;">
			<h4>I’m a senior at the University of Michigan studying Art & Design with a focus on user experience,  product design and software development. After interning at Ally Financial last summer as a software development intern, I realized that I wanted to dive into the UX field with a creative background rather than with a computer science degree and switched to Art & Design :) </h4>
		</div>
		<div class="col-5">
			<img class="me " src="IMG_75131.jpg" alt="" style="box-shadow: 0 0 50px 0 rgba(51, 51, 51, 0.3);">
		</div>

	</div>
</div>
<?php include ('footer.php');?>


 

<script>
	AOS.init();
	$('#about-nav').toggleClass('navbar-active');

</script>



</body>

</html>