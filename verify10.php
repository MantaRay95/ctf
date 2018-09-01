<html>
<body>
<?php

$str = $_POST["inputPassword2"];

if (sha1($str) == "test")
{
    header('Location: http://localhost/ctf/level3.html');
    exit;
}
else
{
    header('Location: http://localhost/ctf/level1.html');
    exit;
}

?>

</body>
</html>
