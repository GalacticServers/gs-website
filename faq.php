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
				{{#faq}}<li><a href="#{{slug}}">{{q}}</a></li>{{/faq}}
			</ol>
			{{#faq}}
			<a href="#slider" class="uparrowbar"></a>
			<a name="{{slug}}"></a>
			<table>
				<tr>
					<td class="title">Q:</td>
					<td class="question">{{q}}</td>
				</tr>
				<tr>
					<td class="title">A:</td>
					<td>{{{a}}}</td>
				</tr>
			</table>
			{{/faq}}
		</div>
	</div>
	<?php include 'assets/footer.php' ?>
</body>
</html>