<!doctype html>
<html lang="en">
<head>
	<?php include 'assets/head.php' ?>
	<title>Galactic Servers - Web Hosting</title>
</head>
<body>
	<div class="page-wrap">
		<?php include 'assets/navigation.php' ?>
		<div id="slider">
			<div class="container">
				<h1>Web Hosting</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 featbox">
					<i class="fa fa-thumbs-up"></i>
					<h3>Complete Satisfaction</h3>
					<p>We provide customization of any hardware to bring you complete satisfaction over how you want to run your server. If you are interested in a dedicated server then please contact one of our support team.</p>
				</div>
				<div class="col-md-4 featbox">
					<i class="fa fa-heart"></i>
					<h3>Free Setup</h3>
					<p>We don’t charge set up fee on our dedicated servers and your billing only starts once your server is set up so you don’t waste your precious money. Multicraft panel installation is free of charge - just choose that add on in the billing section.</p>
				</div>
				<div class="col-md-4 featbox">
					<i class="fa fa-info"></i>
					<h3>Great Support</h3>
					<p>Our dedicated team provides around the clock support on all of our managed services to ensure your machines stay up and running successfully. Through email, Skype support and ticket submission there has never been an easier way to get in contact with a support team you can trust.</p>
				</div>
			</div>
			<br>
			<div class="row text-center">
				<table class="plan-table">
					{{#web}}
					<tr class="{{ style }}">
						<th>{{ name }}</th>
					{{#features}}
						<td>{{ feature }}</td>
					{{/features}}
						<td>
							<a href="http://my.galacticservers.com/cart.php?gid=3" class="btn btn-primary btn-block btn-lg">Order Now for {{price}}</a>
						</td>
					</tr>
					{{/web}}
				</table>
			</div>

			<h1>Addons</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="mission">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet diam ac ante euismod, sit amet sollicitudin enim convallis. Sed nulla justo, pharetra at urna quis, mollis elementum enim.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mission">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet diam ac ante euismod, sit amet sollicitudin enim convallis. Sed nulla justo, pharetra at urna quis, mollis elementum enim.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mission">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam imperdiet diam ac ante euismod, sit amet sollicitudin enim convallis. Sed nulla justo, pharetra at urna quis, mollis elementum enim.</p>
					</div>
				</div>
			</div>

			<div class="row bannerbtn">
				<div class="col-md-6">Need something <i>more flexible?</i></div>
				<a href="//galacticservers.com/vps" class="col-md-6">Check out our VPS's</a>
			</div>
		</div>
	</div>
	<?php include 'assets/footer.php' ?>
</body>
</html>
