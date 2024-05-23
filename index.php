<?php

$modules = [
	// 'navigation',
	'color-guide',
	'misc-guide',
	'spacing-guide',
	'ui-elements-guide',
	// 'forms-guide',
	// 'typography-guide',
	// 'typography-voices'
];

function showErrors()
{
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
showErrors();

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
				<h1 class="booming-voice">Style Guide</h1>
				<p>
					These are the design tokens used to create the visual design of this site.
				</p>
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