<?php include("../inc/blog-header.php"); ?>

<h1>Simple Multi-Page PHP</h1>

	<section class="container col-xs-10 blog-posts">
	<p>For those that are new to web development and you'd like to know an easy way to make alterations of your websites a little easier, this is for you. Have you been ever been creating a website and wondered to yourself if there's a faster and more efficient way of making multiple pages of a website have the same layout? Well the answer to your question is yes. There are multiple ways to do this, but today I'm going to be talking about PHP.</p>

	<p>PHP is a back-end language, which means instead of the browser interpreting your code, a request is sent to the server and your code is run there and sent back out to the browser. That may sound complicated to someone new to this, but it really isn't. Simply put, what this does is makes your website able to do much more complex tasks. There are tons and tons of things possible when using a back-end language on your website, and that's something you can choose to look into after this. With this, I am not trying to convince you to use PHP on all your websites, but this is an easy way to see the power of using a back-end language. Don't be afraid to test out Python and/or Ruby as well to see if there's one you prefer. Now, let's get into it.</p>

	<h3>Setting the stage</h3>


	<p>Let's assume you already have an HTML website set up. You have 4 pages: index.html, portfolio.html, contact.html and blog.html. So firstly, if PHP is installed on your server, you can start to use PHP immediately. I'm not going to get into how to install PHP on a server in this, but if you're getting your hosting through someone like Host Gator or another big name, they usually already have it set up. Also, to work on the site on your own computer, you'll need something like MAMP(MAC) or XAMP(Windows) installed which makes you able to use your personal computer as a server, which is needed to run a server side language.</p>

	<p>So back to the website. You have your 4 pages, firstly what you want to do is change the names of all 4 pages from .html to .php. This will have no noticeable effect and web browsers will still point to your index page as the one to open. Now, you'll notice that none of your links in your navbar work anymore. That's because they're looking for .html files. In your index.php file, change all the links to your other pages to .php. Now, this is where you would usually have to change this in every file, but not anymore.</p>

	<p>What you need to do now is make a folder in your root directory called inc which stands for includes. Basically, this is where you'll put all of your files that you want to use as includes in other files. I'll explain how this works in a minute. Inside of your inc folder, create a file named header.php. Now, go back to your index.php file and figure out what should be the same on all your pages. So let's say this is how your layout starts:</p>

<xmp>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Easy PHP</title>
  <meta charset="utf-8">
</head>
<body>
  <header>
    <div class="main-logo">
      <p>Easy PHP</p>
    </div>
    <nav>
      <ul>
        <li><a href"index.php">Home</a></li>
        <li><a href"blog.php">Blog</a></li>
        <li><a href"portfolio.php">Portfolio</a></li>
        <li><a href"contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
</xmp>

	<p>Now, let's say that this code should be the same on every page. What you would want to do now is cut all that text and paste it into the header.php file. In your index.php file, replace all of this with the php command <code>&lt;?php include ("inc/header.php"); ?></code>. What that piece of code does is it takes all the content from the header.php file and generates it into the index.php file. Do the same thing in the other three files and now you'll only have one place to change things and it will show on all your pages.</p>

	<p>That's it, now you have a static header that won't change from page to page. Now on your own, do the footer as well. It will be just as simple. Basically just find all the text at the bottom of the page that's going to be the same on every page, and make a footer.php file out of it.</p>

	<h3>Tips</h3>

	<ul>
	<li>Make sure you put all your header include at the top of the page and put your footer include at the bottom of the page. Don't put anything above or below them.</li>
	<li>If you're having trouble viewing this on your computer, make sure you set up your MAMP/XAMP software correctly and also make sure your files are located in the folder used for localhost. It's usually the htdocs folder unless you change it.</li>
	<li>Do a quick crash course on learning MAMP/XAMP so that you will understand how it works and where to place files.</li>
	<li>Learn how to use PHP to dynamically generate an active class for which ever page you're on so that you can see which page you're currently on in your navbar.</li>
	</ul>

</section>




<?php include("../inc/blog-footer.php"); ?>