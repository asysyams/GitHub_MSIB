<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$lingkaran = new lingkaran(30);
$persegiPanjang = new persegiPanjang(15, 11);
$segitiga = new segitiga(17, 3);

$ar_data = [$lingkaran, $persegiPanjang, $segitiga];

foreach($ar_data as $data){
    $data->cetak();
}
?>