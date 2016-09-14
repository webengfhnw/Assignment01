<html>
<head>
    <title>Date Extended</title>
</head>
<body>
<?php
echo date("d.m.y") . "<br>";

$weekday = date("l");
$date = date("j. F Y");
$time = date("H:i");
echo "Today it is $weekday the $date.<br>";
echo "It is now $time.";
?>
</body>
</html>