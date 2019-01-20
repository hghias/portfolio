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
		<div class ="mmb col my-auto align-self-center" style="padding-top: 15%; padding-bottom:18%; " >
			<div class="typed-wrap text-center">
				<h1> Mixed Media </h1>
 				<img class="mmlanding" src="fff.png" alt="">
 			</div>
		</div>
	</div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="row">
		<div class="col btn-toolbar btn-group pb-5 " role="group" data-toggle="buttons"> 
			<a class="btn sh" id="designbutton" role="button" > Show All </a>
			<a class="btn pn" id="designbutton" role="button" > Painting </a>
			<a class="btn dr" id="designbutton" role="button" > Drawing </a>
			<a class="btn dg" id="designbutton" role="button" > Digital </a>
			<a class="btn 3d" id="designbutton" role="button" > three dimensional </a>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row" data-aos="fade-up" data-aos-duration="1000">
		
		<div class = "col-lg-4">

			<div class="pb-4 painting">
				<a class="" href="SummerTimeBlues.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="SummerTimeBlues.jpg" alt="" width="100%">	
				</a>
			</div>

			<div class="pb-4 painting">
				<a class="" href="IMG_9957-Edit.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="IMG_9957-Edit.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 drawing">
				<a class="" href="_DSC0782.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="_DSC0782.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 drawing">
				<a class="" href="arch.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="arch.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 branding">
				<a class="" href="box.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="box.jpg" alt="" width="100%">
				</a>
			</div>
			
		</div>
			
	
		<div class = "col-lg-4">
			<div class="pb-4 threed">
				<a class="" href="_DSC0931-Edit.jpg" data-fancybox="filter" data-caption="caption">
					<img class="mx-auto d-block" src="_DSC0931-Edit.jpg" alt="" width="100%">	
				</a>
			</div>

			<div class="pb-4 painting">
				<a class="" href="colors.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="colors.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 drawing">
				<a class="" href="IMG_4742.JPG" data-fancybox="filter" data-caption="caption">
					<img class="mx-auto d-block" src="IMG_4742.JPG" alt="" width="100%">
				</a>
			</div>


			<div class="pb-4 painting">
				<a class="" href="IMG_0037.JPG" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="IMG_0037.JPG" alt="" width="100%">
				</a>
			</div>

		</div>

		<div class = "col-lg-4">
			<div class="pb-4 digital">
				<a class="" href="Heart.png" data-fancybox="filter" data-caption="caption">
					<img class="mx-auto d-block" src="Heart.png" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 drawing">
				<a class="" href="DSC_0464 (2).jpg" data-fancybox="filter" data-caption="caption">
					<img class="mx-auto d-block" src="DSC_0464 (2).jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 drawing">
				<a class="" href="Scan 4.png" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="Scan 4.png" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 threed">
				<a class="" href="hands.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="hands.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 drawing">
				<a class="" href="_DSC0464.jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="_DSC0464.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 branding">
				<a class="" href="DSC_0483 (3).jpg" data-fancybox="filter" data-caption="caption">
					<img class="img-fluid" src="DSC_0483 (3).jpg" alt="" width="100%">
				</a>
			</div>

		</div>

	</div>
</div>
<?php include ('footer.php');?>


 

<script>
	AOS.init();
	$('#mm-nav').toggleClass('navbar-active');
	
	$(document).ready(function(){
	    
	});


	$('[data-fancybox="images"]').fancybox({
  buttons : [ 
    'slideShow',
    'zoom',
    'fullScreen',
    'close'
  ],
  protect:true,
});

// Show/hide selected links
$('#filter').on('change', function() {
  var $visible, val = this.value;
  
  if (val) {
    $visible = $('[data-fancybox="filter"]').hide().filter('.' + val);
   } else {
    $visible = $('[data-fancybox="filter"]');
  }
  
  $visible.show();
});

	$(document).ready(function(){
	    $('.sh').addClass("active");

	});

	$('.btn').on('click', function(){
	    $('.btn').removeClass("active");
	    $(this).addClass("active");
	});

	$(".sh").click(function() { //show all
		$(this).toggleClass("active");
		$('div.painting').show();
		$('div.drawing').show();
		$('div.threed').show();
		$('div.digital').show();
	});

	$(".pn").click(function() { //painting
		$(this).toggleClass("active");
		$('div.drawing').hide();
		$('div.threed').hide();
		$('div.digital').hide();
		$('div.painting').show();
	});

	$(".dr").click(function() { //drawing
		$(this).toggleClass("active");
		$('div.threed').hide();
		$('div.digital').hide();
		$('div.painting').hide();
		$('div.drawing').show();
	});

	$(".dg").click(function() { //digital
		$(this).toggleClass("active");
		$('div.threed').hide();
		$('div.painting').hide();
		$('div.drawing').hide();
		$('div.digital').show();
	});

	$(".3d").click(function() { //3d
		$(this).toggleClass("active");
		$('div.painting').hide();
		$('div.drawing').hide();
		$('div.digital').hide();
		$('div.threed').show();
	});

</script>



</body>

</html>