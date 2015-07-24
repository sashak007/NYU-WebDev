<?php
  if(!$_COOKIE["user"]) {
  	header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Assignment</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/home.css" />
</head>
<body>
	<div class="container">
		<nav>
			<img id="logo" src="images/deer-logo.png" />
			<h1>Members Only</h1>
			<div id="logout-Status">
				<form action="/logout.php" method="POST">
					<input type="submit" value="Log out">
				</form>
			</div>
		</nav>
		<div class="clear"></div>
		<article>
			<section>
				<h2>Extremely interesting topic</h2>
				<p>Bacon ipsum dolor sit amet ham hock tri-tip swine drumstick spare ribs filet mignon boudin short ribs. Pork belly rump venison doner, pig ham fatback sirloin. Ground round short ribs bacon andouille, strip steak swine tenderloin prosciutto drumstick pig pork belly leberkas hamburger ham. Pork belly short loin beef, swine doner pork chop shank venison boudin pastrami chicken drumstick ribeye.</p>

				<p>Harness harness experiences, "magnetic transition ecologies feeds," wireless cross-media collaborative user-centric, "24/7 revolutionary." Out-of-the-box orchestrate one-to-one niches remix interfaces enterprise reinvent e-business platforms, feeds content e-business, reinvent vortals dynamic. Impactful visualize orchestrate strategize, "podcasting; deliverables, revolutionary syndicate vertical aggregate incubate." IntegrateAJAX-enabled user-centric innovative bleeding-edge platforms architectures systems infrastructures efficient frictionless, synergies orchestrate schemas niches. Generate bleeding-edge 24/365 bleeding-edge deploy e-tailers platforms. Best-of-breed enable user-centred optimize frictionless enterprise value social extensible extend supply-chains rss-capable sexy benchmark A-list embrace vortals rich. Innovative, grow, proactive bandwidth engage; innovate networks harness impactful platforms iterate tagclouds, interfaces.</p>

				<p>Meatball pork chop prosciutto tri-tip tail. Kevin turkey chuck bresaola cow tongue swine drumstick pig hamburger pork chop capicola shoulder. Cow capicola beef corned beef filet mignon boudin flank. Pork sirloin flank strip steak. Turkey shoulder biltong pork loin beef short ribs strip steak cow pork belly spare ribs drumstick filet mignon ham hock. Pork chop tongue chuck short ribs meatball flank ham.</p>
			</section>
			<img src="images/deer.jpg" />
			<div class="clear"></div>
		</article>	
		<footer>
			<p>© 2013 The Web Development Intensive Company</p>
			<nav>
				<ul>
					<li>Contact us</li>
					<li>Terms & Conditions</li>
					<li>Privacy Policy</li>
				</ul>
			</nav>
			<div class="clear"></div>
		</footer>
	</div>
</body>
</html>