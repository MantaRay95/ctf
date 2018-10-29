<?php

echo $_POST["password"];

if(sha1($_POST["password"])==sha1("It16018938@#1")){
	echo "flag";
}else{
	header("Location:challenge.html");
}

?>