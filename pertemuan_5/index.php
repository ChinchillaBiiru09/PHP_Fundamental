<?php
// Pertemuan 5 - Array
// => varibale yang dapat menyimpan lebih dari 1 value
// => pasangan antara key(index yg dimulai dari 0) dan value
// nilai dalam array bisa disebut 'elemen'
// elemen boleh memiliki tipe data yang berbeda
$x = 123; // contoh variable biasa


// # Contoh variable array
// 2 cara membuat array
// - Cara lama (sebelum php versi 5.4)
$days = array("getsu", "ka", "sui", "moku", "kin", "do", "nichi"); // string
$bango = array(1, 2, 3, 4, 5);

// - Cara baru
$months = ["ichi", "ni", "san", "shi", "go"];


// # Menampilkan array
// echo $days; -> akan menghasilkan error
// var_dump() atau print_r() -> untuk menampilkan array (lebih cocok untuk debugging)
echo "Vardump => ";
var_dump($days); // result => array(7) { [0]=> string(5) "getsu" [1]=> string(2) "ka" [2]=> string(3) "sui" [3]=> string(4) "moku" [4]=> string(3) "kin" [5]=> string(2) "do" [6]=> string(5) "nichi" }
echo "<br>";
echo "Printr => ";
print_r($months); // result => Array ( [0] => ichi [1] => ni [2] => san [3] => shi [4] => go )


// # Menampilkan 1 elemen array
echo "<br>";
echo $days[0];
echo "<br>";
echo $months[1];


// # Menambahkan elemen pada array
echo "<br>";
echo "<br>";
$months[] = "roku";
var_dump($months);
echo "Array month baru => ";
var_dump($months);


// # Menampilkan array pada client side
// Contoh dapat dilihat pada file latihan.php


// Array Multidimensi
// Contoh dapat dilihat pada file latihan2.php

?>