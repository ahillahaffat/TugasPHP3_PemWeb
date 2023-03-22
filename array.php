<?php

// Tanggal lahir
$tanggal_lahir = "2002-11-10";

//menghitung umur
$tgl_lahir = new DateTime($tanggal_lahir);
$tgl_sekarang = new DateTime();
$umur = $tgl_sekarang->diff($tgl_lahir)->format('%y tahun, %m bulan, %d hari, %h jam, %i menit, %s detik');

//profil
$profil = array(
"Ahilla Kammala",
"Ahilla Haffat Kammala"
);

?>