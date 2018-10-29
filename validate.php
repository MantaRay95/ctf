<?php
//echo $_POST["flag_unvalidated"];
//echo $_POST["level_code"];
//echo (int)$_POST["level_id"];

$lvlstatus="flag_captured";
$val_string=$_POST["flag_unvalidated"].$_POST["level_code"].$lvlstatus;
$flagid=(int)$_POST["level_id"];
$flags=array("error",sha1("flag1"),sha1("flag2"),sha1("flag3"),sha1("flag3"),sha1("flag3"),sha1("flag3"),sha1("flag3"),sha1("flag3"),sha1("flag3"),"16b05537dcd7cecbbf37a3773cd1365e01178611",sha1("flag3"),sha1("flag3"),sha1("flag3"),sha1("flag3"),sha1("flag3"));

//echo sha1($_POST["level_code"])
//echo $flagid;


if($flags[$flagid]==sha1($_POST["flag_unvalidated"])){
	$cookie_name=sha1($_POST["level_code"]);
	$cookie_value = sha1($val_string);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header("Location:dashboard.php");
}else{
	header("Location:dashboard.php");
}
//echo sha1($val_string);

//echo $val_string;

//$cookie_name = "level_info";


?>