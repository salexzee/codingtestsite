<?php include("inc/header.php"); ?>

			<main class="container firstPara">
				<p class="lead">If you'd like to contact me, please send me an email. Alternatively, you can find me on Twitter or GitHub.</p>


				<form role="form">
					<div class="form-group">
						<label for="inputName">Name</label>
						<input type="email" class="form-control" id="inputName" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
						<textarea type="textarea" class="form-control" id="inputMessage" placeholder="Enter message..."></textarea>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>

			</main>

<?php include("inc/footer.php"); ?>