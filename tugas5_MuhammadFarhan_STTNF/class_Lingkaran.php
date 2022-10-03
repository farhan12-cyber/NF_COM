<?php
class Lingkaran {
    // Buka class
    private $jari;
    const PHI = 3.14;
    function __construct($r)
    {
        $this->jari = $r;
    }
    // buat funsi getluas untuk menghitung luas lingkaran
    function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }
    // buat funsi get keliling untuk menghitung keliling lingkaran
    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
    // tutup class
}
?>