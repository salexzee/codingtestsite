<?php include("../inc/blog-header.php"); ?>

<section class="container col-xs-10 blog-posts">

	<h1>Simple Multi-Page PHP (Tutorial)</h1>

  <?php include("../inc/ads.php"); ?>

	<p>For those that are new to web development and you'd like to know an easy way to make alterations of your websites a little easier, this is for you. Have you been ever been creating a website and wondered to yourself if there's a faster and more efficient way of making multiple pages of a website have the same layout? Well the answer to your question is yes. There are multiple ways to do this, but today I'm going to be talking about PHP.</p>

	<p>PHP is a back-end language, which means instead of the browser interpreting your code, a request is sent to the server and your code is run there and sent back out to the browser. That may sound complicated to someone new to this, but it really isn't. Simply put, what this does is makes your website able to do much more complex tasks. There are tons and tons of things possible when using a back-end language on your website, and that's something you can choose to look into after this. With this, I am not trying to convince you to use PHP on all your websites, but this is an easy way to see the power of using a back-end language. Don't be afraid to test out Python and/or Ruby as well to see if there's one you prefer. Now, let's get into it.</p>

	<h3>Setting the stage</h3>


	<p>Let's assume you already have an HTML website set up. You have 4 pages: <code>index.html</code>, <code>portfolio.html</code>, <code>contact.html</code> and <code>blog.html</code>. So firstly, if PHP is installed on your server, you can start to use PHP immediately. I'm not going to get into how to install PHP on a server in this, but if you're getting your hosting through someone like Host Gator or another big name, they usually already have it set up. Also, to work on your pages on your own computer, you'll need something like MAMP(MAC) or XAMP(Windows) installed which makes you able to use your personal computer as a server, which is needed to run a server side language.</p>

	<p>So back to the website. You have your 4 pages, firstly what you want to do is change the names of all 4 pages from <code>.html</code> to <code>.php</code>. This will have no noticeable effect and web browsers will still point to your <code>index.php</code> page as the one to open. Now, you'll notice that none of your links in your navbar work anymore. That's because they're looking for <code>.html</code> files. In your <code>index.php</code> file, change all the links to your other pages to <code>.php</code>. Now, this is the part where you would usually have to change this in every file, but not anymore.</p>

	<p>What you need to do now is make a folder in your root directory called <code>inc</code> which stands for includes. Basically, this is where you'll put all of your files that you want to use as includes in other files. I'll explain how this works in a minute. Inside of your <code>inc</code> folder, create a file named <code>header.php</code>. Now, go back to your <code>index.php</code> file and figure out what should be the same on all your pages. Let's say this is how your layout starts:</p>

<xmp class="text-danger">
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Easy PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
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
  <main>
</xmp>

	<p>Now, let's say that this code should be the same on every page. What you would want to do now is cut all that text and paste it into the <code>header.php</code> file. In your <code>index.php</code> file, replace all of this with the php command <code>&lt;?php include ("inc/header.php"); ?></code>. What that piece of code does is it takes all the content from the <code>header.php</code> file and generates it into the <code>index.php</code> file. Do the same thing in the other three files and now you'll only have one place to change things and it will show on all your pages. Say you want to add a new page to your navigation. All you'll have to do is change it in the <code>header.php</code> file and it will display on all your pages. Simple right?</p>

	<p>That's it, now you have a static header that won't change from page to page. Now on your own, do the footer as well. It will be just as simple. Basically just find all the text at the bottom of the page that's going to be the same on every page, and make a <code>footer.php</code> file out of it.</p>

	<h3>Tips</h3>

	<ul>
	<li>Make sure you put all your header include at the top of the page and put your footer include at the bottom of the page. Don't put anything above or below them.</li>
	<li>If you're having trouble viewing this on your computer, make sure you set up your MAMP/XAMP software correctly and also make sure your files are located in the folder used for localhost. It's usually the htdocs folder unless you change it.</li>
	<li>Do a quick crash course on learning MAMP/XAMP so that you will understand how it works and where to place files.</li>
	<li>Learn how to use PHP to dynamically generate an <code>active</code> class for which ever page you're on so that your navbar shows your current page.</li>
	</ul>

	<p>Hopefully this helps you make the jump into back-end languages. They're fun and there's so much you can do with them.</p><br>
	<p>Cheers,</p>
	<p>Sam</p>

	    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'simplempphp'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
        <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'simplempphp'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
    

</section>




<?php include("../inc/blog-footer.php"); ?>