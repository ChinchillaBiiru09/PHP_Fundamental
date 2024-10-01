<?php
// Pertemuan 2 - PHP Fundamental
// Sintaks PHP


// * contoh komentar php
// * spasi tidak mempengaruhi kode php
/*
    * contoh komentar multiline
*/


// # Standar Output
// echo, print
// print_r -> khusus digunakan untuk mencetak isi array | biasa digunakan untuk debugging
// var_dump -> melihat isi dan informasi variable | biasa digunakan untuk debugging
// Example:
echo "Nur Khafidah"; // => Nur Khafidah | khusus string bisa gunakan "" atau '' | dalam php "" lebih powerfull karena dapat digunakan interpolasi (varable didalam petik)
echo 12345; // => 12345
echo true; // => 1 | false => (null/kosong)

print "Ren Akira"; // => Ren Akira

print_r("蓮・明煌"); // => 蓮明煌

var_dump("れんあきら"); // => string(15) "れんあきら" | typedata(size) "value"


// # Penulisan sintaks
/* 1. PHP di dalam HTML | contoh: <h1>Selamat datang, <?php echo "Fidah"; ?></h1>*/
/* 2. HTML di dalam PHP -> kurang disarankan | contoh: <?php echo "<p> sslamat datang! </p>"; ?> */


// # Varible dan Tipe data
// varible : 
//  - tidak perlu mendefinisikan tipe data;
//  - tidak boleh mengandung spasi ditengah;
//  - tidak boleh diawali angka, tapi boleh mengandung angka;
// example:
$name = "Ren Akira";
echo "Nama saya $name"; // -> contoh interpolasi


// # Operator
// 1. aritmatika -> + - * / %
$a = 2;
$b = 4;
echo $a + $b;

// 2. penggabung string / concat -> .
$name1 = "Ren";
$name2 = "Akira";
echo $name1 . " " . $name2;

// 3. assignment -> = += -+ *= /= %= .=
$b = 5;
echo $b; // => 5

$b += 4;
echo $b; // => 9

$name1 .= "Ren";
echo $name1; // => RenRen

// 4. perbandingan -> < > <= >= != == | tidak melakukan pengecekan tipe data, hanya value saja
var_dump(1 > 5); // => bool(false)

// 5. identitas -> === !== | cek tipe data dan value
var_dump(1 === "1"); // => bool(false)

// 6. logika -> && || !
$c = 20;
var_dump($c > 10 && $c < 30); // => bool(true)

?>