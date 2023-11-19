<?php
$tinggi = 5;

for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "  ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = $tinggi - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "  ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>
