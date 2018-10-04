<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "d6cb170d064215dec27095a068b586648d4a7c54")
{
    header('Location: level9.html');
    exit;
}
else
{
    header('Location: level8verify.html');
    exit;
}
?>

</body>
</html>