<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Stinson &amp; Associates, Inc. | Contact</title>
  <meta name="description" content="This website is devoted to the law and psychology practices of Dr. Bob Stinson.">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

<link rel="stylesheet" href="../css/style.css">

 <!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" />
<![endif]-->

  
  
  
  <link href='http://fonts.googleapis.com/css?family=Arimo:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="../js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body class="contact">
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <header>
	<h1>Bob Stinson - To Contact Me</h1>
	<a href="/" title="Home Page"><img src="../img/bobstinson_signature_v2.png" alt="Bob Stinson signature" width="211" height="170" /></a>
  </header>
  
    <nav id="topNav">
        <h2>Top Navigation</h2>
        <ul class="desktop clearfix">
          <li><a href="/" title="Home Page">Home</a></li>
          <li><a href="../psychology" title="Psychology" id="psychologyButton">Psychology</a></li>
          <li><a href="../law" title="Law" id="lawButton">Law</a></li>
          <li><a href="../about" title="About">About Us</a></li>
        </ul>
    </nav>
    
    <nav class="mobile clearfix"> 
        <ul>
          <li><a href="/" title="Home Page">Home</a></li>
          <li><a href="../psychology" title="Psychology Page">Psychology</a></li>
          <li><a href="../law" title="Law Page">Law</a></li>
          <li><a href="../about" title="About Page">About Us</a></li>
          <li><a href="" title="Contact Page" class="current">Contact</a></li>
          <li><a href="../legal" title="Legal Page">Legal</a></li>
        </ul>
    </nav>

  <div role="main">  

  	<section >
  		
  		<h2>To Contact Us</h2>

      <h3>Address</h3>
      <div class="clearfix">
        <div class="address address-left">
      		<p>20 S. Third Street, Suite 210</p>
          <p>Columbus, OH 43215</p>

          <iframe src="https://www.google.com/maps/embed?pb=!1m5!3m3!1m2!1s0x88388f33cb303d71%3A0x1f0ed6ec30bf5c68!2s20+S+3rd+St+%23210%2C+Columbus%2C+OH+43215%2C+USA!5e0!3m2!1sen!2s!4v1390052901769" frameborder="0" style="border:0"></iframe>
        </div>
    
        <div class="address address-right">
          <p>7440 Rolling Ridge Way</p>
          <p>Westerville, OH 43082</p>
          
          <h3>Phone</h3>
          <p>(614) 309-9727</p>

          <h3>Fax</h3>
          <p>(614) 895-6801</p>

        </div>
      </div>

      <h3>Send a Message<h3>

      <form action="mail_handler.php" method="post">

        <fieldset>
          <label for="name">Your name</label>
          <input type="text" name="name" id="name" required >
          
          <label for="email">Your email address</label>
          <input type="email" name="email" id="email" required >
          
          <label for="message">Enter your message</label>
          <textarea name="message" id="message" cols="25" rows="5" required ></textarea>
          
          <input type="submit" name="submit" value="Submit Form" id="submit-button">
        </fieldset>

      </form>


  		
  	</section>
	
  </div>
  <footer>
  	
  	<p>&copy;2013-2014 Stinson &amp; Associates, Inc.</p>
  	<ul>
  			<li><a href="" title="Contact Me" class="current">Contact</a></li>
  			<li><a href="../legal" title="Legal Documentation">Legal</a></li>
  	</ul>
  	
 </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="../js/plugins.js"></script>
  <script src="../js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>