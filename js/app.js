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