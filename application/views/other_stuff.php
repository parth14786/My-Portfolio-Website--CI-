<?php
// Reading text file
$myFile = "assets/Uploads/Links.txt";
$lines = file ( $myFile ); // file in to an array
                           // echo $lines[0];
?>

<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  
  <script type='text/javascript'>
  $(document).keydown(function(e){
    e.preventDefault();
  });
</script>

<div id="tabs" style="margin-left: 10%; margin-top: 10%; margin-bottom: 10%; width: 80%; font-family: Trebuchet MS; font-size: 0.9em;">
	<ul>
		<li><a href="#tabs-1">Calendar</a></li>
		<li><a href="#tabs-2">Calculator</a></li>
		<li><a href="#tabs-3">Clock</a></li>
		<li><a href="#tabs-4">Gallery</a></li>
		<li><a href="#tabs-5">Original JanamKundali</a></li>
	</ul>
	<div id="tabs-1"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[12];?>"
				target="_blank">Show Calendar</a>
		</p>
	</div>
	<div id="tabs-2"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[13];?>"
				target="_blank">Show Calculator</a>
		</p>
	</div>
	<div id="tabs-3"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[14];?>"
				target="_blank">Show Clock</a>

		</p>
	</div>
	<div id="tabs-4"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="https://bit.ly/2DvuLIf"
				target="_blank">Microsoft OneDrive Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="https://bit.ly/2DgOmvy"
				target="_blank">Youtube Channel</a>
		</p>
	</div>
	<div id="tabs-5"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[16];?>"
				target="_blank">Show JanamKundali</a>
		</p>
	</div>
</div>

<script>
  $( function() {
    $( "#tabs1" ).tabs();
  } );
  </script>
<div id="tabs1"
	style="margin-left: 10%; margin-top: 10%; margin-bottom: 10%; width: 80%; font-family: Trebuchet MS; font-size: 0.9em;">
	<ul>
		<li><a href="#tabs-6">Hobbies & Interest</a></li>
		<li><a href="#tabs-7">Investment Management</a></li>
		<li><a href="#tabs-8">Google Play Store</a></li>
		<li><a href="#tabs-9">Top 10 Advices for Peaceful Life</a></li>

	</ul>
	<div id="tabs-6"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[18];?>"
				target="_blank">Show Hobbies & Interest</a>
		</p>
	</div>

	<div id="tabs-7"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[19];?>"
				target="_blank">Show Investement Management</a>
		</p>
	</div>
	<div id="tabs-8"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="https://goo.gl/z7EU2L"
				target="_blank">Find Parth on Google Play Store</a>
		</p>
	</div>
	<div id="tabs-9"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[21];?>"
				target="_blank">Show Message</a>
		</p>
	</div>
</div>

<script>
  $( function() {
    $( "#tabs2" ).tabs();
  } );
  </script>
<div id="tabs2"
	style="margin-left: 10%; margin-top: 10%; margin-bottom: 10%; width: 80%; font-family: Trebuchet MS; font-size: 0.9em;">
	<ul>
		<li><a href="#tabs-10">Website Information</a></li>
		<li><a href="#tabs-11">jQuery Slideshow</a></li>
		<li><a href="#tabs-12">SEO & Marketing</a></li>
		<li><a href="#tabs-13">Business Requirement</a></li>

	</ul>
	<div id="tabs-10"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[23];?>"
				target="_blank">Show Information</a>
		</p>
	</div>

	<div id="tabs-11"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[24];?>"
				target="_blank">Show Slideshow</a>
		</p>
	</div>
	<div id="tabs-12"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[25];?>"
				target="_blank">Marketing Strategy</a>
		</p>
	</div>
	<div id="tabs-13"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[26];?>"
				target="_blank">Show Requirement</a>
		</p>
	</div>
</div>


<script>
  $( function() {
    $( "#tabs3" ).tabs();
  } );
  </script>
<div id="tabs3"
	style="margin-left: 10%; margin-top: 10%; margin-bottom: 10%; width: 80%; font-family: Trebuchet MS; font-size: 0.9em;">
	<ul>
		<li><a href="#tabs-14">Marriage Biodata</a></li>
		<li><a href="#tabs-15">Disclaimer & Copyright Notice</a></li>
		<li><a href="#tabs-16">Reference Material</a></li>
		<li><a href="#tabs-17">Google Map</a></li>

	</ul>
	<div id="tabs-14"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[28];?>"
				target="_blank">Show Biodata</a> &nbsp;&nbsp;&nbsp;&nbsp; <a style="color: #436EEE;" href="http://portfolio.test121.net/assets/Uploads/ParthShah - Marriage Biodata 2017.zip"
				target="_blank">Download Now</a>
		</p>
	</div>

	<div id="tabs-15"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[29];?>"
				target="_blank">Show Notice</a>
		</p>
	</div>
	<div id="tabs-16"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[30];?>"
				target="_blank">Show Material</a>
		</p>
	</div>
	<div id="tabs-17"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="<?php echo $lines[31];?>"
				target="_blank">Show Location</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="Color: #436EEE;"	href="<?php echo site_url('portfolio/other_stuff1')?>" target="_blank">Next Page</a>
		</p>
	</div>
</div>

<center></center>

<!-- 
<script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>

<div id="dialog" title="Other Stuff">
	<p>Hello Dear, This is jQuery Dialog Box, Please close this.</p>
</div>

 -->