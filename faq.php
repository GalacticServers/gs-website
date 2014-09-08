
<?php
	$faq = array(
		array(
			'slug' => 'who-are-you',
			'q' => 'Who are you?',
			'a' => 'Galactic Servers is a *soon to be* fully registered Ltd firm which was set up to break into the hosting market for affordable hosting with quality services. With a growing group of dedicated staff our team is determined to help bring the best support available with affordable pricing to everyone.<br>
				Whilst setting up and continuing to explain, Galactic Servers will continue to provide a quality services to its loyal member with the community in mind. Providing hosting solutions is our main service but we also accompanying for many other services which you can find through our site.',
		),
		array(
			'slug' => 'mission',
			'q' => 'What is your mission goal?',
			'a' => 'We are a dedicated hosting company directed and motivated to providing our clients with the best possible services without restrictions for the lowest price possible. We don\'t believe in hidden costs or charge premium for services. Our mission goal is to provide the world with affordable hosting.',
		),
		array(
			'slug' => 'share-galactic',
			'q' => 'Can I tell my friends about you?',
			'a' => 'Sure, we have <a href="/testimonies">testimonies page</a> where all recommendation are place so you could get your own tweet on our site, but feel more then welcome to tell anyone about us. In fact if you are an existing member you can get 10% of what your friend pays by signing up to our <a href="affiliation.html">Affiliation program</a> and giving them the referral link.',
		),
		array(
			'slug' => 'logos',
			'q' => 'Do you have any logos I can use?',
			'a' => 'Of course, simply <a href="https://galacticservers.com/clients/logos/">click here</a> to view our media display.',
		),
	)
?>
<!doctype html>
<html lang="en">
<head>
	<?php include 'assets/head.php' ?>
	<title>Galactic Servers - FAQ</title>
</head>
<body>
	<div class="page-wrap">
		<?php include 'assets/navigation.php' ?>
		<div id="slider">
			<div class="container">
				<h1>FAQ</h1>
			</div>
		</div>

		<div class="container" id="faq">
			<ol>
				<?php
					// Forloop to echo array
					for ($row2 = 0; $row2 < 4; $row2++) {
						echo "<li><a href='#" . $faq[$row2]["slug"] . "'>" . $faq[$row2]["q"] . "</a></li>";
					}
				?>
			</ol>

			<?php
				// Forloop to echo array
				for ($row = 0; $row < 4; $row++) {
					echo "<a id=" . $faq[$row]["slug"] . " href='#slider' class='uparrowbar'></a>";
					echo "<a name='#" . $faq[$row]["slug"] . "'></a>";
					echo "<table style='margin-top:20px'>";
					echo "<tr>";
					echo "<td class='title'>Q:</td>";
					echo "<td class='question'>" . $faq[$row]["q"] . "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td class='title'>A:</td>";
					echo "<td>" . $faq[$row]["a"] . "</td>";
					echo "</tr>";
					echo "</table>";
				}
			?>

		</div>
	</div>
	<?php include 'assets/footer.php' ?>
</body>
</html>