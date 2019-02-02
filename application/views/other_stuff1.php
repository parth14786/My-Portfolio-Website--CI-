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

<div id="tabs"
	style="margin-left: 10%; margin-top: 10%; margin-bottom: 10%; width: 80%; font-family: Trebuchet MS; font-size: 0.9em;">
	<ul>
		<li><a href="#tabs-1">Marriage & Spirituality</a></li>
		<li><a href="#tabs-2">Social Media & Real Life</a></li>
		<li><a href="#tabs-3">Payment Gateways</a></li>
		<li><a href="#tabs-4">Important Documents</a></li>
		<li><a href="#tabs-5">Important Websites</a></li>

	</ul>

	<div id="tabs-1"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/Marriage & Spirituality.pdf"
				target="_blank">Show me</a>

		</p>
	</div>
	<div id="tabs-2"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/Social Media & Real Life.pdf"
				target="_blank">Show me</a>
		</p>
	</div>

	<div id="tabs-3"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="https://imjo.in/9WvgkW"
				target="_blank">Buy Web_Application</a> &nbsp; &nbsp; &nbsp;
			<a style="color: #436EEE;" href="https://imjo.in/87dVhA"
				target="_blank">Buy Mobile_Application</a> &nbsp; &nbsp; &nbsp;
			<a style="color: #436EEE;" href="https://goo.gl/dvoTZC" target="_blank">PayTM</a> &nbsp; &nbsp; &nbsp;
			<a style="color: #436EEE;" href="#" target="_blank">MobiKwik</a>
		</p>
	</div>

	<div id="tabs-4"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/B.Tech Degree Certificate.pdf"
				target="_blank">B.Tech Degree</a>&nbsp;&nbsp;&nbsp;&nbsp; <a
				style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/ParthShah - Aadhar Card.pdf"
				target="_blank">Aadhar Card</a> &nbsp;&nbsp;&nbsp;&nbsp; <a
				style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/ParthShah - Pan Card.pdf"
				target="_blank">Pan Card</a>
		</p>
	</div>

	<div id="tabs-5"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/Important Websites.pdf"
				target="_blank">Show me</a>
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
		<li><a href="#tabs-6">Responsive Websites</a></li>
		<li><a href="#tabs-7">Listen Music</a></li>
		<li><a href="#tabs-8">Certification</a></li>
		<li><a href="#tabs-9">Storage Space</a></li>
		<li><a href="#tabs-10">Youtube Channel</a></li>

	</ul>
	<div id="tabs-6"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/ParthShah - Responsive Website Templates 2017.pdf"
				target="_blank">Show Me (Responsive Websites)</a>
		</p>
	</div>

	<div id="tabs-7"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="<?php echo site_url('portfolio/Music')?>" target="_blank">Show
				Me (Listen Music)</a>
		</p>
	</div>

	<div id="tabs-8"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;" href="https://goo.gl/3VG9SM"
				target="_blank">HTML5</a> &nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="https://goo.gl/AxZRVz"
				target="_blank">WordPress</a> &nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="http://portfolio.test121.net/assets/Uploads/32316_Parth_Shah_Performance_Report.pdf"
				target="_blank">Android Development</a> &nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="https://www.vskills.in/certification/index.php?route=information/verify&filter_regno=31360"
				target="_blank">PHP</a> &nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="https://goo.gl/8sDe8X"
				target="_blank">Big Data</a> &nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="#"
				target="_blank">Cloud Computing</a> &nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color: #436EEE;" href="#"
				target="_blank">Data Science</a>
		</p>
	</div>

	<div id="tabs-9"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<label style="color: #436EEE;">ZnetLive ==> 1 TB | Microsoft OneDrive ==> 1 TB | External HardDrive ==> 1 TB </label>
		</p>
	</div>

	<div id="tabs-10"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="https://www.youtube.com/channel/UCRYUcNJmkEpTtge2nWP_U-w" target="_blank">Click Here</a>
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
		<li><a href="#tabs-11">Thank You !!!</a></li>

	</ul>
	
	<div id="tabs-11"
		style="background-color: #EDEDED; font-family: Calibri; font-size: 1.1em;">
		<p>
			<a style="color: #436EEE;"
				href="http://portfolio.test121.net/assets/Uploads/ParthShah - ThankYou Note.pdf"
				target="_blank">Show me (Thank you Note)</a>
		</p>
	</div>
</div>
<br>
<br>