<?php
 array(
	'plans' => array(
		array('name' => 'Mercury', 'size' => '256MB', 'price' => '1.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=5'),
		array('name' => 'Venus', 'size' => '512MB', 'price' => '3.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=4'),
		array('name' => 'Earth', 'size' => '765MB', 'price' => '5.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=6'),
		array('name' => 'Mars', 'size' => '1GB', 'price' => '7.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=2'),
		array('name' => 'Jupiter', 'size' => '1.5GB', 'price' => '11.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=7'),
		array('name' => 'Saturn', 'size' => '2.0GB', 'price' => '15.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=8'),
		array('name' => 'Uranus', 'size' => '2.5GB', 'price' => '19.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=9'),
		array('name' => 'Neptune', 'size' => '3.0GB', 'price' => '23.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=10'),
		array('name' => 'Lunar', 'size' => '3.5GB', 'price' => '27.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=11'),
		array('name' => 'Nebula', 'size' => '4.0GB', 'price' => '31.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=12'),
		array('name' => 'Nova', 'size' => '4.5GB', 'price' => '34.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=3'),
		array('name' => 'Supernova', 'size' => '5.0GB', 'price' => '39.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=13'),
		array('name' => 'Galactic', 'size' => '5.5GB', 'price' => '44.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=14'),
		array('name' => 'Universal', 'size' => '6.0GB', 'price' => '47.99', 'url' => 'https://my.galacticservers.com/cart.php?a=add&pid=15')
	)
);
?>

<!doctype html>
<html lang="en">
<head>
	<?php include 'assets/head.php' ?>
	<title>Galactic Servers - Minecraft Servers</title>
</head>
<body>
	<div class="page-wrap">
		<?php include 'assets/navigation.php' ?>
		<div id="slider">
			<div class="container">
				<h1>Minecraft Server Hosting</h1>
			</div>
		</div>
		<div id="iconbar">
			<div class="container">
				<div class="icon" style="background-image:url('img/icon10.png')"></div>
				<div class="icon" style="background-image:url('img/icon8.png')"></div>
				<div class="icon" style="background-image:url('img/icon9.png')"></div>
				<div class="icon" style="background-image:url('img/icon6.png')"></div>
				<div class="icon" style="background-image:url('img/icon7.png')"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-flag"></i>
					<h3>Hosting Without Limits</h3>
					<p>We don’t restrict files access so you have the freedom to do what you want.</p>
				</div>
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-puzzle-piece"></i>
					<h3>Play How You Want</h3>
					<p>Upload unlimited jars allowing you freedom to choose how you play.</p>
				</div>
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-info"></i>
					<h3>Great Support</h3>
					<p>Dedicated support to get you started and stay online.</p>
				</div>
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-clock-o"></i>
					<h3>Don't Wait</h3>
					<p>Instant set up on custom Multicraft panel and unlimited players.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-flash"></i>
					<h3>Speed of Light</h3>
					<p>We run on the latest E3 processors bring power to your server.</p>
				</div>
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-hdd-o"></i>
					<h3>Solid Service</h3>
					<p>All of our services come with state-of-the-art SDD Drives as standard.</p>
				</div>
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-road"></i>
					<h3>Unlimted Players and Plugins</h3>
					<p>With a one click installation of over 13,000 Bukkit plugins hosting a server has never been so easy.</p>
				</div>
				<div class="col-md-3 featbox featbox-small">
					<i class="fa fa-keyboard-o"></i>
					<h3>Multicraft</h3>
					<p>We use the most easy to use and powerful custom Multicraft panel.</p>
				</div>
			</div>
			<br>
			<div class="row text-center">
				{{#plans}}
					<div class="col-md-3">
						<a class="plan" href="{{url}}">
							<div class="thumb" style="background-image:url('img/plan/{{name}}.jpg')">
								{{name}}
							</div>
							<span>{{size}}</span>
							<b>${{price}}</b>
						</a>
					</div>
				{{/plans}}
			</div>
			<div class="row bannerbtn">
				<div class="col-md-6">Need something <i>bigger?</i></div>
				<a href="//galacticservers.com/dedicated-servers" class="col-md-6">Check out our Dedicated Servers</a>
			</div>
			<table class="btntable">
				<tr>
					<td>
						Want to get your server for free or start making money with us? Join our affiliate team!
						<a href="//galacticservers.com/affiliation">Affiliation Team</a>
					</td>
					<td>
						Looking to have a professional site hosted by us for great prices? Get 30% off web hosting at checkout with any Minecraft.
						<a href="//my.galacticservers.com/cart.php?gid=2">Web Hosting</a>
					</td>
				</tr>
				<tr>
					<td>
						Get a your own wordpress site coded to look professional for 30% off with a server from us.
						<a href="#">View Pricing</a>
					</td>
					<td>
						Want 45 day premium Enjin membership? Then at checkout click the addon for free and 30% off your own Enjin designed site!
						<a href="#">View Pricing</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<?php include 'assets/footer.php' ?>
</body>
</html>
