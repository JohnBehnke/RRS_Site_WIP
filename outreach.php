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
		    $('#out').addClass('active');
		});

	</script>
</head>
<body>
	<div id="all">
		<div id="center">
			<div id="main">
				<?php include("header.html") ?>
				<div id = "content">
					<p>The Rensselaer Rocket Society firmly believes that it is the responsibility of college level engineering teams to be involved with the community. Every year we hold multiple outreach events to help get local kids excited about rocketry and science. Past Events have included soda bottle rocket launches and egg drop challenges with Girl Scout troops in the area.</p>

					<p>If you would like to contact us about setting up an outreach event, please email <a href="mailto:rrs@union.rpi.edu">rrs@union.rpi.edu</a>.</p>
				</div>

			</div>
			<?php include("footer.html") ?>
		</div>
	</div>
</body>
</html>