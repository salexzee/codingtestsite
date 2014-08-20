<?php include("../inc/blog-header.php"); ?>

<section class="container col-xs-10 blog-posts">

	<h1>Custom CSS Buttons</h1>

	<p>There are times that you just want a small button on your website that clearly states why you want a person to click on it. In these instances the default <code>button</code> works. I'm currently using Bootstrap for my website so this is how their default buttons look:</p>

	<form>
		<input type="submit">
	</form>

	<p>This accomplishes everything you need, but what if you wanted your button to look like it was turned off and when you hovered over it, you were turning it on. Like this:</p>

	<form>
		<input type="submit" id="tut-rectangle-button">
	</form>

	<p>Or how about a perfect circle button with a drop shadow that makes it look like a 3D button. Like this:</p>

	<form>
		<input type="submit" id="tut-circle-button">
	</form>

	<p>Well you're in luck. Today I'm going to give you a short lesson on easily customizing your buttons.</p>

	<p>To start, let's look at the HTML code to create a button:</p>
	
	<pre>
&lt;form&gt;
	&lt;input type="submit"&gt;
&lt;/form&gt;
	</pre>

<p>There are a few other things I would want to add if I were actually making a button, but for now this will do. I just want you to get the visual of a button and maybe we'll focus on functionality in a different post.</p>

<p>Now that you have your button we want to give it a <code>class</code> of <code>button-1</code>. That's it. We're done with our HTML. Now let's move on to our CSS. This is where the magic happens. Your HTML should look like this:

	<pre>
&lt;form&gt;
	&lt;input type="submit" class="button-1"&gt;
&lt;/form&gt;
	</pre>
	
	<p>For our CSS I'm going to assume you have a basic knowledge of the syntax. For starters, what we're going to do is grab the <code>.button-1</code> class and give it a background color of <code>#424587</code>, font color of <code>#f0f0f8</code>, width of <code>100px</code> and height of <code>40px</code>. Also, let's give it a border just for it to stand out a little more. Your code should look like this so far:</p>
	
<pre>
.button-1{
	background-color: #424587;
	color: #f0f0f8;
	width: 100px;
	height: 40px;
	border: 1px solid black;
}
</pre>

	<p>Mind you, you can use your own sizes and colors to fit your needs. Once that's done, we pretty much have our button. Simple right. But wait, now we want to do something on the <code>hover</code> state right? Ok, well below our <code>.button-1</code> block of code, we'll make a new block targeting its hover state. <code>.button-1:hover</code> is what we'll use. Now let's change the background color and we're done. </p>

<pre>	
.button-1:hover{
	background-color: #90a5d9;
}
</pre>

<p>And for the final product:</p>

	<form>
		<input type="submit" id="tut-final-button">
	</form>

<p>That wasn't too difficult was it. Now that you have the knowledge to modify your buttons using CSS, I encourage you to go out and experiment with this. There are tons of interesting buttons that you can make and I hope you can take this little bit of knowledge and translate it to something great. Maybe even get fancy and throw in some Javascript to make them do all kinds of crazy stuff. The world is yours to experiment with. Good luck.</p>
	
</section>
<?php include("../inc/blog-footer.php"); ?>