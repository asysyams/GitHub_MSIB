<?php
require 'pegawai.php';

$pegawai1 = new pegawai('01111', 'Asy', 'manager', 'islam', 'menikah');
$pegawai2 = new Pegawai('01112', 'Atri', 'asisten manager', 'hindu', 'jomblo');
$pegawai3 = new Pegawai('01113', 'Ifan', 'kepala bagian', 'kristen', 'lajang');
$pegawai4 = new Pegawai('01114', 'Hari', 'staff', 'islam', 'menikah');
$pegawai5 = new Pegawai('01115', 'Nisal', 'staff', 'konghuchu', 'lajang');


$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}

?>