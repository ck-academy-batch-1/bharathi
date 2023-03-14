<?php
$size = 8;

for ($row = 1; $row <= $size; $row++) {
    for ($col = 1; $col <= $size; $col++) {
        if (($row + $col) % 2 == 0) {
            echo '<div style="background-color: black; width: 50px; height: 50px; display: inline-block;"></div>';
        } else {
            echo '<div style="background-color: white; width: 50px; height: 50px; display: inline-block;"></div>';
        }
    }
    echo '<br>';
}
?>