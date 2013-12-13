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
		    $('#home').addClass('active');
		});
	</script>
	<!-- 
	This is the index for the site. It is what most people will see. If you mess up anything, don't make it this page.
	-->
</head>
<body>
	<div id="all">
		<div id="center">
			<div id="main">
				<?php include("header.html") ?>
				<div id = "content">
					<p>Welcome to the website of the Rensselaer Rocket Society!</p>

					<p>We are premier rocket club on campus at Rensselaer Polytechnic Institute. 
					Our team consists of students with majors ranging from Computer Science to 
					Aeronautical Engineering who are passionate about rocketry. Our club was founded 
					is the spring of 2011 to compete in the 2012 NASA University Student Launch Initiative 
					Competition. The challenge for this event was to develop and build a high powered rocket 
					that would reach as close to one mile as possible and would carry a scientific payload. 
					We currently have two high power rockets under construction, one of which will be flying 
					at the 2014 NASA USLI Competition.</p> 
					
					<p>Meetings are held every Monday and Wednesday on the 4th Floor of the Ricketts Building from 7 pm to 9 pm.</p>

				</div>

			</div>
			<?php include("footer.html") ?>
		</div>
	</div>
</body>
</html>