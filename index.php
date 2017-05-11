<!DOCTYPE html>
<html>
<head>
	<title>Example Site</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Roboto', sans-serif;
			padding: 40px;
		}

		h1 {
			color: #e67e22;
		}

		/* CSS class. Classes can be resused on multiple elements. */
		.box {
			border: 5px solid pink;
			margin: 10px;
			text-align: center;
			height: 90px;
			width: 90px;
		}

		/*	CSS ID. IDs can only be used on one element. */
		#box1 {
			background-color: #27ae60;
		}

		#box2 {
			background-color: #2980b9;
		}
	</style>
</head>
<body>

	<div class="section">
		<h1>Welcome!</h1>
		<p>Custom website development with WordPress.</p>
		<p>This is an example file that demonstrates the basics of HTML, CSS, and PHP.</p>
	</div>

	<div class="section">
		<h2>CSS and HTML Examples</h2>

		<div class="box" id="box1">
			Box 1
		</div>

		<div class="box" id="box2">
			Box 2
		</div>

	</div>

	<div class="section">
		<h2>PHP Examples</h2>

		<!-- $name is what's called a PHP "variable" - a placeholder to be filled in later. -->
		<?php $name = "Charlie"; ?>
		<p>Hello! My name is <?php echo $name; ?></p>

		<!-- $sum is also a variable - we're giving it the value of 2 + 2, which PHP will add for us. -->
		<?php $sum = 2 + 2; ?>
		<p>What is the sum of 2 + 2? It's <?php echo $sum; ?></p>

	</div>

</body>
</html>