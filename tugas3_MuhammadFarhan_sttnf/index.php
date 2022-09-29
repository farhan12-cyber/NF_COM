<?php
$ns1 = ['id'=>1,'nim'=>'01101','nama'=>'Muhammad','nilai'=>84];
$ns2 = ['id'=>2,'nim'=>'01121','nama'=>'Farhan','nilai'=>50];
$ns3 = ['id'=>3,'nim'=>'01130','nama'=>'Amelia','nilai'=>86];
$ns4 = ['id'=>4,'nim'=>'01134','nama'=>'Andani','nilai'=>91];
$ns5 = ['id'=>1,'nim'=>'01101','nama'=>'abdurrahman','nilai'=>84];
$ns6 = ['id'=>2,'nim'=>'01121','nama'=>'ziyad','nilai'=>50];
$ns7 = ['id'=>3,'nim'=>'01130','nama'=>'rojul','nilai'=>86];
$ns8 = ['id'=>4,'nim'=>'01134','nama'=>'munir','nilai'=>91];
$ns9 = ['id'=>3,'nim'=>'01130','nama'=>'aufa','nilai'=>86];
$ns10 = ['id'=>4,'nim'=>'01134','nama'=>'billah','nilai'=>91];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5, $ns6 , $ns7, $ns8,$ns9, $ns10];
$jumlah_siswa = count($ar_nilai);
$jml_nilai = array_column($ar_nilai,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_siswa;
// function kelulusan($nilai_tugas){
//     if($nilai_tugas >= 55){
//         return 'Anda Lulus';
//     }else{
//         return 'Anda Tidak Lulus';
//     }
// }
$keterangan = [
    'Jumlah Siswa'=>$jumlah_siswa,
    'Total Nilai'=>$total_nilai,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata-Rata Nilai'=>$rata2
];
?>

<h2 align="center">Daftar Nilai Siswa</h2>
<!-- buka table -->
<table border="1" width="100%">
<thead>
    <tr>
        <th>
            No
        </th>
        <th>
            NIM
        </th>
        <th>
            Nama
        </th>
        <th>
            Nilai
        </th>
        <th>
            Grade
        </th>
        <th>
            Predikat
        </th>
        <th>
            keterangan
        </th>
    </tr>
</thead>
<tbody>
    <?php
    $nomor = 1;
    foreach ($ar_nilai as $nilai) {
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nilai['nim'].'</td>';
echo '<td>'.$nilai['nama'].'</td>';
echo '<td>'.$nilai['nilai'].'</td>';
if($nilai['nilai'] >= 85 && $nilai['nilai'] <= 100) $grade = 'A';
else if($nilai['nilai'] >= 75 && $nilai['nilai'] < 85) $grade = 'B';
else if($nilai['nilai'] >= 60 && $nilai['nilai'] < 75) $grade = 'C';
else if($nilai['nilai'] >= 30 && $nilai['nilai'] < 60) $grade = 'D';
else if($nilai['nilai'] >= 0 && $nilai['nilai'] < 30) $grade = 'E';
else $grade = '';
switch ($grade) {
    case 'A': $predikat = 'Memuaskan'; break;
    case 'B': $predikat = 'Bagus'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
}
echo '<td>'.$grade.'</td>';
echo '<td>'.$predikat.'</td>';
$ket = ($nilai['nilai'] >= 55)?"Lulus":"Gagal";
echo '<td>'.$ket.'</td>';
echo '<tr/>';
$nomor++;
}
?>
<!-- tutup table -->
</tbody>
<tfoot>
    <?php
    foreach ($keterangan as $ket => $hasil) {
    ?>
    <tr>
        <th colspan="6"><?= $ket ?></th>
        <th><?= $hasil ?></th>
    </tr>
    <?php } ?>
</tfoot>
</table>
