<?php
$ua = $_SERVER["HTTP_USER_AGENT"];
$layout_mode = "";
if(preg_match("/Mobile-Viewer\: true/", $ua) || (preg_match("/Tablet-Viewer\: true/", $ua))) {
	$layout_mode = "sp";
}
else {
	$layout_mode = "pc";
}
?>
