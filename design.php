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
		<div class ="col my-auto align-self-center" style="padding-top: 12vh; padding-bottom:15vh;" >
			<div class="typed-wrap text-center">
				
				 <h1> <span id="header"></span> Design</h1> <!--typed!-->

			</div>
		</div>
	</div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="row">
		<div class="col pb-5 horizontal-scroll" role="group" data-toggle="buttons"> 
			<a class="btn sh pl-2 pr-2 ml-1" id="designbutton" role="button"> SHOW ALL </a>
			<a class="btn ui pl-2 pr-2 ml-1" id="designbutton" role="button" > UI/UX</a>
			<a class="btn br pl-2 pr-2 ml-1" id="designbutton" role="button" > BRANDING</a>
			<a class="btn pr pl-2 pr-2 ml-1" id="designbutton" role="button" > PRODUCT</a>
			<a class="btn gr pl-2 pr-2 ml-1" id="designbutton" role="button" > GRAPHIC</a>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row" data-aos="fade-up" data-aos-duration="1000">
		<div class = "col-lg-4">
			<div class="project pb-3 ux"> <!-- Molar Bear !-->
				<a data-fancybox data-touch="true" href="#MolarModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Molar Bear Square-22.png" alt="" style="background-color: #E5BD41;">  
						<div class='text-hover'>
		 					<h2 class="text-center"> Molar Bear </h2>
		 					<p class ="text-center mx-auto"> UX Research • Interaction Design</p>
	 					</div>
					</div>
				</a>
			</div>

			<div class="project pb-3 branding"> <!-- SCD !-->
				<a data-fancybox data-touch="true" href="#scdModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Smart Choice Distributors.png" alt="" style="background-color: #1f3160;"> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class="text-center"> Smart Choice Distributors </h2>
		 					<p class ="text-center mx-auto"> Brand Development • Web Development </p>
	 					</div>
					</div>
				</a>
			</div>

			
			<div class="project pb-3 product"> <!-- BUDDY !-->
					<a data-fancybox data-touch="true" href="#buddyModal"> 
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="_DSC1267.jpg" alt=""> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class ="text-center"> The Buddy Bird </h2>
		 					<p class ="text-center mx-auto">Product Design • Rapid Prototyping</p>
	 					</div>
					</div>
				</a>
			</div>


			<div class="project pb-3 ux"> <!-- MSA UX DESIGN !-->
				<a data-fancybox data-touch="true" href="#MSAModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="msawebsite-06.png" alt="" style="background-color: #D5622A;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> MSA Website Overhaul </h2>
		 					<p class ="text-center mx-auto"> UX Research • Visual Design • Web Development </p>
	 					</div>
					</div>
				</a>
			</div>

			<div class="project pb-3 graphic"> <!-- Layers !-->
				<a data-fancybox data-touch="true" href="#layersModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="layers-41.png" alt="" style="background-color: #5e2960;">

						<div class='text-hover'>
		 					<h2 class ="text-center"> Layers: The Impact of Design </h2>
		 					<p class ="text-center mx-auto"> Illustration • Graphic Design </p>
	 					</div>
					</div>
				</a>
			</div>
		
		</div>

		<div class = "col-lg-4">

			<div class="project pb-3 ux"> <!-- Flutter !-->
				<a data-fancybox data-touch="true" href="#FlutterModal" >
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Flutter-44.png" alt="" style="background-color: #034d61;"> 
						<div class='text-hover'>
		 					<h2 class ="text-center"> Flutter: A Digital Pen Pal </h2>
		 					<p class ="text-center mx-auto"> Interaction Design • UX Research </p>
	 					</div>
					</div>
				</a>
			</div>

			<div class="project pb-3 ux"> <!--HITS !-->
				<a data-fancybox data-touch="true" href="#HITSModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="575.jpeg" alt=""> 
						<div class='text-hover'>
		 					<h4 class ="text-center"> Coming Soon! </h4>
		 					</br>
		 					<h2 class ="text-center"> HITS Service Catalog Improvement </h2>
		 					<p class ="text-center mx-auto"> UX Research • UX Design </p>
	 					</div>
					</div>
				</a>
			</div>


			<div class="project pb-3 graphic"> <!-- GRAPHIC DESIGN !-->
				<a data-fancybox data-touch="true" href="#GraphicModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="graphic-42.png" alt="" style="background-color: #C5A9C2; display:block;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> Graphic Design Projects </h2>
		 					<p class ="text-center mx-auto"> Graphic Design • Illustration </p>
	 					</div>
					</div>
				</a> 	
			</div>

			<div class="project pb-3 product"> <!-- Eclipse !-->
				<a data-fancybox data-touch="true" href="Perfume_Documentation_Hafsa_Ghias.pdf" >
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="_DSC0063.jpg" alt="" style="background-color: #1f3160;"> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class ="text-center"> Eclipse </h2>
		 					<p class ="text-center mx-auto"> Product Design </p>
	 					</div>
					</div>
				</a>
			</div>

			<div class="project pb-3 branding"> <!-- Branding Design !-->
				<a data-fancybox data-touch="true" href="#BrandModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="optimizeBranding.png" alt="" style="background-color: #fff; display:block;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> Branding Design Projects </h2>
		 					<p class ="text-center mx-auto"> Brand Development </p>
	 					</div>
					</div>
				</a> 	
			</div>

			
		</div>

		<div class = "col-lg-4">
			<div class="project pb-3 ux product"> <!-- Snug !-->
				<a data-fancybox data-touch="true" href="Snug Business Plan & Design Process.pdf" >
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Snug-1.jpg" alt="" style="background-color: #1f3160;"> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class ="text-center"> Snug: Encouraging Natural Sleep </h2>
		 					<p class ="text-center mx-auto"> Product Design • UX Research • UX Design </p>
	 					</div>
					</div>
				</a>
			</div>

			<div class="project pb-3 product branding gr"> <!-- SPARK !-->
				<a data-fancybox data-touch="true" href="Spark.pdf">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="converge.jpg" alt="" style="background-color: #1f3160;"> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class ="text-center"> Spark </h2>
		 					<p class ="text-center mx-auto"> Brand Development • Product Design </p>
	 					</div>
					</div>
				</a>
			</div>


			<div class="project pb-3 ux branding"> <!-- PORTFOLIO !-->
				<a data-fancybox data-touch="true" href="#HafsaModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="portfolio-43.png" alt="" style="background-color: #255484;"> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class ="text-center"> Portfolio Overhaul </h2>
		 					<p class ="text-center mx-auto"> Brand Development • UX/UI Design • Web Development </p>
	 					</div>
					</div>
				</a>
			</div>

			<div class="project pb-3 graphic"> <!-- Legacy of Detroit !-->
				<a data-fancybox data-touch="true" href="#DetModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="1 Rosa Parks Soldier-past.png" alt="" style="background-color:#FFF;"> <!--#f0efef!-->
						<div class='text-hover'>
		 					<h2 class ="text-center"> Legacy of the 1967 Detroit Rebellion </h2>
		 					<p class ="text-center mx-auto">Photo Exhibit</p>
	 					</div>
					</div>
				</a>
			</div>	

			 <div class="project pb-3 ux">  <!-- Elevator !-->
				<a data-fancybox data-touch="true" href="10,000 Floor Elevator Design.pdf">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Elevator-32.png" alt=""> 
						<div class='text-hover'>
		 					<h2 class ="text-center"> 10,000 Floor Elevator </h2>
		 					<p class ="text-center mx-auto"> Interaction Design </p>
	 					</div>
					</div>
				</a>
			</div>

			<!-- <div class="project pb-3 product"> One Handed Pan Holder
				<a data-fancybox data-touch="true" href="Final Project.pdf" >
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="_DSC0419.jpg" alt="" style="background-color: #1f3160;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> One Handed Pan Holder </h2>
		 					<p class ="text-center mx-auto"> Product Design </p>
	 					</div>
					</div>
				</a>
			</div> !-->

			<!-- <div class="project pb-3 product">  Delightful Design 
				<a data-fancybox data-touch="true" href="#HITSModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="575.jpeg" alt=""> 
						<div class='text-hover'>
		 					<h4 class ="text-center"> Coming Soon! </h4>
		 					</br>
		 					<h2 class ="text-center"> HITS Service Catalog Improvement </h2>
		 					<p class ="text-center mx-auto"> UX Research • UX Design </p>
	 					</div>
					</div>
				</a>
			</div>!-->

		</div>
	</div>
