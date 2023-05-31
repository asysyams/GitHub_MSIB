<?php
//inisialisasi array 1 d
$m1 =['nim'=>'02233011','nama'=>'asy','nilai'=>80];
$m2 =['nim'=>'02233019','nama'=>'hari','nilai'=>65];
$m3 =['nim'=>'02233018','nama'=>'cimma','nilai'=>70];
$m4 =['nim'=>'02233017','nama'=>'ence','nilai'=>39];
$m5 =['nim'=>'02233016','nama'=>'ifan','nilai'=>40];
$m6 =['nim'=>'02233015','nama'=>'alya','nilai'=>65];
$m7 =['nim'=>'02233014','nama'=>'nisal','nilai'=>59];
$m8 =['nim'=>'02233013','nama'=>'atri','nilai'=>25];

$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['no','nim','nama','nilai','keterangan','grade','predikat'];

//fungsi sederhana
$jumlah_mahasiswa = count($mahasiswa);
$nilai_mahasiswa = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai_mahasiswa);
$rata_nilai = $total_nilai / $jumlah_mahasiswa;
$max_nilai = max($nilai_mahasiswa);
$min_nilai = min($nilai_mahasiswa);
$keterangan = [
    'jumlah mahasiswa'=>$jumlah_mahasiswa,
    'nilai tertinggi mahasiswa'=>$max_nilai,
    'nilai terendah mahasiswa'=>$min_nilai,
    'nilai rata rata mahasiswa'=>$rata_nilai,
    ]
?>

<table border="1px" width="100%" bgcolor="#F5F5DC">
    <thead>
        <tr>
            <?php
            foreach($ar_judul as $judul){
            ?>
            <th><?= $judul ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        //keterangan
        $no=1;
        foreach($mahasiswa as $mhs){
            $ket = ($mhs['nilai']>=60) ? 'lulus' : 'gagal';

            //grade
            if($mhs['nilai']>= 81 && $mhs['nilai']<=100)$grade='A';
            else if($mhs['nilai']>= 75 && $mhs['nilai']<= 80)$grade='B';
            else if($mhs['nilai']>= 60 && $mhs['nilai']<= 74)$grade='C';
            else if($mhs['nilai']>= 30 && $mhs['nilai']<= 59)$grade='D';
            else if($mhs['nilai']>= 0 && $mhs['nilai']<= 29)$grade='E';
            else $grade = '';

            //predikat (switch case)
            switch ($grade){
                case "A" : $predikat = "memuaskan"; break;
                case "B" : $predikat = "bagus"; break;
                case "C" : $predikat = "cukup"; break;
                case "D" : $predikat = "kurang"; break;
                case "E" : $predikat = "buruk"; break;
                default : $predikat ="";     
            }
        ?>
            <tr>
            <td><?= $no ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
            </tr>
        <?php $no++; } ?>
        
    </tbody>
    <tfoot>
        <?php
        foreach($keterangan as $ket => $hasil){
        ?>
        <tr>
            <th colspan="6"><?= $ket ?></th>
            <th><?= $hasil ?></th>
        </tr>
        <?php } ?>
    </tfoot>
</table>