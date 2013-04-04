<!DOCTYPE html> 
<html manifest="manifest.php">
	<head>
		<meta name="robots" content="none" />
		<meta charset="utf-8" />
		<title>Hoffman - Contact Info</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	    
	    <? /* CSS / LESS (Optimize before deployment) */ ?>
	    <? /*<link rel="stylesheet/less" type="text/css" href="/Content/less/normalize.less" />
	    <link rel="stylesheet/less" type="text/css" href="/Content/less/_application.less" />*/ ?>
	        
	    
	    <link rel="stylesheet" type="text/css" href="/Content/less/normalize.css" />
	    <link rel="stylesheet" type="text/css" href="/Content/less/_application.css" />
	    

	    <script src="/Content/scripts/less-1.3.3.min.js" type="text/javascript"></script>
	</head> 
	
    <body>
    	<? include_once("../Shared/_stripes.php"); ?>
	    <div id="wrapper" data-role="page">
	      <div id="content">
	        
	        <section id="header" data-role="header">
	          <h1 style="white-space:nowrap;">Shawn Hoffman</h1>
	          <hr />
	          <div>Contact Info</div>
	        </section>

	        <section id="links" data-role="content">
	        	<ul data-role="listview">
					<li><a rel="external" href="vcard.php" class="button">Download vCard file directly.</a></li>
					<li><a rel="external" href="vcal.php" class="button">Download Contact to iPhone.</a></li>
					<li><a rel="external" href="tel:+1 (317) 604-0325" class="button">Call my cell phone.</a></li>
					<li><a rel="external" href="mailto:shawn.hoffman@us.sogeti.com" class="button">Email</a></li>
				</ul>
        	</section>

        	<section id="footer" data-role="footer">
        		<a href="http://shawnphoffman.com">shawnphoffman.com</a>
        	</section>

          </div>
      	</div>
    </body>
</html>
