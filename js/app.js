$(document).ready(function(){

	/*                 */
	/* FORM VALIDATION */
	/*                 */

	$("#contactForm").validate({
		rules: {
			inputName: {
				required: true,
				minlength: 2
			},
			inputEmail: {
				required: true,
				email: true
			},
			inputMessage: {
				required: true,
				minlength: 50
			}
		},
		messages: {
			inputName: {
				required: "Please enter your name",
				minlength: "Your name seems a bit short doesn't it?"
			},
			inputEmail: {
				required: "Please enter your email address",
				email: "Please enter a valid email address"
			},
			inputMessage: {
				required: "Please enter your message",
				minlength: "Your message seems a bit short doesn't it?"
			}
		}
	});



	/*                        */
	/* HIDE AND SHOW TUTORIAL */
	/*                        */
		
	$('.tut-show-hide-button-1').click(function(){
		$('.tut-show-hide-inline-el').slideToggle();
	});

	$('.tut-show-hide-button-2').click(function(){
		$('.tut-show-hide-inline-el-2').slideToggle();
	});


	/*							*/
	/* COLOR PICKER APPLICATION */
	/*							*/


	$('#schemepicker').change(function(){
		var scheme = $(this).val();
		console.log(scheme);
		if (scheme === "Soft Blue Scheme") {
			$('#base_color').css("background", "#3871F5")
			$('#input_base_color').html("#3871F5")
			$('#secondary_color').css("background", "#3C5BA6")
			$('#input_secondary_color').html("#3C5BA6")
			$('#background_color').css("background", "#C6C8CC")
			$('#input_background_color').html("#C6C8CC")
			$('#font_color').css("background", "#47494D")
			$('#input_font_color').html("#47494D")
			$('#link_color').css("background", "#FAC56B")
			$('#input_link_color').html("#FAC56B")
		} else if (scheme === "Soft Red Scheme") {
			$('#base_color').css("background", "#D13B3B")
			$('#input_base_color').html("#D13B3B")
			$('#secondary_color').css("background", "#B82323")
			$('#input_secondary_color').html("#B82323")
			$('#background_color').css("background", "#C7BBBB")
			$('#input_background_color').html("#C7BBBB")
			$('#font_color').css("background", "#736767")
			$('#input_font_color').html("#736767")
			$('#link_color').css("background", "#479E9C")
			$('#input_link_color').html("#479E9C")
		} else if (scheme === "Soft Green Scheme") {
			$('#base_color').css("background", "#23F77B")
			$('#input_base_color').html("#23F77B")
			$('#secondary_color').css("background", "#05AD48")
			$('#input_secondary_color').html("#05AD48")
			$('#background_color').css("background", "#B1B5B3")
			$('#input_background_color').html("#B1B5B3")
			$('#font_color').css("background", "#3F4542")
			$('#input_font_color').html("#3F4542")
			$('#link_color').css("background", "#BF5C96")
			$('#input_link_color').html("#BF5C96")
		} else if (scheme === "Baby Blue Scheme") {
			$('#base_color').css("background", "#23EDF7")
			$('#input_base_color').html("#23EDF7")
			$('#secondary_color').css("background", "#9CFAFF")
			$('#input_secondary_color').html("#9CFAFF")
			$('#background_color').css("background", "#3D4445")
			$('#input_background_color').html("#3D4445")
			$('#font_color').css("background", "#AEB5B5")
			$('#input_font_color').html("#AEB5B5")
			$('#link_color').css("background", "#BD413A")
			$('#input_link_color').html("#BD413A")
		}
	});

	

});

/*                  */
/* LETTER GENERATOR */
/*                  */

function generate(){
	var letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
	var random_number = Math.floor(Math.random() * 26);
	$("#letter").html(letters[random_number]);
}
