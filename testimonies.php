<!doctype html>
<html lang="en">
<head>
	<?php include 'assets/head.php' ?>
	<title>Galactic Servers - Testimonies</title>
</head>
<body>
	<div class="page-wrap">
		<?php include 'assets/navigation.php' ?>
		<div id="slider">
			<div class="container">
				<h1>Testimonies</h1>
			</div>
		</div>
		<div class="container">
			<div class="getkudos-inline" data-site-name="GalacticServers" data-layout="inline"></div>
			<script>
			(function(w,t,gk,d,s,fs){if(w[gk])return;d=w.document;w[gk]=function(){
			(w[gk]._=w[gk]._||[]).push(arguments)};s=d.createElement(t);s.async=!0;
			s.src='//static.getkudos.me/widget.js';fs=d.getElementsByTagName(t)[0];
			fs.parentNode.insertBefore(s,fs)})(window,'script','getkudos');

			getkudos('parse');
			</script>
			
			<h1>Ready to begin?</h1>
			{{> servicebtns }}
		</div>
	</div>
	<?php include 'assets/footer.php' ?>
</body>
</html>