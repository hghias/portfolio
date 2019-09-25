<!DOCTYPE html>
<html lang="en">
<head>
	<?php include ('head.php');?>

</head>
<body id="design">

	<?php include ('nav.php');?>

<!-- LANDING PAGE !-->


<div class = "container-fluid mmb" data-aos="fade-down" data-aos-duration="1000" > 
	<div class="row" style="padding-top: 14%; padding-bottom:18%;"> <!--  !-->
		<div class="col align-self-center">
			<div class="typed-wrap text-center d-flex justify-content-center align-items-center">
				<h1> Photography </h1>
				<img class="camera" src="aperture-07.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
	<div class="row">
		<div class="col btn-toolbar btn-group pb-5 " role="group" data-toggle="buttons"> 
			<a class="btn sh" id="designbutton" role="button" > Show All </a>
			<!-- <a class="btn al" id="designbutton" role="button" > Albums </a>
			<a class="btn cr" id="designbutton" role="button" > Creative </a>
			<a class="btn cl" id="designbutton" role="button" > Client </a> !-->
			<a class="btn pr" id="designbutton" role="button" > Portrait </a>
			<a class="btn ur" id="designbutton" role="button" > Urban </a>
			<a class="btn na" id="designbutton" role="button" > Nature </a>
			<a class="btn we" id="designbutton" role="button" > Wedding </a>
			<!-- <a class="btn ev" id="designbutton" role="button" > Event </a> !-->
		</div>
	</div>
</div>



<div class="container-fluid pb-5">
	<div class="row" data-aos="fade-up" data-aos-duration="1000">
		<div class="col-lg-4 ">
			<div class="pb-4 wedding portrait client">
				<a href="IMG_0620.jpg" data-fancybox="images"  >
					<img class="" src="IMG_0620.jpg" alt="" width="100%">	
				</a>
			</div>

			<div class="pb-4 portrait creative">
				<a href="_DSC0361.jpg" data-fancybox="images"  >
					<img class="" src="_DSC0361.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 portrait urban creative">
				<a href="_DSC0185.jpg" data-fancybox="images"  >
					<img class="" src="_DSC0185.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 urban creative">
				<a href="DSC_0253-3.jpg" data-fancybox="images"  >
					<img class="" src="DSC_0253-3.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 nature creative">
				<a href="print large.jpg" data-fancybox="images"  >
					<img class="" src="print large.jpg" alt="" width="100%">
				</a>
			</div>

			
		</div>

		<div class="col-lg-4 ">
			<div class="pb-4 urban creative">
				<a href="_DSC1379.JPG" data-fancybox="images" >
					<img class="" src="_DSC1379.JPG" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 portrait client">
				<a href="DSC_0330.jpg" data-fancybox="images"  >
					<img class="" src="DSC_0330.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 urban creative">
				<a href="_DSC1300-2.jpg" data-fancybox="images" >
					<img class="" src="_DSC1300-2.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 portrait urban creative">
				<a href="_DSC0037.jpg" data-fancybox="images" >
					<img class="" src="_DSC0037.jpg" alt="" width="100%">	
				</a>
			</div>

			<div class="pb-4 portrait creative">
				<a href="_DSC0247-2.jpg" data-fancybox="images" >
					<img class="" src="_DSC0247-2.jpg" alt="" width="100%">	
				</a>
			</div>

			<div class="pb-4 nature creative">
				<a href="DSC_0396.jpg" data-fancybox="images" >
					<img class="" src="DSC_0396.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 portrait creative">
				<a href="IKTM6155.JPG" data-fancybox="images" >
					<img class="" src="IKTM6155.JPG" alt="" width="100%">
				</a>
			</div>

		</div>

		<div class="col-lg-4 ">
			<div class="pb-4 nature creative">
				<a href="_DSC0202.jpg" data-fancybox="images" >
					<img class="" src="_DSC0202.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4  portrait creative">
				<a href="_DSC0108.jpg" data-fancybox="images" >
					<img class="" src="_DSC0108.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4 urban creative">
				<a href="_DSC1039.jpg" data-fancybox="images" >
					<img class="" src="_DSC1039.jpg" alt="" width="100%">
				</a>
			</div>

			<div class="pb-4  portrait client">
				<a href="DSC_0145.jpg" data-fancybox="images" >
					<img class="" src="DSC_0145.jpg" alt="" width="100%">
				</a>
			</div>

		</div>

	</div>
</div>
<?php include ('footer.php');?>
<script>
	$('[data-fancybox="images"]').fancybox({
  buttons : [ 
    'slideShow',
    'zoom',
    'fullScreen',
    'close',
    'thumbs'
  ],
  protect:true,
});

</script>

<script>
  AOS.init();
</script>

<script>

	 $('#photo-nav').toggleClass('navbar-active');

	$(document).ready(function(){
	   
	    $('.sh').addClass("active");
	});

	$('.btn').on('click', function(){
	    $('.btn').removeClass("active");
	    $(this).addClass("active");
	});


	$(".sh").click(function() { //show all
		$(this).toggleClass("active");
		$('div.portrait').show();
		$('div.urban').show();
		$('div.nature').show();
		$('div.wedding').show();
		$('div.event').show();
	});

	$(".cr").click(function() { //creative
		$('div.creative').show();
		$('div.client').hide();
	});

	$(".cl").click(function() { //client
		$('div.client').show();
		$('div.creative').hide();
	});

	$(".pr").click(function() { //portrait
		$(this).toggleClass("active");
		$('div.urban').hide();
		$('div.nature').hide();
		$('div.wedding').hide();
		$('div.event').hide();
		$('div.portrait').show();
	});


	$(".ur").click(function() { //urban
		$(this).toggleClass("active");
		$('div.portrait').hide();
		$('div.nature').hide();
		$('div.wedding').hide();
		$('div.event').hide();
		$('div.urban').show();
	});

	$(".na").click(function() { //nature
		$(this).toggleClass("active");
		$('div.portrait').hide();
		$('div.urban').hide();
		$('div.wedding').hide();
		$('div.event').hide();
		$('div.nature').show();
	});

	$(".we").click(function() { //wedding
		$(this).toggleClass("active");
		$('div.portrait').hide();
		$('div.urban').hide();
		$('div.nature').hide();
		$('div.event').hide();
		$('div.wedding').show();
	});
</script>

</body>

</html>