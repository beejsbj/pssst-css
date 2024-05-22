<style>
	ul.colors {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));

		@media (min-width: 768px) {
			grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
		}
	}

	div.pallete {
		width: 100%;
		height: 100px;
		border-radius: var(--corners);
		margin-bottom: var(--space-2xs);
		/* text-align: center; */
	}
</style>


<?php

$colorGroups = [
	[
		"heading" => "Base Colors",

		"colors" => [
			[
				"name" => "Paper",
				"variable" => "--paper",
			],
			[
				"name" => "Ink",
				"variable" => "--ink",
			],
		]
	],
	[

		"heading" => "Grays",
		"colors" => [
			[
				"name" => "Gray Lighter",
				"variable" => "--gray-lighter",
			],
			[
				"name" => "Gray Light",
				"variable" => "--gray-light",
			],
			[
				"name" => "Gray",
				"variable" => "--gray",
			],
			[
				"name" => "Gray Dark",
				"variable" => "--gray-dark",
			],
			[
				"name" => "Gray Darker",
				"variable" => "--gray-darker",
			],
		]
	],

	[
		"heading" => "Primary Color",
		"colors" => [
			[
				"name" => "Primary Lightest",
				"variable" => "--color-lightest",
			],
			[
				"name" => "Primary Lighter",
				"variable" => "--color-lighter",
			],
			[
				"name" => "Primary Light",
				"variable" => "--color-light",
			],
			[
				"name" => "Primary",
				"variable" => "--color",
			],
			[
				"name" => "Primary Dark",
				"variable" => "--color-dark",
			],
			[
				"name" => "Primary Darker",
				"variable" => "--color-darker",
			],
			[
				"name" => "Primary Darkest",
				"variable" => "--color-darkest",
			],
		]
	],

	[
		"heading" => "Secondary Color",
		"colors" => [
			[
				"name" => "Secondary Lightest",
				"variable" => "--highlight-lightest",
			],
			[
				"name" => "Secondary Lighter",
				"variable" => "--highlight-lighter",
			],
			[
				"name" => "Secondary Light",
				"variable" => "--highlight-light",
			],
			[
				"name" => "Secondary",
				"variable" => "--highlight",
			],
			[
				"name" => "Secondary Dark",
				"variable" => "--highlight-dark",
			],
			[
				"name" => "Secondary Darker",
				"variable" => "--highlight-darker",
			],
			[
				"name" => "Secondary Darkest",
				"variable" => "--highlight-darkest",
			],
		]
	],
	[
		"heading" => "Tertiary Color",
		"colors" => [
			[
				"name" => "Tertiary Lightest",
				"variable" => "--accent-lightest",
			],
			[
				"name" => "Tertiary Lighter",
				"variable" => "--accent-lighter",
			],
			[
				"name" => "Tertiary Light",
				"variable" => "--accent-light",
			],
			[
				"name" => "Tertiary",
				"variable" => "--accent",
			],
			[
				"name" => "Tertiary Dark",
				"variable" => "--accent-dark",
			],
			[
				"name" => "Tertiary Darker",
				"variable" => "--accent-darker",
			],
			[
				"name" => "Tertiary Darkest",
				"variable" => "--accent-darkest",
			],
		]
	],

	[
		"heading" => "Semantic Colors",
		"colors" => [
			[
				"name" => "Success",
				"variable" => "--success",
			],
			[
				"name" => "Warning",
				"variable" => "--warning",
			],
			[
				"name" => "Error",
				"variable" => "--error",
			],
			[
				"name" => "Info",
				"variable" => "--info",
			]
		]
	],
	[
		"heading" => "Gradients",
		"colors" => [
			[
				"name" => "Gradient Dark",
				"variable" => "--gradient-dark",
			],
			[
				"name" => "Gradient Light",
				"variable" => "--gradient-light",
			],
			[
				"name" => "Gradient Color",
				"variable" => "--gradient-color",
			],
		]
	],

];
?>


<div class="color-guide">
	<h2 class="attention-voice">Colors</h2>
	<p>
		These are the colors used in the app. They are defined in
		<code>settings.css</code> and are available as CSS variables which are
		used throughout the app.
	</p>

	<ul class="color-groups">
		<?php foreach ($colorGroups as $colorGroup) { ?>
			<li>
				<h3>
					<?= $colorGroup['heading'] ?>
				</h3>
				<ul class="colors">
					<?php foreach ($colorGroup['colors'] as $color) { ?>
						<li>
							<div class="pallete" style="background: var(<?= $color['variable']; ?>)">
							</div>
							<p class="color-name">
								<code><?= $color['variable']; ?></code>
							</p>
						</li>
					<?php } ?>
				</ul>
			</li>
		<?php } ?>
	</ul>
</div>