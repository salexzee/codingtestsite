<?php include("../inc/config.php"); ?>
<?php
$colors = "on";
include(ROOT_PATH . "inc/header.php");
?>

<main class="colors">

	<section>

		<h1>Welcome to My Color Pallette Picker</h1>
		<p>Pick a color scheme and you'll get 5 colors that compliment each other for your next project.</p>

	</section>

	<section>

		<select name="cp" id="schemepicker">
			<option></option>

			<?php include(ROOT_PATH . "colors/options.php"); ?>

			<?php foreach($options as $option) { ?>

				<option><?php echo $option->name; ?></option>

			<?php } ?>

		</select>

		<div id="all_colors">
			<div id="base_color" class="each_color">
				<p><span id="input_base_color">#FFFFFF</span></p>
			</div>
			<div id="secondary_color" class="each_color">
				<p><span id="input_secondary_color">#999999</span></p>
			</div>
			<div id="background_color" class="each_color">
				<p><span id="input_background_color">#CCCCCC</span></p>
			</div>
			<div id="font_color" class="each_color">
				<p><span id="input_font_color">#333333</span></p>
			</div>
			<div id="link_color" class="each_color">
				<p><span id="input_link_color">#445591</span></p>
			</div>
		</div>



	</section>
</main>

<?php include(ROOT_PATH . "inc/footer.php"); ?>