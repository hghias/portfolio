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

<!--
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
!-->
<div class="container" data-aos="fade-up" data-aos-duration="1000">
	<div class="row">
		<div class="col-8">
			<h2> Hi, I'm Hafsa! </h2>
			</br>
		</div>
	</div>
	<div class="row ">
		<div class="col-9">
			<h5 style= "line-height: 150%;">
				I’m currently a senior at the University of Michigan studying art & design with a focus on user experience design. I started my college career in software development, but changed my focus when I fell in love with design and its potential to change the world. Engineering makes things work, but design impacts if, how, and why we use something. 
				</br>
				</br>
				I aim to use design as a tool to foster inclusivity & create equal opportunity. With a background in computer science, my goal is to design user interfaces in regards to the limitations that arise in the development phase. In all the projects that I pursue, I ask <I> “How can we maximize this design to be intuitive, functional, inclusive & aesthetic?” </I>
				</h5>
				</br>
				<a class="btn pn" id="designbutton" role="button" href="Resume_Hafsa_Ghias.pdf" target="blank"> Resume </a>
		</div>
		<div class="col">
			<img class="me float-right" src="IMG_75131.jpg" alt="" style="box-shadow: 0 0 50px 0 rgba(51, 51, 51, 0.3);">
		</div>
	</div>
		
	<div class="row">
		<div class="col">
			</br>
			</br>	
			<h2> Design Philosophy </h2>
			</br>
			<h5 style= "line-height: 150%;">Design is all around us. But the best products, physical or digital, are ones that you don’t realize have been designed, because they've been seamlessly integrated into our lives. Because they've been designed with the user in mind. they offer an effective solution to a problem you may or may not be aware of or make your day to day life more efficient.
			</br>
			</br>
			Take the design of a door for instance. You use doors everyday. The act of opening and closing a door is a mundane one and is gone unnoticed if it’s intuitive – a quality of good design. However, if it’s too heavy to open or push or pull, the door becomes an obstacle and is considered poor design. Additionally, one must think about the different types of users for a given design as well. What may be an easy door for able-bodied users could serve as a difficulty for users in wheelchairs if there’s no handicap door opener. Understanding the target audience of your brand, digital interface, or product and adapting your design so it’s inclusive and accessible to everyone is every designer’s responsibility.
			</h5>
			</br>
			</br>
			
			<h2> My Design Process </h2>
			</br>
			<h5 style= "line-height: 150%;"> I believe that process is extremely important because it makes sure I am intentional with every decision. My design process has been abstracted from the UX design process, but can be applied to any project I am working on, whether it being product design, branding design or graphic design. Good design is human centered, which means that it is empathetic, so conducting user research is one of the most important steps. I strive to understand the client's goals and user's needs and translate them into a visual that satisfies the client and user.</h5>
			<img src="processDetails.png" alt="" style="width:100%;">
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