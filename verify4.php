<html>
<body>

<?php
$str = $_POST["inputPassword4"];

if (sha1($str) == "40662a5f1e7349123c4012d827be8688d9fe013b")
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