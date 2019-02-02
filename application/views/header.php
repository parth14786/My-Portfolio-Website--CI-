<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<?php
// Reading text file
$myFile = "assets/Uploads/Contact_Details.txt";
$lines = file ( $myFile ); // file in to an array
                        // echo $lines[0];

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $lines[0];?></title>

<link href="<?php echo base_url('assets/css/bootstrap.css')?>"
	rel="stylesheet">
<link href="<?php echo base_url('assets/css/dashboard.css')?>"
	rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css')?>"
	rel="stylesheet">


<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="Curriculum Vitae Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript">
	
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 

</script>



<link
	href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Varela+Round'
	rel='stylesheet' type='text/css'>

<script src="assets/js/jquery.min.js"></script>
</head>

<body oncontextmenu="return false">
	<script type='text/javascript'>
  $(document).keydown(function(e){
    e.preventDefault();
  });
</script>
	<!-- header -->
	<div class="col-sm-3 col-md-2 sidebar">
		<div class="sidebar_top">
			<h1>Parth Shah</h1>
			<img src="<?php echo base_url('assets/images/Main.jpeg')?>" alt="" />
			<!-- <audio src="assets/Uploads/background-music.mp3" autoplay="true" loop="true"> </audio> -->
		</div>
		<div class="details">

			<!-- 
			<h3>Parth Information</h3>
			<p>
				<a href="Parth_Information.php">Click Here</a>
			</p>
		-->
			<h3><?php echo $lines[2];?></h3>
			<p>
				<?php echo $lines[3];?><br><?php echo $lines[4];?>
			</p>

			<h3><?php echo $lines[6];?></h3>
			<p>
				<a href="#"><?php echo $lines[7];?></a> <a href="#"><?php echo $lines[8];?></a>
				<a href="#"><?php echo $lines[9];?></a>
			</p>

			<!-- 
			
			<h3>Things Money Can't Buy</h3>
			<p>
				<a href="Page1.php">Click Here</a>
			</p>
			-->

			<address>
				<h3><?php echo $lines[11];?></h3>
				<span> <?php echo $lines[12];?></span>
			</address>
		</div>
		<div class="clearfix"></div>
	</div>
	<!---->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css"
		media="all" />
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="content">
			<div style="font-size: 0.75em; font-family: Varela Round;"
				class="details_header">
				<ul>
					<li><a style="Color: #696969;"
						href="<?php echo base_url('assets/Uploads/ParthShah - Curriculum Vitae.zip')?>"><span
							class="glyphicon glyphicon-file" aria-hidden="true"></span>Resume</a></li>

					<li><a style="Color: #696969;"
						href="<?php echo base_url('assets/Uploads/ParthShah - Business Card.zip')?>"><span
							class="glyphicon glyphicon-picture" aria-hidden="true"></span>Business
							Card</a></li>

					<li><a style="Color: #696969;"
						href="<?php echo base_url('assets/Uploads/ParthShah - Brochure Design.zip')?>"><span
							class="glyphicon glyphicon-picture" aria-hidden="true"></span>Brochure
							Design</a></li>
					<li><a style="Color: #696969;"
						href="<?php echo site_url('portfolio/latest_videos')?>"><span
							class="glyphicon glyphicon-picture" aria-hidden="true"></span>Latest
							Videos</a></li>

					<li><a style="Color: #696969;"
						href="<?php echo site_url('portfolio/other_stuff')?>"><span
							class="glyphicon glyphicon-picture" aria-hidden="true"></span>Other
							Stuff</a></li>


					<li><a style="Color: #696969;"
						href="<?php echo base_url('assets/Uploads/ParthShah - Sample Demos.zip')?>"><span
							class="glyphicon glyphicon-picture" aria-hidden="true"></span>Sample
							Demos</a></li>


					<div id="small-dialog" class="mfp-hide">
						<!-- <img src="assets/images/g4.jpeg" alt="" />  -->
					</div>
					<script>
						$(document).ready(function() {
							$('.popup-with-zoom-anim').magnificPopup({
								type : 'inline',
								fixedContentPos : false,
								fixedBgPos : true,
								overflowY : 'auto',
								closeBtnInside : true,
								preloader : false,
								midClick : true,
								removalDelay : 300,
								mainClass : 'my-mfp-zoom-in'
							});

						});
					</script>
				</ul>
			</div>