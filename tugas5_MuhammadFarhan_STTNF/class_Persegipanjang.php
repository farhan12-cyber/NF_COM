<?php
class Persegipanjang {
    // Buka class
    public $panjang;
    public $lebar;
    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    // buat funsi getluas untuk menghitung luas lingkaran
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    // buat funsi get keliling untuk menghitung keliling lingkaran
    function getKeliling(){
        return 2 * $this->panjang + $this->lebar;
    }
    // tutup class
}
?>