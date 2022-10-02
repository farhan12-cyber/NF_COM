<?php
class Pegawai
{
    //member1 variabel
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    //variabel konstanta & static di dlm class
    static $jml = 0;

    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        //dst ...
        self::$jml++;
    }
    //member3 method2
    public function setGapok()
    {
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kepala Bagian':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
                //dst ....
            default:
                $gapok = 0;
        }

        return $gapok;
    }
    public function setTunjab()
    {
        $tunjab = $this->setGapok() * 20 / 100;
        return $tunjab;
    }
    public function setTunkel()
    {
        $tunkel = ($this->status == 'Menikah') ? 0.1 * $this->setGapok() : 0;
        return $tunkel;
    }
    public function setGator()
    {
        $gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        return $gator;
    }
    public function setZakatProfesi()
    {
        $zakat = ($this->agama == 'Islam' && $this->setGator() > 6000000) ? 0.025 * $this->setGator() : 0;
        return $zakat;
    }
    public function setGajiBersih()
    {
        $gaber = $this->setGator() - $this->setZakatProfesi();
        return $gaber;
    }
    public function mencetak()
    {
        echo '<tr><td>'. $this->nama. '</td>';
        echo '<td>'.$this->nip. '</td>';
        echo '<td>'.$this->jabatan.'</td>';
        echo '<td>'.$this->agama.'</td>';
        echo '<td>'.$this->status.'</td>';
        echo '<td>'.number_format($this->setGapok()).'</td>';
        echo '<td>'.number_format($this->setTunjab()).'</td>';
        echo '<td>'.number_format($this->setTunkel()).'</td>';
        echo '<td>'.number_format($this->setZakatProfesi()).'</td>';
        echo '<td>'.number_format($this->setGajiBersih()).'</td>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body style="background-color: orange; color:white">
    <h2 align="center">Data Kepegawaian</h2>
    <table border="1" width="100%">
<thead>
    <tr>
        <th>
            Nama
        </th>
        <th>
            NIP
        </th>
        <th>
            Jabatan
        </th>
        <th>
            Agama
        </th>
        <th>
            Status
        </th>
        <th>
            Gaji Pokok
        </th>
        <th>
            Tunjangan Jabatan
        </th>
        <th>
            Tunjangan Keluarga
        </th>
        <th>
            Gaji Kotor
        </th>
        <th>
            Zakat Profesi
        </th>
    </tr>
</thead>
<?php
//ciptakan object
$p1 = new Pegawai('01103180', 'Muhammad', 'Manager', 'Islam', 'Menikah');
$p2 = new Pegawai('01103181', 'Farhan', 'Kepala Bagian', 'Kristen', 'Belum Menikah');
$p3 = new Pegawai('01103182', 'Amelia', 'Staff', 'Budha', 'Belum Menikah');
$p4 = new Pegawai('01103183', 'Andani', 'Asisten Manager', 'Islam', 'Menikah');
$p5 = new Pegawai('01103184', 'Sirojul', 'Staff', 'Hindu', 'Menikah');


// array associative
$karyawan = [$p1, $p2, $p3, $p4, $p5];
foreach ($karyawan as $pekerja) {
    $pekerja -> mencetak();
}
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;
?>
</body>
</html>