</div>


<!-- <div class="project pb-3 branding">  OPTIMIZE 
		<a data-fancybox data-touch="true" href="#optModal">
			<div class="show_overlay">
		 		<div class="overlay"></div>
					<img class="gallery_image img-fluid" src="optimizeBranding.png" alt="" style="background-color:#FFF;">
				<div class='text-hover'>
		 			<h2 class ="text-center"> Optimize Branding Consultant </h2>
		 			<p class ="text-center mx-auto">Brand Development</p>
	 			</div>
			</div>
		</a>
	</div>	

			<div class="project pb-3 branding"> REDEFINE 
 				<a data-fancybox data-touch="true" href="#RedefineModal">
	 				<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Redefine1-46.png" alt="" style="background-color: #A35780; display:block; height:auto;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> Redefine </h2>
		 					<p class ="text-center mx-auto">Brand Development • Organization Development</p>
	 					</div>
					</div>
				</a>
			</div>

			 <div class="project pb-3 branding"> MICHIGAN MOVEMENT
				<a data-fancybox data-touch="true" href="#MMModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="MM.png" alt="" style="background-color: #4B92A0; display:block;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> Michigan Movement </h2>
		 					<p class ="text-center mx-auto"> Brand Development </p>
	 					</div>
					</div>
				</a> 	
			</div> 

			<div class="project pb-3 branding"> PAANI 
				<a data-fancybox data-touch="true" href="#PaaniModal">
					<div class="show_overlay">
		 				<div class="overlay"></div>
						<img class="gallery_image img-fluid" src="Paani.png" alt="" style="background-color: #009cd7; display:block;">
						<div class='text-hover'>
		 					<h2 class ="text-center"> Paani </h2>
		 					<p class ="text-center mx-auto"> Brand Development </p>
	 					</div>
					</div>
				</a>
			</div> !-->


