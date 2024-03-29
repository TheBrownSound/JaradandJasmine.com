<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Jarad &amp; Jasmine</title>
	<meta name="description" content="Jarad Comingdeer &amp; Jasmine Calloway will be getting married on October 5th, 2012 at Ponte Family Estate Winery in Temecula California.">
	<meta name="author" content="Jarad Comingdeer">
	<meta name="keywords" lang="en-us" content="Jarad, Jasmine, Wedding, Marriage, Married, Ponte, Temecula">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- JS
	================================================== -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="javascripts/tabs.js"></script>
	<script src="javascripts/jquery.form.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".scroll").click(function(event){
				event.preventDefault();
				var full_url = this.href;
				var parts = full_url.split("#");
				var trgt = parts[1];
				$('html, body').animate({scrollTop: $("#"+trgt).offset().top}, 1000);
			});

			$('#rsvpform').ajaxForm(function() { 
		    	alert("Thank you for your response!"); 
			});

			$("#rsvpform textarea")
				.focus(function() {
					if (this.value === this.defaultValue) {
					    this.value = '';
					}
				})
				.blur(function() {
					if (this.value === '') {
					    this.value = this.defaultValue;
					}
			});
		});
	</script>

</head>
<body>
	<div id="header">
		<div id="nav">
			<a class="scroll" href="#details"><img class="logo" src="images/logo.png"></a>
			<ul>
				<li><a class="scroll" href="#location">Location</a></li>
				<li><a class="scroll" href="#rsvp">RSVP</a></li>
				<li><a class="scroll" href="#gifts">Registry</a></li>
			</ul>
		</div>
	</div>
		
	<div id="details" class="panel">
		<div class="container">
			<h1>We're Getting <em>Married!</em></h1>
			<div class="info six columns offset-by-ten omega">
				<p><span class="names">Jarad Comingdeer<br />&amp;<br />Jasmine Calloway<br/></span> will be getting married on <span class="date">October 5th, 2012</span> at Ponte Family Estate Winery in Temecula California.</p>
				<p class="block">We would love for you to join us. Our wedding ceremony starts at <em class="isolate">5:00pm</em> and will be followed by an evening of good food, friends, and music to celebrate the start of our marriage.</p>
			</div>
		</div>
	</div>
	
	<div id="location" class="panel">
		<div class="container">
			<h2>Location &amp; Accomodations</h2>
			<h3>Wedding Ceremony &amp; Reception</h3>
			<div id="wedding-info" class="sixteen columns">
				<div class="block">
					<h4>We will be tying the knot at...</h4>
					<img class="ponte" src="images/ponte_barn.jpg" alt="Ponte Barn" />
					<h5>Ponte Family Estate Winery</h5>
					<address>35053 Rancho California Road<br/>
						Temecula, California 92591</address>
					<h5>Information</h5>
					<p>Temecula is approximately 50 minutes north from San Diego. San Diego International is the closest major airport to the venue. If you have any other questions shoot us an email at: <a href="mailto:wedding@jcomingdeer.com">wedding@jcomingdeer.com</a></p>
					<ul class="links">
						<li><a href="http://www.pontewinery.com">PonteWinery.com</a></li>
						<li><a href="tel:951-694-8855">951-694-8855</a></li>
						<li><a href="http://g.co/maps/86v8y">Google Maps</a></li>
					</ul>
				</div>
			</div>
			
			<h3>Nearby Accomodations</h3>
			<ul id="accomodations">
				<li class="one-third column">
					<div class="block">
						<h4>Ponte Vineyard Inn</h4>
						<address>35053 Rancho California Road<br>
							Temecula, California 92591</address>
						<a href="http://www.pontevineyardinn.com/">pontevineyardinn.com</a>
						<a href="tel:951-694-8855">951-694-8855</a>
						<ul>
							<li><em>Proximity:</em> Walking</li>
						</ul>
					</div>
				</li>
				<li class="one-third column">
					<div class="block">
						<h4>South Coast Winery Resort &amp; Spa</h4>
						<address>34843 Rancho California Rd.<br>
							Temecula, California 92591</address>
						<a href="http://www.wineresort.com/">wineresort.com</a>
						<a href="tel:951-587-9463">951-587-9463</a>
						<ul>
							<li><em>Proximity:</em> Walking</li>
						</ul>
					</div>
				</li>
				<li class="one-third column">
					<div class="block">
						<h4>Embassy Suites Hotel</h4>
						<address>29345 Rancho California Rd.<br>
							Temecula, California 92591</address>
						<a href="http://embassysuites1.hilton.com/en_US/es/hotel/LAXTMES-Embassy-Suites-Temecula-Valley-Wine-Country-California/index.do">hilton.com</a>
						<a href="tel:951-676-5656">951-676-5656</a>
						<ul>
							<li><em>Proximity:</em> 5.9 miles from venue</li>
						</ul>
					</div>
				</li>
				<li class="one-third column">
					<div class="block">
						<h4>Temecula Creek Inn</h4>
						<address>44501 Rainbow Cyn. Rd.<br>
							Temecula, California 92591</address>
						<a href="http://www.temeculacreekinn.com/">temeculacreekinn.com</a>
						<a href="tel:951-694-1000">951-694-1000</a>
						<ul>
							<li><em>Proximity:</em> 8.7 miles from venue</li>
						</ul>
					</div>
				</li>
				<li class="one-third column">
					<div class="block">
						<h4>Fairfield Inn &amp; Suites</h4>
						<address>47416 Jefferson Ave.<br>
							Temecula, California 92590</address>
						<a href="http://www.marriott.com/hotels/travel/ontrt-fairfield-inn-and-suites-temecula/">marriott.com</a>
						<a href="tel:951-587-9800">951-587-9800</a>
						<ul>
							<li><em>Proximity:</em> 6.7 miles from venue</li>
						</ul>
					</div>
				</li>
				<li class="one-third column">
					<div class="block">
						<h4>La Quinta Inn &amp; Suites</h4>
						<address>27330 Jefferson Ave<br>
							Temecula, California 92590</address>
						<a href="http://www.lq.com/lq/properties/propertyProfile.do?propId=6113">lq.com</a>
						<a href="tel:951-296-1003">951-296-1003</a>
						<ul>
							<li><em>Proximity:</em> 8.4 miles from venue</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<div id="rsvp" class="panel">
		<div class="container">
			<div class="eight columns offset-by-eight omega">
				<h2>RSVP</h2>
				<form id="rsvpform" action="rsvp.php" method="post">
					<label for="name">Name(s):</label>
					<input id="name" name="name" type="text" />
					<label for="email">Email:</label>
					<input id="email" name="email" type="text" />
					<label for="phone">Phone:</label>
					<input id="phone" name="phone" type="text" />
					<span class="attending">
						<label>Can you make it?</label>
						<span class="attending-radio"><input type="radio" value="yes" name="attending" /><p>Yes! Can't wait!</p></span>
						<span class="attending-radio"><input type="radio" value="no" name="attending" /><p>Sorry! We can't make it.</p></span>
					</span>
					<label for="message">Special Considerations?:</label>
					<textarea id="message" name="message" rows="10">Vegetarian, allergies, ect.</textarea>
					<span class="form-end">
						<input type="submit" value="RSVP" />
					</span>
				</form>
			</div>
		</div>
	</div>
	
	<div id="gifts" class="panel">
		<div class="container">
			<h2>Registry</h2>
			<p>Please don't feel obligated to get us gifts. The most important gift you can give is to celebrate with us.</p>
			<div class="one-third column">
				<h3>Crate &amp; Barrel</h3>
				<img src="images/boozeandplates.png" alt="Crate &amp; Barrel" />
				<a class="button" href="http://www.crateandbarrel.com/Gift-Registry/Guest/View-Registry.aspx?grid=4807539">View Registry</a>
			</div>
			<div class="one-third column">
				<h3>Williams Sonoma</h3>
				<img src="images/le_creuset.jpg" alt="Williams Sonoma" />
				<a class="button" href="http://www.williams-sonoma.com/registry/2874217/registry-list.html">View Registry</a>
			</div>
			<div class="one-third column">
				<h3>Amazon.com</h3>
				<img src="images/kitchen_stuff.jpg" alt="Amazon.com" />
				<a class="button" href="http://www.amazon.com/gp/registry/wedding/1B2DACGO776SO">View Registry</a>
			</div>
		</div>
	</div>

<!-- End Document
================================================== -->
</body>
</html>