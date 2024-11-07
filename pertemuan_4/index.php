<?php
// Pertemuan 4 - Function
// Built-in function -> fungsi bawaan (http://php.net/manual/en/funcref.php)
// 1. Date/time -> time(), date(), mktime(), strtotime()
// date()
echo date("d"); // l -> hari, d -> tgl, m -> bulan int, M -> bulan str, dts liat di dokumentasi
echo date("l, d-M-Y");


// time()
// menghasilkan serangkaian angka yang diawali dengan 1500xxxx
// disebut UNIX TimeStamp / EPOCH time
// atau, detik yang sudah berlalu sejak 1 januari 1970 (asal mula waktu didunia it)
// (http://en.wikipedia.org/wiki/Unix_time)
echo time();
echo date("l", time()+172800); //2 hari setelah hari ini
echo date("l", time()+60*60*24*2); //2 hari setelah hari ini
echo date("l", time()-60*60*24*2); //2 hari sebelum hari ini


// mktime()
// membuat sendiri detik yang telah berlalu
// mktime(jam, menit, detik, bulan, tanggal, tahun)
echo mktime(0,0,0,10,18,2001);
echo date("l", mktime(0,0,0,10,18,2001));


// strtotime()
echo strtotime("18 october 2001");
echo date("l", strtotime("18 oct 2001"));


// Yang sering digunakan
// - String
// strlen() -> menghitung panjang sebuah string
// strcmp() / compare -> menggabungkan string
// explode() -> memecah string
// htmlspecialchars() -> menjaga web dari sintaks asing


// - Utility (fungsi bantuan)
// var_dump() -> mencetak isi variable, array, atau objek
// isset() -> memastikan varible sudah pernah dibuat atau belum, nilainya boolean
// empty() -> memastikan isi variable tersedia atau tidak
// die() -> memberhentikan program (fungsinya hampir serupa dengan 'break' pada forloop)
// sleep() -> menghentikan program sementara selama 2 detik



// user-defined function -> fungsi buatan developer
// contoh tersedia di file uifunction.php

?>