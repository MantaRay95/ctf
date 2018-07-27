<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "e41218a880ccfe98633d56987f1fc2c13e5b0568")
{
    header('Location: http://localhost/ctf/level3.html');
    exit;
}
else
{
    header('Location: http://localhost/ctf/level2.html');
    exit;
}
?>

</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: Pavithra
 * Date: 7/26/2018
 * Time: 9:21 PM
 */