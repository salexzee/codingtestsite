<?php include("../inc/config.php"); ?>
<?php include("../inc/blog-header.php"); ?>

	<section class="container col-xs-10 blog-posts lead">
		<h1>Easy Chrome Theme <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://codingtestsite.com/blogs/chrome-theme.php" data-text="A little insight into how I made my #Chrome #theme." data-via="SamTheWebb" data-hashtags="blog" data-dnt="true">Tweet</a></h1>
		<?php include(ROOT_PATH . "inc/ads.php"); ?>
		<p>I've come to realize that making Chrome themes is quite easy. This isn't going to be a long tutorial explaing every little detail, but I will explain a few things. Let's start by taking a look at the code.</p>
		<pre>
&#123;
	"manifest_version": 2,
	"version": "1.0",
	"name": "CodingTestSite Theme",
	"theme": &#123;
  		"images" : &#123;
   			"theme_ntp_background" : "CTSlogo.png"
 		 &#125;,
 		"colors" : &#123;
  			"ntp_background": [30,30,30],
    			"ntp_text": [255,255,255]
  		&#125;,
  		"properties" : &#123;
    			"ntp_background_alignment" : "right bottom"
  		&#125;
 	&#125;

&#125;</pre>

		<p>Believe it or not, that is all the code needed to make a small simple theme for Chrome. This is obviously a personal CTS theme and there is way more stuff you could do, but this will at least get you started.</p>
		<p>Basically what you see here is the inside of a file called manifest.json. And yes, you guessed it, it's written using JSON. What this does is, when I CMD+T for a new tab in Chrome, I get the new tab window which looks like this:</p><br>
		<img src="<?php echo BASE_URL; ?>images/extension-view.png" alt="View of how theme looks." id="theme-pic"><br>
		<p>Also if there was anything in the history, the text color would be white. I'm sure with that image, you should more or less be able to understand what's going on in this code. Basically, I set versions and a name for this project, I show that it's a theme and then I define the background image, background color, font color and background alignment. If you're not sure, the colors are in RGB values.</p>
		<p>I don't plan to go into anymore detail about the file structure. If you'd like to see all the files that were use, you can find them on the <a href="https://github.com/salexzee/chromeTheme-CTS">GitHub project for this</a>.</p>
		<p>What I am going to explain is how you get the theme working in your Chrome browser. First, you'll want to click the hambuger menu to the top right of the browser(the three lines stacked on each other). In the dropdown, hover over "More Tools" and click on the "Extensions" option. A shortcut would be to just copy/paste this <code>chrome://extensions/</code> into the browser bar. Once the page loads, there will be a checkbox option for Developer mode. Make sure that's checked.</p>
		<p>At this point click on the "Load unpacked extension..." button which will bring up a file navigation window. Choose the directory that you're holding your files in and load it up. If you don't get any errors, you're theme should be automatically loaded. Make sure to check if the "Enabled" button is checked off as well. That's it. You're done. Just hit CMD+T on a Mac and you'll open up a new window which should have your newly created theme.</p>
		<p>One warning, make sure you're creating your themes in their own directories. To get more information on creating Chrome themes, go to their <a href="https://code.google.com/p/chromium/wiki/ThemeCreationGuide#Image_Elements">ThemeCreationGuide</a>.</p>

		<?php include_once("../inc/comments.php"); ?>

	</section>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<?php include("../inc/blog-footer.php"); ?>
