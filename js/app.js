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

	var colors = ['#000000', '#ff0000', '#00ff00', '#0000ff', '#ffffff'];

	function getColor(value, colors){
		for (color of colors) {
			if (color === value) {
				return color;
			} else {
				$('input#cp').css("border: 1px solid red;");
			}
		}
	}

	$('#cp').focusout(function(){
		var value = $(this).val();
		var basecolor = getColor(value, colors);
		console.log(basecolor);
		if (basecolor) {
			$('#base-color').css("background", basecolor );
		}
	});



});
