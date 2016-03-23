<?php
header('Location: /en', true, 301);
exit;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Jannis Hutt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<meta name="description" value="Jannis Hutt - Photograph, Bureauhengst, Nerd und Coffeingourmet.">
		<meta name="keywords" value="Jannis, Hutt, Janis, Yanis, Giannis, Hut, Hutti, Programmierer, Die Linke, Karlsruhe, Berlin, Kuchen, Cookies, Katzenbabies">
		<meta http-equiv="refresh" content="0; url=de/">
		<meta name="robots" content="index, follow">
	</head>
	<body>
		<!-- Header -->
			<section id="header">
				<header class="major">
					<h1>Jannis Hutt</h1>
					<p>Politik, Computer, Kommunikation</p>
				</header>
				<div class="container">
					<ul class="actions">
						<li><a href="#one" class="button special scrolly">Stalken</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Wer ich bin</h2>
						</header>
						<p>Jannis Hutt ist 19 Jahre alt. In Berlin ist er unter anderem bei den Projekten <a href="http://meinbge.de">Mein Grundeinkommen</a>, <a href="http://sanktionsfrei.de">Sanktionsfrei</a> und <a href="http://appstimmung.de">Appstimmung</a> tätig. Nebenbei leitet er die politische Kommunikation von <a href="https://tersee.com">Tersee</a>. Er interessiert sich für Feminismus, Technik, Netzpolitik und sehr viel mehr. In seiner Freizeit findet ihr ihn bei der <a href="http://www.die-linke-berlin.de/die_linke/partei/lag_und_ig_plattformen/die_linkequeer/">LAG queer Berlin</a>, der <a href="http://ema.li">Emanzipatorischen Linken</a> oder auf Reisen. Außerdem <a href="https://bloggenswertes.de">blog</a>gt er.</p>
					</div>
					<a href="#two" class="goto-next scrolly">Weiter</a>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Was ich mache</h2>
						</header>
						<p>Neben politischer Arbeit und Campaigning habe ich ein Faible für alles, was sich programmieren und hacken lässt: von der Pebble Smartwatch bis zu Raspberry Pis. Außerdem photographiere ich leidenschaftlich.</p>
						<ul class="icons-grid">
							<li>
								<span class="icon major fa-camera-retro"></span>
								<h3>Photograph</h3>
							</li>
							<li>
								<span class="icon major fa-paperclip"></span>
								<h3>Bureauhengst</h3>
							</li>
							<li>
								<span class="icon major fa-terminal"></span>
								<h3>Nerd</h3>
							</li>
							<li>
								<span class="icon major fa-coffee"></span>
								<h3>Coffeingourmet</h3>
							</li>
						</ul>
					</div>
					<a href="#footer" class="goto-next scrolly">Weiter</a>
				</div>
			</section>

<!--
		#<!#-#- Three -#->
			<section id="three" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Anbiederung an den Lohnarbeitsmarkt</h2>
						</header>
						<p>Du kannst mich engagieren. Ich leiste IT-Support (verschiedene Plattformen, auf Anfrage), programmiere (Assembler und C bis PHP und JS) und habe Erfahrung als wissenschaftlicher Mitarbeiter im Deutschen Bundestag mit den Themen Ernährung und Verbraucherschutz. Außerdem habe ich Interesse an Netzpolitik, Feminismus und die Fähigkeit, mich schnell in neue Themenkomplexe einzuarbeiten. Oh, und einen Server habe ich auch schon administriert. Schreibe mir doch einfach!</p>
					</div>
					<a href="#footer" class="goto-next scrolly">Weiter</a>
				</div>
			</section>
-->

		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Kontakt</h2>
					</header>
					<p id="status"></p>
					<form method="post" action="https://jh0.eu/api/contact.php?site=wtf">
						<div class="row uniform">
							<div class="12u$ invisible"><input type="text" id="firstname" name="firstname" placeholder="Vorname" /></div>
							<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" required="required" /></div>
							<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="E-Mail" required="required" onblur="checkFilled()" /></div>
							<div class="12u$"><textarea name="message" id="message" placeholder="Nachricht..." rows="4" required="required"></textarea></div>
							<div id="gpgform" class="12u$ invisible"><textarea name="gnupg" id="gnupg" placeholder="PGP Public Key (optional)" rows="1" onpaste="handlePaste()"></textarea></div>
							<div class="12u$">
								<ul class="actions">
									<li><input type="reset" value="Reset" onclick="resetForm()" /></li>
									<li><input type="submit" value="Senden" class="special" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<footer>
					<ul class="icons">
						<li><a href="https://twitter.com/Der_Hutt" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://github.com/77u4" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="https://www.flickr.com/photos/jannishutt/albums" class="icon alt fa-flickr"><span class="label">Flickr</span></a></li>
						<li><a href="https://telegram.me/robinhutt" class="icon alt fa-paper-plane"><span class="label">GitHub</span></a></li>
						<li><a href="https://bloggenswertes.de" class="icon alt fa-paragraph"><span class="label">Blog</span></a></li>
					</ul>
					<ul class="copyright">
						<li>Copyright &copy; 2010 - 2016 Jannis Hutt<!-- &middot; <a href="https://bloggenswertes.de/impressum/">Impressum</a>--></li>
						<!--
						<li>Headerbild: <a href="https://kwerfeldein.de/author/administrator/">Martin Gommel</a></li>
						-->
					</ul>
				</footer>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/custom.js"></script>
			
			<!-- Piwik -->
			<script type="text/javascript">
			  var _paq = _paq || [];
			  _paq.push(["setCookieDomain", "*.hutt.wtf"]);
			  _paq.push(["setDomains", ["*.hutt.wtf","*.jannishutt.de"]]);
			  _paq.push(['trackPageView']);
			  _paq.push(['enableLinkTracking']);
			  (function() {
			    var u="//piwik.jh0.eu/";
			    _paq.push(['setTrackerUrl', u+'piwik.php']);
			    _paq.push(['setSiteId', 3]);
			    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
			  })();
			</script>
			<noscript><p><img src="//piwik.jh0.eu/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
			<!-- End Piwik Code -->
	</body>
<!-- Wer bist du und was machst du in meinem Quelltext? -->
</html>
