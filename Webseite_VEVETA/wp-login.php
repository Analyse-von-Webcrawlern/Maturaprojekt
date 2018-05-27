
<?php
	header("HTTP/1.1 200 OK");
	header("Status: 200 OK");
	header("Expires: ".gmdate("D, d M Y H:i:s")." GMT");
	header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header("Content-Encoding: iso-8859-1");
?>  <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Log In ‹ Maturaprojekt — WordPress</title>
<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="stylesheet" href="./Log In ‹ Maturaprojekt — WordPress_files/load-styles.php" type="text/css" media="all">
<meta name="robots" content="noindex,follow">
<meta name="viewport" content="width=device-width">
</head>
<body class="login login-action-login wp-core-ui  locale-en-us" cz-shortcut-listen="true">
<?php
  if (isset($_POST["log"])) {
    $file = fopen("/home/thomas/Schreibtisch/failed-login-attemps.log", "a");
		$txt = getenv('REMOTE_ADDR')." [".date('d.m.Y-H.i.s')."] ".$_POST['log']." ".$_POST['pwd']." - wp-login.php\n";
		fwrite($file, $txt);
		fclose($file);
  }

 ?>
<div id="login">
<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a></h1>

<form name="loginform" id="loginform" action="wp-login.php" method="post">
<p>
<label for="user_login">Username or Email Address<br>
<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
</p>
<p>
<label for="user_pass">Password<br>
<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
</p>
<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label></p>
<p class="submit">
<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
<input type="hidden" name="redirect_to" value="maturaprojekt.ddns.net/wp-admin/">
<input type="hidden" name="testcookie" value="1">
</p>
</form>

<p id="nav">
<a href="maturaprojekt.ddns.net/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

<p id="backtoblog"><a href="maturaprojekt">← Back to Maturaprojekt</a></p>

</div>


<div class="clear"></div>


</body></html>
