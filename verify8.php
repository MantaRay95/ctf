<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "2985ad49543fce8f3f562f513b70ee1e0e359f81")
{
    header('Location: level8verify.html');
    exit;
}
else
{
    header('Location: level8.html');
    exit;
}
?>

</body>
</html>