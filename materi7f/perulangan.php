<?php

for ($i = 0; $i < 10; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}

?>

<?php
$ulangi = 0;

while($ulangi < 10) {
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}
?>

<?php

$ulangi = 10;

do{
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);
?>

<?php
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan My SQL",
    "Membuat Chat Bot dengan PHP"   
];

echo "<h5> Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";
?>

<?php

for ($i = 0; $i < 5; $i++){
    for($j = 0; $j < 10; $j++){
        echo "ini perulangan ke ($i, $j)<br>";
    }
}
?>