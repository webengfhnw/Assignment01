<html>
<head>
    <title> ASCII Code Page 2</title>
</head>
<body>
<table border="1">
    <?php
    // 14 values (y-axis)
    for ($y = 0; $y <= 13; $y++) {
        echo "<tr>";
        // row 16 values
        for ($x = 0; $x <= 15; $x++) {
            $z = 32 + $y * 16 + $x;
            echo "<td>";
            echo "<small><small>$z&nbsp;</small></small>";
            echo "<strong>&nbsp;&#$z;</strong>";
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>