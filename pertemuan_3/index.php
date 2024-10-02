<?php
// Pertemuan 3 - Control flow
// # perulangan
// for
// index dalam php dimulai dari 0
for ($i=0; $i < 5; $i++) { 
    # code...
    echo "Hello World - $i <br>";
}

// while
$a = 0;
while ($a <= 10) {
    # code...
    echo "Hello world! <br>";
    $a++;
}

// do ... while
$a = 0;
do {
    # code...
    echo "$a Hello world! <br>";
    $a++;
} while ($a <= 10);

// foreach : pengulangan khusus array
echo "<a href='latihan1.php'>Contoh Foreach</a> <br>";


// # perbandingan / percabangan / pengkondisian
// if .. else
$a = 5;
if ( $a < 10 ) {
    echo "benar<br>";
} else {
    echo "salah<br>";
}

// if .. else if .. else
$b = 10;
if ( $b > 10 ) {
    echo "besar<br>";
} else if ( $b < 10) {
    echo "kecil<br>";
} else {
    echo "bingo!<br>";
}

// ternary
// switch

?>