<?php
	function __autoload($class) {
		require_once $class . '.php';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<div class="random-class">
		<h1>
		<?php
			$element =  "HERE is some LARGE text";
			$alter = new Text($element);
			$alter->color_start("blue");
		?>
		</h1>
		<?php
			$element = "Here is different text";
			$alter = new Text($element);
			$alter->size("300px");
		?>
	</div>
</body>
</html>
