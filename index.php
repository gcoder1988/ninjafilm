<?php
session_start();


include 'connection.php';


?>













<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title >shopping online cart</title>
	<link rel="stylesheet" type='text/css' href="css/bootstrap.min.css">
   
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<style type="text/css">

	video{

		width: 100%;
		height:100% ;
		background-size: cover;
	}

@media(max-width: 1040px){

video{

		width: 100%;
		height:100% ;
		object-fit:cover;
	}

}


</style>




</head>
<body >

<nav class="navbar navbar-expand-lg fixed-top" style="background-color:rgba(0,0,0,0.9); ">
	<div class="container">
		
<a href="" class="navbar-brand" style="color: white; font-family: Segoe Script,serif;">Ninja Films</a>

<button type="button" class="navbar-toggler" data-toggle ='collapse' data-target='#navbarcontent' aria-controls="navbarcontent"  ><span class="navbar-toggler-icon" style="background-color:rgb(58,58,58);"></span></button>
<div class="collapse navbar-collapse" id="navbarcontent" >
<ul class="navbar-nav move">
		<li class="nav-item"><a href="" class="nav-link" style="color: white; font-family: times-new-roman,serif;
		">Contact us</a></li>
		<li class="nav-item dropdown"> <a href="" class="nav-link dropdown-toggle" data-toggle ='dropdown' style="color: white; font-family: times-new-roman,serif;">Categories</a>
        <ul class="dropdown-menu ">
        	<?php
                  
$get_cat = new Connect();
$res = $get_cat->get_cat();
while ($row = mysqli_fetch_assoc($res)) {
	$id = $row["id"];
		$name = $row["name"];

?>
        	<li><a href="view_video.php?catid=<?php echo $id ?>" class="dropdown-item"><?php echo $name ?></a></li>
<?php } ?>

        </ul>

		</li>


</ul>
</div>
	</div>
</nav>



			
		<section>

<div id="video-carousel" class="carousel slide  carousel-fade " data-ride ="carousel">

<ul class="carousel-indicators">

<li data-target ="#video-carousel" data-slide-to ="0" class ="active"></li>
<li data-target ="#video-carousel" data-slide-to ="1" ></li>
<li data-target ="#video-carousel" data-slide-to ="2" ></li>

</ul>

<div class="carousel-inner" role = "listbox">

	<div class="carousel-item  active" style ="height: 700px; width:100%">
		
		<video class ="video-fluid"  autoplay loop muted>
			
			<source src="OlamidePawon-Official-Video.mp4" type="video/mp4">
		</video>
<div class="carousel-caption font-weight-bold" style="margin-bottom: 120px; background-color: rgba(0,0,0,0.9);font-family: Segoe Script,serif;">
	<h2>Hold On</h2>
		<p>Olamide ft Young jonn</p>

</div>

</div>  

<div class="carousel-item" style ="height: 700px; width:100%">
		
		<video class ="video-fluid"  autoplay loop muted>
			
			<source src="OlamidePawon-Official-Video.mp4." type="video/mp4">
		</video>
<div class="carousel-caption font-weight-bold" style="margin-bottom: 120px; background-color: rgba(0,0,0,0.9);font-family: Segoe Script,serif;">
	<h2>Shekpe</h2>
	<p>Davido ft 2 baba</p>
</div>

</div>  

<div class="carousel-item " style ="height: 700px; width:100%">
		
		<video class ="video-fluid"  autoplay loop muted>
			
			<source src="OlamidePawon-Official-Video.mp4." type="video/mp4">
		</video>
<div class="carousel-caption font-weight-bold" style="margin-bottom: 120px; background-color: rgba(0,0,0,0.9); font-family: Segoe Script,serif;">
	<h2 >She tell me say</h2>
	<p >Wizkid ft Asake</p>
</div>

</div>  
	
</div>
<a href="#video-carousel" class="carousel-control-prev" role ="button" data-slide='prev'>
	<span class="carousel-control-prev-icon" aria-hidden ="true"></span>
	<span class="sr-only">previous</span>

</a>

<a href="#video-carousel" class="carousel-control-next" role ="button" data-slide='next'>
	<span class="carousel-control-next-icon" aria-hidden ="true"></span>
	<span class="sr-only">next</span>

</a>
</div>


</section>
  <script src='js/jquery.js' type='text/javascript'></script>
<script type="text/javascript">
	              	

</script>
<script src='js/popper.min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>

</body>
</html>






<!--<div class="carousel-inner" role = "listbox">

	<div class="carousel-item active" style ="height: 483px; width:100%">
		
		<video class ="video-fluid"  autoplay loop muted>
			
			<source src="Young Dolph 'Turned Dirt Into Diamonds'-  Documentary.mp4" type="video/mp4">
		</video>
<div class="carousel-caption font-weight-bold">
	<h2>ninja films</h2>
</div>


	</div>
	
<div class="carousel-item " style ="height: 483px; width:100%">
		
		<video class ="video-fluid autoplay loop muted">
			
			<source src="Young Dolph 'Turned Dirt Into Diamonds'-  Documentary.mp4" type="video/mp4">
		</video>
<div class="carousel-caption font-weight-bold">
	<h2>ninja films</h2>
</div>


	</div>
	<div class="carousel-item " style ="height: 483px; width:100%">
		
		<video class ="video-fluid autoplay loop muted">
			
			<source src="Young Dolph 'Turned Dirt Into Diamonds'-  Documentary.mp4" type="video/mp4">
		</video>
<div class="carousel-caption font-weight-bold">
	<h2>ninja films</h2>
</div>


	</div>
	
</div>
<a href="#video-carousel" class="carousel-control-prev" role ="button" data-slide='prev'>
	<span class="carousel-control-prev-icon" aria-hidden ="true"></span>
	<span class="sr-only">previous</span>

</a>

<a href="#video-carousel" class="carousel-control-next" role ="button" data-slide='next'>
	<span class="carousel-control-next-icon" aria-hidden ="true"></span>
	<span class="sr-only">next</span>

</a>
-->

