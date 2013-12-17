<!DOCTYPE html>
<html>
<head>
	<title>Rensselaer Rocket Society</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="assets/css/all.css">
	<script type="text/javascript" src = "assets/js/jquery.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-45933645-1', 'rpi.edu');
		ga('send', 'pageview');

		$(document).ready(function(){
		    $('#template').addClass('active');
		});
	</script>

	<!-- 
	This is the template for any given page. The main difference will be in the "content" div.
	Please remove this comment (Or change it) if you copy it to make a new page.
	In order to make a new page, just save this file with another name, make any changes to the page necessary, add it to the header, 
	change the ready() function above, and recalculate the percentage each link will take.
	
	For example: As of writing this, there are 7 pages. Width is done by percentage of 900. Therefore, each link will take up  100/7 = 14.28% adjusted down to 14. Why 14? It looked good and I didn't feel like fiddling with it more.
	Adding one link will change this to 100/8 = 12.5 adjusted down to 12.3. For each link added, there will need to be a little adjustment due to the nature of the borders.
	Pretty much just mess with it until it looks right.

	Also, don't add an <a> tag at the end of the content div outside of a <p> tag. Browsers don't like that apparently.
	-->

</head>
<body>
	<div id="all">
		<div id="center">
			<div id="main">
				<?php include("header.html") ?>
				<div id = "content">
					<p>Our club was founded in the Spring of 2011 to compete in the 2012 NASA University Student Launch Initiative Competition.  
						The challenge for this event was to develop and build a high powered rocket that would reach as close to one mile as possible 
						and would carry a scientific payload.  Our 2012 Rocket was over 8 feet tall and could carry a payload that included a GPS, 
						an accelerometer, a camera and a set of dynamically adjusted drag flaps to accurately reach the required 5280 ft.  
						This year the Rensselaer Rocket Society is competing in the  Intercollegiate Rocket Engineering Competition (IREC).  
						This Competition involves launching a 10 lb  scientific payload to 10,000 ft.</p>

						<p>Meetings are held every Monday and Wednesday on the 4th Floor of the Ricketts Building from 7 pm to 9 pm.  For more information please email rrs@union.rpi.edu</p>
					</div>
				</div>
				<?php include("footer.html") ?>
			</div>
		</div>
	</body>
	</html>