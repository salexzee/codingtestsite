<?php include("../inc/config.php"); ?>
<?php
$colors = "on";
include(ROOT_PATH . "inc/header.php");
?>

<main class="colors">
	<section>
		<h1>Welcome to My Color Picker</h1>
		<p>Fill in a hex value for your preferred color and you'll get a return of 4 more colors to compliment it.</p>
		<p>Once value is filled out, deselect the text box to get your colors.</p>
	</section>
	<section>
		<input type="text" name="cp" id="cp">
		<div id="all-colors">
			<div id="base-color" class="each-color">
				<p></p>
			</div>
		</div>
	</section>
</main>

<?php include(ROOT_PATH . "inc/footer.php"); ?>