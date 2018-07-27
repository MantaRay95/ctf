<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "d5244a331aad290f924ed5ed8c070d65d2e0633e")
{
    header('Location: http://localhost/ctf/level1.html');
    exit;
}
else
{
    header('Location: http://localhost/ctf/indexerror.html');
    exit;
}
?>

</body>
</html>