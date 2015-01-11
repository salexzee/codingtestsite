<?php include("../inc/blog-header.php"); ?>

	<section class="container col-xs-10 blog-posts lead">
		<h1>Show and Hide (Tutorial)</h1>

		<?php include("../inc/ads.php"); ?>
		
		<p>In this short tutorial I'm going to show you how to show and hide HTML elements using jQuery. I'm going to assume that you have a basic knowledge of HTML, CSS and Javascript for this lesson. To start off, click the following button to see what I'm going to be teaching you.</p>
		<button class="tut-show-hide-button-1 btn btn-danger tut-button-style">ME ME ME!</button>
		<p class="tut-show-hide-inline-el tut-p-style">This is a very simple thing to accomplish and I will be showing you how to do it with just 3 lines of jQuery. Now click the button again to hide me.</p>
		
		<h4>The HTML</h4>
		<p>To start off this example you'll need 2 HTML elements.You'll <code>button</code> tags and below that, <code>p</code> tags. You'll need to give both elements a class or ID so that you can target them with jQuery. Give your <code>button</code> tag a class of <code>.button-1</code> and give your <code>p</code> tag a class of <code>.activate</code>. Now inbetween the opening and closing <code>b</code> tags put whatever you want your button to say. Go ahead and do the same with your <code>p</code> tags. That's it, you're done with the HTML portion.</p>
		
		<h4>A bit of CSS</h4>
		<p>In this section I'm not going to go over how you want to style this. That's up to you. So go ahead and style up your <code>button</code> and <code>p</code>, I'll wait....... Now that your elements have been styled, go to where you targeted <code>.activate</code> and give it the property <code>display: none;</code>. This will initially hide the paragraph text so that we can use our button to reveal it later. And that's pretty much it with CSS. See how easy this has been so far. Next up, we get into the jQuery that you'll be needing.</p>

		
		<h4>Finally, the jQuery</h4>
		<p>We've made it. It's time for the jQuery. Before you can do anything with jQuery though, you'll need to link it into your website. For information on how to do this, go to the jQuery page and navigate to the download page (<a href="http://jquery.com/download/">LINK HERE</a>). Once you've decided on how you're going to link jQuery to your page, below that you'll need to make opening and closing <code>script</code> tags.</p>
		
		<p>What we're going to need to do to accomplish our task is:</p>
		<ol>
			<li>Target the button</li>
			<li>Capture the <code>click()</code> event</li>
			<li>Make the click event target the paragraph and activate the slide event</li>
		</ol>
		
		<p>So let's get started. In between your <code>script</code> tags type <code>$()</code>. The dollar sign is how you select an element using jQuery. The element we want to target is our <code>b</code> with the class <code>.button-1</code> so between the perenthesis, in single or double quotation marks type the class name. Your code should look like this so far <code>$('.button-1')</code>. Something cool you can do with jQuery is chain operations together. So now that we've targeted the button, we want to chain a <code>click()</code> event onto it. To do this we use a period and add the code we want to perform onto the end. Let me show you what I mean. This is how we'll add the <code>click()</code> event to the back of the selection:</p>
		<p><code>$('.button-1').click();</code></p>
		<p>Now with that <code>click()</code> event we want to do something right? Well le't do it. Inside the perenthesis we need to make an anonymous <code>function</code>. This is where that little bit of Javascript knowledge will help, but you'll still be able to do this even with no Javascript knowledge. The syntax for the function is: <code>function(){}</code></p> Put that inside the <code>click()</code> event and space out the curly braces how you normally would for a function. It should look like this:
		<pre><code>$('.button-1').click(function(){
		
});</code></pre>

<p>Look at that, we've already completed the 1st and 3rd lines of this program. We're almost there. Now we have to figure out what to do with this function. So remember back at #3 we said, "Make the click event target the paragraph..." Let's do that part first. So we've already learned how to target an HTML element using jQuery. So try to select the paragraph using it's class. Do this inside the function. Once you're done, click the button below to check your code.</p>

		<button class="tut-show-hide-button-2 btn btn-danger tut-button-style">Show Code</button>
		<p class="tut-show-hide-inline-el-2 tut-p-style"><code>
	$('.activate')</code></p>
	
	<p>Now all we have to do is add an event to the newly selected element. So again, we use a period. There are technically 2 events attached to this element. The <code>slideUp()</code> and <code>slideDown()</code> events. We could use both of those, but there's a better way. There's also an event called <code>slideToggle()</code>, which, you guessed it, toggles between the two slide events. Add that to the end of your second line and you're done. You've made a button that can toggle in and out an element. Your finished jQuery should look like this:</p>
	<pre><code>$('.button-1').click(function(){
	$('.activate').slideToggle();
});</code></pre>

	<h4>Congratulations!!!</h4>
	<p>You've made a button that can show and hide other elements. You don't have to stick to hiding paragraphs, you can use this with images, multiple paragraphs or entire sections of your webpage. Have fun and experiment. Cheers.</p>
	
	<?php include_once("../inc/comments.php"); ?>

	</section>

	
<?php include("../inc/blog-footer.php"); ?>