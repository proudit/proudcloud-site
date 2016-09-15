<?php
$ua_m = $_SERVER["HTTP_CLOUDFRONT_IS_MOBILE_VIEWER"];
$ua_t = $_SERVER["HTTP_CLOUDFRONT_IS_TABLET_VIEWER"];
$layout_mode = "";
if(preg_match("true/", $ua_m) || (preg_match("true/", $ua_t))) {
	$layout_mode = "sp";
}
else {
	$layout_mode = "pc";
}
?>
