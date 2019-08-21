<!-- HEADER !--> 

<nav class="navbar navbar-expand-md">
	<a class="navbar-brand col p-0 pt-3" href="index.php"> 
		<img class="navbar-img" src="Hafsa Logo-15.png" alt="logo" > 
	</a>

	<!-- Toggler/collapsibe Button -->
  	<div class="navbar-toggler" data-toggle="collapse" data-target="#navbar" id="nav-icon3">
       <!-- <span class="navbar-toggler-icon"> </span> !--> 
       <span></span>
       <span></span>
       <span></span>
       <span></span>
    </div>


	<div class="collapse navbar-collapse justify-content-end text-right" id="navbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" id="design-nav" href="design.php"> DESIGN </a> 
			</li>
			<li class="nav-item">
				<a class="nav-link" id="photo-nav" href="photography.php"> PHOTOGRAPHY </a> 
			</li>
			<li class="nav-item">
				<a class="nav-link" id="mm-nav" href="mixedmedia.php"> MIXED MEDIA </a>  
			</li>
			<li class="nav-item">
				<a class="nav-link" id="about-nav" href="aboutme.php"> ABOUT ME </a>
			</li>
		</ul>
	</div>
</nav>

<script>
	$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});
</script>
