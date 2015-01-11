<?php include("../inc/blog-header.php"); ?>
<section class="container col-xs-10 blog-posts">

	<h1>XAMPP for Windows 7(Tutorial for beginners)</h1>

	<?php include("../inc/ads.php"); ?>

	<p>When you first start your journey to learn web development, you'll soon learn that you want to create your website on your local computer before uploading it to your live server. So you'll be making your HTML files and they'll show up right in your browser since they'll be written in a client side language. But what about when that day comes when you want to start learning a server side language. Maybe you want to make a contact form or you want to start a blog with a comment section. These things can be achieved by using a back-end language(PHP, Ruby, Python, etc.).</p>
	
	<p>I have a few computers which on them I run OS X, Windows 7 and Ubuntu Linux. On all of these, if I want to work on my website(this website), seeing that it's written in PHP, I have to use server software. Today, I'm going to show you how to obtain and start to use XAMPP for Windows 7. Its an easy process and I'll make sure you know everything you need to know to start working on your projects today. Let's get started.</p>

	<p>First what you want to do is go to the <a href="https://www.apachefriends.org/">Apache Friends</a> website. From there you'll see a green Download arrow pointing to the latest XAMPP versions for Windows, Linux and OS X. Click on the Windows version shown in the image below:</p><br>
	
	<img src="../images/xampp-blog/xampp-website-image.jpg" alt="XAMPP website image." class="xampp-tut-image"><br>
	
	<p>Once you've clicked it, your download will start. After your download completes, click it to run the installer. At this point I'm going to assume that you know how to install a program on Windows, so I won't walk you through this step.</p>
	
	<p>Once installed, navigate to <code>C:\xampp\htdocs</code>. This is where you'll find a bunch of files that will basically be a home page. The page is written in PHP, so you won't be able to see what the home page looks like without turning on your server first. To do this, click on your Windows button and type "XAMPP" in the search bar. Click on the "XAMPP Control Panel" and you will be brought to this screen:</p>
	
	<img src="../images/xampp-blog/xampp-control-panel.jpg" alt="XAMPP control panel image." class="xampp-tut-image"><br>
	
	<p>Now click "Start" next to Apache and you're server is up and running. Now that you have your server running, open your favorite web browser and type <code>localhost</code> into the address bar. In simple terms, <code>localhost</code> is the address to whatever folder your server is pointing at. Or the root directory. Usually, its the <code>htdocs</code> folder. This can be changed, but I won't be covering that here.</p>

	<p>Now that you've seen your home page, you know your server is working. You're now free to erase everything in the <code>htdocs</code> folder and replace it with your own website. Me personally, instead of using <code>htdocs</code> to host only 1 of my websites, I prefer to put a folder that contains all of my websites in the <code>htdocs</code> folder so that I can type <code>localhost</code> and navigate to each one. I'll show you what I mean.</p>
	
	<img src="../images/xampp-blog/htdocs.jpg" alt="Files image." class="xampp-tut-image"><br><br>
	<img src="../images/xampp-blog/htdocs-navigation.jpg" alt="Files image." class="xampp-tut-image"><br><br>
	<img src="../images/xampp-blog/htdocs-navigation-complete.jpg" alt="Files image." class="xampp-tut-image"><br><br>
	<img src="../images/xampp-blog/localhost-image.jpg" alt="localhost image." class="xampp-tut-image"><br><br>
	<img src="../images/xampp-blog/websites-image.jpg" alt="localhost/Websites image" class="xampp-tut-image"><br><br>
	<img src="../images/xampp-blog/complete.jpg" alt="localhost => CodingTestSite image." class="xampp-tut-image"><br><br>

	<p>As you can see, the Websites folder shows up in the browser. Click that and navigate to the website you'd like to view and it'll open like a normal website. Servers look for the <code>index.html</code> and <code>index.php</code> files to open automatically so everything should work perfectly. And that's it. That's how you obtain and start using XAMPP on Windows 7.</p>

	<!-- START COMMENT SECTION -->
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'xampptut'; // required: replace example with your forum shortname

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
    var disqus_shortname = 'xampptut'; // required: replace example with your forum shortname

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