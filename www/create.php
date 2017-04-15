<?php
if(!isset($_COOKIE['inf'])||empty($_COOKIE['inf']))
{
	header('Location:http://ramity.ddns.net/');
}
require_once('C:/wamp/modules/vars.php');
require_once('C:/wamp/modules/cookie.php');
if($inf['username']!=='ramity')
{
	header('Location:http://ramity.ddns.net/');
}
if(isset($_POST['formsubmit']))
{
	//TODO
	//buildQueryBindNoFetch('ramity_collection','INSERT INTO `reviews` (postedby,pageurl,title,1:1purl,1:2purl,1:3purl,iconurl,maintag,maintagcolor,tags,searchtags,summary,metasummary,text,dateposted,lastupdated,lastviewed,promoted,rating,type,category,designrating,featuresrating,performancerating,usabilityrating,valuerating,verdict,hidden,active,promo,promoname,promohost,promourl,promoexpired) VALUES (:postedby,:pageurl,:title,:1:1purl,:1:2purl,:1:3purl,:iconurl,:maintag,:maintagcolor,:tags,:searchtags,:summary,:metasummary,:text,:dateposted,:lastupdated,:lastviewed,:promoted,:rating,:type,:category,:designrating,:featuresrating,:performancerating,:usabilityrating,:valuerating,:verdict,:hidden,:active,:promo,:promoname,:promohost,:promourl,:promoexpired)'
}
?>
<!DOCTYPE>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/topbar.css">
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/footer.css">
		<link rel="stylesheet" type="text/css" href="http://ramity.ddns.net/css/create.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<title>Gaming news, reviews, and more all in one place</title>
	</head>
	<body>
		<?php require_once('C:/wamp/modules/block/topbar.php');?>
		<div id="createform">
			<div id="createforminr">
				<form id="createforminrform" action="http://ramity.ddns.net/create.php" method="post">
					<textarea class="forminput" name="postedby">postedby</textarea>
					<textarea class="forminput" name="title">title</textarea>
					<textarea class="forminput" name="1:1purl">1:1purl</textarea>
					<textarea class="forminput" name="1:2purl">1:2purl</textarea>
					<textarea class="forminput" name="1:3purl">1:3purl</textarea>
					<textarea class="forminput" name="iconurl">iconurl</textarea>
					<textarea class="forminput" name="maintag">maintag</textarea>
					<textarea class="forminput" name="maintagcolor">maintagcolor</textarea>
					<textarea class="forminput" name="tags">tags</textarea>
					<textarea class="forminput" name="searchtags">searchtags</textarea>
					<textarea class="forminput" name="summary">summary</textarea>
					<textarea class="forminput" name="metasummary">metasummary</textarea>
					<textarea class="forminput" name="text">text</textarea>
					<textarea class="forminput" name="promoted">promoted</textarea>
					<textarea class="forminput" name="rating">rating</textarea>
					<textarea class="forminput" name="type">type</textarea>
					<textarea class="forminput" name="category">category</textarea>
					<textarea class="forminput" name="designrating">designrating</textarea>
					<textarea class="forminput" name="featuresrating">featuresrating</textarea>
					<textarea class="forminput" name="performancerating">performancerating</textarea>
					<textarea class="forminput" name="usabilityrating">usabilityrating</textarea>
					<textarea class="forminput" name="valuerating">valuerating</textarea>
					<textarea class="forminput" name="verdict">verdict</textarea>
					<textarea class="forminput" name="promo">promo</textarea>
					<textarea class="forminput" name="promoname">promoname</textarea>
					<textarea class="forminput" name="promohost">promohost</textarea>
					<textarea class="forminput" name="promourl">promourl</textarea>
					<input id="formsubmit" type="submit" name="createsubmit" value="create">
			</div>
		</div>
		<?php require_once('C:/wamp/modules/block/footer.php');?>
	</body>
</html>