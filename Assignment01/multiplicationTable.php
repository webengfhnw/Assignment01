<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
<table border="0">
    <?PHP
    for ($y = 1; $y <= 10; $y++) {
        echo "<tr>";
        echo "<td>Multiplication of </td><td align=\"right\"><b>$y</b> =</td>";
        for ($x = 1; $x <= 10; $x++) {
            $Result = $y * $x;
            echo "<td align=\"right\">$Result</td> ";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>