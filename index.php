<?php // index.php
require_once 'openid.php';
$openid = new LightOpenID("http://10.209.133.168/fit.com/public_html/main.html");

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://10.209.133.168/fit.com/public_html/main.html/login.php'
?>

<a href="<?php echo $openid->authUrl() ?>">Login with Google</a>

