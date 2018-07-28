<html>
<body>

<?php
$str = $_POST["inputPassword4"];

if (sha1($str) == "A85B1AAC326273A8691C80E3DDD2F28BC11BC4BD")
{
    header('Location: http://localhost/ctf1/level5.html');
    exit;
}
else
{
    header('Location: http://localhost/ctf1/level4.html');
    exit;
}
?>

</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: Viraj
 * Date: 7/26/2018
 * Time: 9:21 PM
 */