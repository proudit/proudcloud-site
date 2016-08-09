<?php
$ua = $_SERVER["HTTP_USER_AGENT"];
$layout_mode = "";
if(preg_match("/iPhone|iPod/", $ua) || (preg_match("/Android/", $ua) && preg_match("/Mobile/", $ua))) {
	$layout_mode = "sp";
}
else {
	$layout_mode = "pc";
}
?>