<?php
require_once('C:/wamp/modules/vars.php');
require_once('C:/wamp/modules/cookie.php');
?>
<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/topbar.css">
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/home.css">
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/footer.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<title>Gaming news, reviews, and more all in one place</title>
	</head>
	<body>
		<?php require_once('C:/wamp/modules/block/topbar.php');?>
		<div id="splash">
			<div id="splashinr">
				<div class="splashitemwide">
					<div class="splashitemwideoverlayimg" style="background-image:url('http://ramity.ddns.net/img/backdrop.jpg');">
						<a class="splashitemwideoverlaytext" href="https://twitter.com/RamityOfficial" target="_blank">Follow us</a>
					</div>
				</div>
			</div>
		</div>
		<div id="recentblog">
			<div id="recentbloginr">
				<div id="recentbloginrbanner">Latest Reviews</div>
				<div id="recentbloginrpostholder">
					<div class="recentbloginrpostitem">
						<img class="recentbloginrpostimg" src="http://ramity.ddns.net/img/titanz.jpg">
						<div class="recentbloginrposttitle">
							Titan X Review <span class="recentbloginrposttag">TECH</span>
						</div>
						<div class="recentbloginrposttext">insert clever placeholder text here. insert clever placeholder text here. insert clever placeholder text here. insert clever placeholder text here...</div>
						<a class="recentbloginrpostitemgo">See more</a>
					</div>
					<div class="recentbloginrpostitem">
						<img class="recentbloginrpostimg" src="http://ramity.ddns.net/img/products/11.jpg">
						<div class="recentbloginrposttitle">
							Titan X Review <span class="recentbloginrposttag">TECH</span>
						</div>
						<div class="recentbloginrposttext">insert clever placeholder text here. insert clever placeholder text here. insert clever placeholder text here. insert clever placeholder text here...</div>
						<a class="recentbloginrpostitemgo">See more</a>
					</div>
					<div class="recentbloginrpostitem" style="margin-right:0px;">
						<img class="recentbloginrpostimg" src="http://ramity.ddns.net/img/products/2.jpg">
						<div class="recentbloginrposttitle">
							Titan X Review <span class="recentbloginrposttag">TECH</span>
						</div>
						<div class="recentbloginrposttext">insert clever placeholder text here. insert clever placeholder text here. insert clever placeholder text here. insert clever placeholder text here...</div>
						<a class="recentbloginrpostitemgo">See more</a>
					</div>
				</div>
				<a id="recentbloglink" href="http://ramity.ddns.net/reviews">See more</a>
			</div>
		</div>
		<div id="products">
			<div id="productsinr">
				<div id="productsinrbanner">Products</div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/1.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/2.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/3.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/4.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/5.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/6.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/7.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/8.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/9.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/10.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/11.jpg');"></div>
				<div class="productsinritem" style="background-image:url('http://ramity.ddns.net/img/products/12.jpg');"></div>
				<a id="productsinrlink" href="http://ramity.ddns.net/products">View All</a>
			</div>
		</div>
		<div id="recentdev">
			<div id="recentdevinr">
				<div id="recentdevinrbanner">Development Log</div>
				<ul class="recentdevninrlistitem">
					<li>Work completed on frontpage</li>
					<li>Set up database structure</li>
					<li>Set up post structure</li>
					<li>Amazon afiliate?</li>
					<li>Site idea!</li>
				</ul>
				<ul class="recentdevninrlistitem">
					<li>Work completed on frontpage</li>
					<li>Set up database structure</li>
					<li>Set up post structure</li>
					<li>Amazon afiliate?</li>
					<li>Site idea!</li>
				</ul>
				<ul class="recentdevninrlistitem" style="margin-right:0px;">
					<li>Work completed on frontpage</li>
					<li>Set up database structure</li>
					<li>Set up post structure</li>
					<li>Amazon afiliate?</li>
					<li>Site idea!</li>
				</ul>
				<a id="recentdevlink" href="http://ramity.ddns.net/dev">View All</a>
			</div>
		</div>
		<?php require_once('C:/wamp/modules/block/footer.php');?>
	</body>
</html>