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
<script type='text/javascript'>
  $(document).keydown(function(e){
    e.preventDefault();
  });
</script>
<div class="skills">

	<h3 class="clr2">Latest Videos</h3>
	<div class="skill_info">
		<center>
			<table align="left" width="80%";>
				<script type='text/javascript'>
			  $(document).keydown(function(e){
			    e.preventDefault();
			  });
			</script>
			
				<tr>
					<td>53. What is Stock and Share Market (Hindi) <br><br><iframe width="300" height="250" src="https://www.youtube.com/embed/M8Wk85nPH9M?vq=hd720" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</td>
				</tr>
							
				<tr><td align="left" colspan="2"> <br><br><a style="Color: #696969;"
						href="<?php echo site_url('portfolio/Next_Page5')?>">Next Page</a></td>
				</tr>
			</table>
		</center>
	</div>
	<div class="clearfix"></div>
</div>
