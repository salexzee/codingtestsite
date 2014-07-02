//Coded by: Sam Webb
//A bad ass code wizard

/*
This is my first JS program. I originally learned this from
codecademy.com, but as I progress with my learning of JS, I
will expand upon this code and really make it my own.
*/


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
			 return ("So we had the same choice huh? I guess this is a stalemate my friend. Try again and be ready to loose."); 
		 } 
		 else if (choice1 === "rock"){ 
 			if (choice2 === "lazer"){ 
 				return ("Ouch!!! You broke my lazer!!!"); 
			 } 
 			else { 
				return ("I cover your Rock with my Paper. You're no more. You loose."); 
 			} 
 		} 
 		else if (choice1 === "paper"){ 
 			if (choice2 === "rock"){ 
 				return ("Where'd my Rock go. Damn you and your paper. You win."); 
 			} 
 			else { 
 				return ("I set your Paper on fire with my Lazer. Pew Pew."); 
 			} 
 		} 
 		else if (choice1 === "lazer"){ 
 			if (choice2 === "paper"){ 
 				return ("Aww you picked Lazer and I picked Paper. You win I guess."); 
 			} 
			 else { 
 				return ("Hah, my Rock breaks your Lazer to pieces."); 
 			} 
 		} 
	}; 
alert (compare(userChoice,computerChoice)); 
}