<?php
include("../res/x5engine.php");
$nameList = array("rul","k5y","mjw","xen","gsh","8ky","c3w","cr5","7kp","5z5");
$charList = array("P","3","R","G","5","G","Z","8","P","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
