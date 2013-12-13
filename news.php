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
		    $('#news').addClass('active');
		});
	</script>
</head>
<body>
	<div id="all">
		<div id="center">
			<div id="main">
				<?php include("header.html") ?>
				<div id = "content">
					<p>On December 4, we had our officer elections. Congratulations to our new officers!</p>
					<ul>
						<li><span class = "bold">President:</span> Jennifer Shields</li>
						<li><span class = "bold">Vice President:</span> John Behnke</li>
						<li><span class = "bold">Treasurer:</span> Chase Crawford</li>
						<li><span class = "bold">Secretary:</span> Brian Kelley</li>
						<li><span class = "bold">Safety Officer:</span> Matthew Carr</li>
					</ul>
				</div>

			</div>
			<?php include("footer.html") ?>
		</div>
	</div>
</body>
</html>