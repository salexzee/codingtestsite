<?php include("inc/header.php"); ?>
		
		<section class="mainBody">
			<h2>Rock Paper Lazer</h2>
			<form>
				<p>To take your turn at playing Rock Paper Lazer, click the PLAY!!! button.</p>
				<button type="button" onclick="button()">PLAY!!!</button>
			</form>
			<h4>Rules:</h4>
			<p>The rules to this game are pretty simple. Have you ever played Rock Paper Scissors? Well,
			this is pretty much the same game. When you get the prompt, you type in either Rock, Paper or
			Lazer. Then, the computer will make a choice, and you will be prompted with the winner.<br>
			Rock beats Lazer<br>
			Lazer beats Paper<br>
			Paper beats Rock<br>
			Sounds, simple enough right? Go ahead and try it out.
			</p>
			<p>At this point, make sure you use <strong><em>lowercase</em></strong> letters for your answers. Soon, I will be updating
			this game to add extra features and make it more user friendly. For now, just except the bare bones
			version. Also, below, there is a copy of the current JS code for the game. Everytime I update the
			game, I will also update the code so you can see exactly what I am doing.</p>



<! ---------------------------------
-----------------------------------
VISIBLE JAVASCRIPT CODE STARTS HERE
-----------------------------------
---------------------------------- >			
			<div class="jscode">	
				<pre><code>
var button = function () {
	var userChoice = prompt("Do you choose rock, paper or lazer?"); 
	var computerChoice = Math.random(); 
	if (computerChoice < 0.34) { 
		computerChoice = "rock"; 
	} else if(computerChoice <= 0.67) { 
		computerChoice = "paper"; 
	} else { 
		computerChoice = "lazer"; 
	} 
	var compare = function(choice1, choice2){ 
		if (choice1 === choice2){ 
			 return ("The result is a tie!"); 
		 } 
		 else if (choice1 === "rock"){ 
			if (choice2 === "lazer"){ 
				return ("rock wins"); 
			 } 
			else { 
				return ("paper wins"); 
			} 
		} 
		else if (choice1 === "paper"){ 
 			if (choice2 === "rock"){ 
 				return ("paper wins"); 
 			} 
 			else { 
 				return ("lazer wins"); 
 			} 
 		} 
 		else if (choice1 === "lazer"){ 
 			if (choice2 === "paper"){ 
 				return ("lazer wins"); 
 			} 
			 else { 
	 			return ("rock wins"); 
	 		} 
 		} 
	}; 
alert (compare(userChoice,computerChoice)); 
}
				</code></pre>
			</div>
<! ---------------------------------
-----------------------------------
VISIBLE JAVASCRIPT CODE ENDS HERE
-----------------------------------
---------------------------------- >	

</section>		
			


<?php include("inc/footer.php"); ?>