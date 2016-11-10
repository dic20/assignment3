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
		<div class="container">
			<div class="random-class">
				<div class="random-class-part2">
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
						$alter->size("120px");
					?>
				</div>
			</div>
			<div class="next-part">
				<div id="bottomContent">
					<h1 class="interesting-content">
					<?php
						$element =  "This is a good place to put some interesting content";
						$alter = new Text($element);
						$alter->color_start("white");
					?>
					</h1>
					<p class="interesting-content smaller-text">
						This would be a place to put less interesting content such as a cool <br /><a href="#more">link to more information.</a>
					</p>
				</div>
				<?php
					$htmlChanger = new Alteration(null, null);
					$htmlChanger->add_more_content('<h1 style="text-align:center;">Content Here could be interesting</h1>', 'html-adder-format');
				?>
				<p style="text-align: center;">
					<button onclick="display()">click here for more</button>
				</p>
			</div>
		</div>
		<script>
			function display() {
				document.getElementsByClassName('html-adder-format')['0'].style.display='block';
			}
		</script>
	</body>
</html>
