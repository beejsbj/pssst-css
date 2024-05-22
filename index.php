<?php

$modules = [
	// 'navigation',
	'color-guide',
	// 'backgrounds-textures-guide',
	// 'ui-elements-guide',
	// 'forms-guide',
	// 'typography-guide',
	// 'typography-voices'
]
?>






<!DOCTYPE html>

<html lang="en" class="special-magic no-js">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>Style Guide</title>
	<meta name="description" content="This contains design tokens that are used to create the visual design of the site. #todo" />
	<meta property="og:image" content="$todo" />

	<link rel="stylesheet" href="styles/site.css" />
</head>

<body>
	<header>
		<inner-column>
			<!-- <h1 class="site-title">Style Guide</h1> -->
		</inner-column>
	</header>

	<main>
		<section>
			<inner-column>
				<h1 class="loud-voice">Header</h1>
			</inner-column>
		</section>

		<?php foreach ($modules as $module) { ?>
			<section>
				<inner-column>
					<?php include "modules/$module.php"; ?>
				</inner-column>
			</section>
		<?php } ?>

	</main>

	<footer>
		<inner-column>
			<h1 class="loud-voice">Footer</h1>
		</inner-column>
	</footer>
</body>

</html>