<div id="topbar">
	<div id="topbarinr">
		<a id="topbarlogo" href="http://ramity.ddns.net/"></a>
		<div id="topbarnav">
			<a class="topbarnavitem" href="http://ramity.ddns.net/reviews">REVIEWS</a>
			<a class="topbarnavitem" href="http://ramity.ddns.net/blog">BLOG</a>
			<a class="topbarnavitem" href="http://ramity.ddns.net/news">NEWS</a>
			<?php
			if($GLOBALS['secureLogin'])
			{
				echo'<a class="topbarnavitem" href="http://ramity.ddns.net/signin">YOU</a>';
			}
			else
			{
				echo'<a class="topbarnavitem" href="http://ramity.ddns.net/signin">SIGN IN</a>';
			}
			?>
		</div>
	</div>
</div>