<html>
<head>
    <title> ASCII code page 3</title>
</head>
<body>
<table border="1">
    <?PHP
    // start number of the first 16 rows
    for ($y = 32; $y <= 47; $y++) {
        echo "<tr>";
        // loop over the 14 columns
        for ($x = 0; $x <= 13; $x++) {
            $z = $y + $x * 16;
            echo "<td>";
            echo "<small><small>$z&nbsp;</small></small>";
            echo "<b>&nbsp;&#$z;</b>";
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>