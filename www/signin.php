<?php
if(isset($_COOKIE['inf'])&&!empty($_COOKIE['inf']))
{
	header('Location:http://ramity.ddns.net/');
}
require_once('C:/wamp/modules/vars.php');
require_once('C:/wamp/modules/cookie.php');
require_once('C:/wamp/modules/log/check.php');
if(isset($_GET['success'])&&$_GET['success']==true)
{
	$GLOBALS['postErrorMessage']="Now try logging in.";
}
?>
<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/topbar.css">
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/signin.css">
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/footer.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<title>Gaming news, reviews, and more all in one place</title>
	</head>
	<body>
		<?php require_once('C:/wamp/modules/block/topbar.php');?>
		<div id="signin">
			<div id="signininr">
				<div id="signincontentpane" style="background-image:url('http://ramity.ddns.net/img/products/5.jpg')">
					<div id="signincontentpaneupper"></div>
					<div id="signincontentpanelower">
						<div id="signincontentpanelowerleft">
							<div id="signincontentpanelowertitle">DEAL OF THE WEEK:</div>
							<div id="signincontentpanelowerpromotext">15% off on all nvidia gpus, and for a limited time, kickstart your game library with a free copy of Borderlands 2.</div>
						</div>
						<img id="signincontentpanelowerright" src="http://ramity.ddns.net/img/rlogo2.png">
					</div>
				</div>
				<div id="signincontentpanetwo">
					<form action="http://ramity.ddns.net/signin" method="post" id="signincontentpanetwolog">
						<input class="signincontentpaneltwolong"	type="text"		name="loginusername"	placeholder="username"	value="<?php if(isset($_POST['loginusername'])){echo $_POST['loginusername'];}?>"	autocomplete="off"	autofocus>
						<input class="signincontentpaneltwolong"	type="password"	name="loginpassword"	placeholder="password"	value="<?php if(isset($_POST['loginpassword'])){echo $_POST['loginpassword'];}?>">
						<input class="signincontentpanetwocheck"	type="checkbox"	name="loginremember"	<?php if(isset($_POST['loginremember'])){echo 'checked';}?>>keep me logged in
						<input id="logintimezoneinput" 				type="hidden"	name="logintimezoneoffset">
						<script>
							document.getElementById('logintimezoneinput').value=tzOffset = (new Date()).getTimezoneOffset();
						</script>
						<input class="signincontentpanetwosubmit"	type="submit"	name="login"			value="login">
						<?php
						if(isset($postErrorMessage)&&!empty($postErrorMessage))
						{
							echo '<div class="ns"><div id="signincontentpanelerror">'.$postErrorMessage.'</div></div>';
						}
						?>
					</form>
					<form action="http://ramity.ddns.net/signin" method="post" id="signincontentpanetwosign">
						<input class="signincontentpaneltwolong"	type="email"	name="registeremail"			placeholder="email"				value="<?php if(isset($_POST['registeremail'])){echo $_POST['registeremail'];}?>" 		autocomplete="off">
						<input class="signincontentpaneltwolong"	type="text"		name="registerusername"			placeholder="username"			value="<?php if(isset($_POST['registerusername'])){echo $_POST['registerusername'];}?>" autocomplete="off">
						<input class="signincontentpaneltwolong"	type="password"	name="registerpassword"			placeholder="password"			value="<?php if(isset($_POST['registerpassword'])){echo $_POST['registerpassword'];}?>">
						<input class="signincontentpaneltwolong"	type="password"	name="registerconfirmpassword"	placeholder="confirm password"	value="<?php if(isset($_POST['registerconfirmpassword'])){echo $_POST['registerconfirmpassword'];}?>">
						<input id="registertimezoneinput" 			type="hidden"	name="registertimezoneoffset">
						<script>
							document.getElementById('registertimezoneinput').value=tzOffset = (new Date()).getTimezoneOffset();
						</script>
						<input class="signincontentpanetwosubmit"	type="submit"	name="register"					value="create account">
					</form>
				</div>
			</div>
		</div>
		<div id="signinimgbanner">
			<div id="signinimgbannerinr">Like games? Reviews soon to come!</div>
		</div>
		<div id="signinimg" style="background-image:url('http://ramity.ddns.net/img/killzone4k.jpg');">
			<div id="signinimgpos">
				<a href="http://killzone3.killzone.com/kz3/home.html">
					<div id="signinimglink">Wana check out Killzone 3?</div>
				</a>
			</div>
		</div>
		<?php require_once('C:/wamp/modules/block/footer.php');?>
	</body>
</html>