<?php include ('footer.php');?>

</body>


<div class="modal modalx" id="DetModal">
	 <img class="horizontal-scroll" src="Legacy of the 1967 Detroit Rebellion-01.jpg" alt="" style="height:86vh;">
</div>


<?php include ('HITSModal.php');?>
<?php include ('branding-modal.php');?>
<?php include ('graphic-modal.php');?>
<?php include ('msa-modal.php');?>
<?php include ('portfolio-modal.php');?>
<?php include ('optimize-modal.php');?>
<?php include ('scd-modal.php');?>
<?php include ('layers-modal.php');?>
<?php include ('Flutter-modal.php');?>
<?php include ('buddy-modal.php');?>
<?php include ('MolarModal.php');?>

<script>    
	$(function(){
	$(".typed").typed({
		strings: ["User Experience", "Branding", "Product"],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 60,
		// time before typing starts
		startDelay: 300,
		// backspacing speed
		backSpeed: 60,
		// time before backspacing
		backDelay: 1200,
		// loop
		loop: true,
		// false = infinite
		loopCount: 5,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});

</script>

<script>
	$('[data-fancybox="images"]').fancybox({
		buttons : [ 
		    'close'
		],
		protect:true,
	});

  AOS.init();


$('.btn').click(function() {
  	$("#header").addClass('underline');
});

/* $('.btn').click(function() {
 	$('.underline').toggleClass('hvr-sweep-to-right');
});
*/

$('.btn').click(function(e){    
    $('#header').fadeIn('slow', function(){
    });
});


$('#myModal').on('shown.bs.modal', function () {
  $('#mymodal').trigger('focus')
})


$('#design-nav').toggleClass('navbar-active');
	
	var span = document.getElementById("header"); 
	var url = window.location.search;
	if (url == "?filter=ux") {
		$('.ui').addClass("active");
		$('div.project').hide();
		$('div.ux').fadeIn(1000, "linear");
		
		span.textContent = "User Experience";
	}
	else if (url == "?filter=branding") {
		$('.br').addClass("active");
		$('div.project').hide();
		$('div.branding').fadeIn(1000, "linear");
		span.textContent = "Branding";
	}
	else if (url == "?filter=product") {
		$('.pr').addClass("active");

		$('div.project').hide();
		$('div.product').fadeIn(1000, "linear");
		span.textContent = "Product";
	}
	else {
		$('.sh').addClass("active");
		span.textContent = "";
	}
	

	$('.btn').on('click', function(){
	    $('.btn').removeClass("active");
	    $(this).addClass("active");
	}); 


	$(".ui").click(function() { //ui/ux
		//var url = new URL;
		//url.searchParams.append('filter', "UX");
		$(this).toggleClass("active");
		$('div.project').hide();
		$('div.ux').fadeIn(1000, "linear");

		span.textContent = "User Experience";
	});

	$(".sh").click(function() { //show all
		$(this).toggleClass("active");
		$('div.project').hide();
		$('div.project').fadeIn(1000, "linear");
		span.textContent = "";
	});

	$(".br").click(function() { //branding
		$(this).toggleClass("active");
		$('div.project').hide();
		$('div.branding').fadeIn(1000, "linear");
		span.textContent = "Branding";
	});

	$(".pr").click(function() { //product design
		$(this).toggleClass("active");
		$('div.project').hide();
		$('div.product').fadeIn(1000, "linear");
		span.textContent = "Product";
	});

	$(".gr").click(function() { //graphic design
		$(this).toggleClass("active");
		$('div.project').hide();
		$('div.graphic').fadeIn(1000, "linear");
		//$('div.graphic').show();
		span.textContent = "Graphic";
	});

</script>
 
</html>