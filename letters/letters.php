<?php include("../inc/config.php"); ?>
<?php
$colors = "on";
include(ROOT_PATH . "inc/header.php");
?>

<main class="colors">

	<section>

		<h1>Random Letter Generator</h1>
		<p>A random letter generator... For generating random letters.</p>

	</section>

		<button onclick="generate()">Generate</button>
		<p id="letter"></p>

	<section>


	</section>
</main>

<?php include(ROOT_PATH . "inc/footer.php"); ?>