<?php
class Segitiga {
    // Buka class
    public $alas;
    public $tinggi;
    public $sisi;
    // buat funsi getluas untuk menghitung luas lingkaran
    function getLuas($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
        return $this->alas * $this->tinggi / 2;
    }
    // buat funsi get keliling untuk menghitung keliling lingkaran
    function getKeliling($a, $b, $c){
        $this->sisi1 = $a;
        $this->sisi2 = $b;
        $this->sisi3 = $c;
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
    // tutup class
}
?>