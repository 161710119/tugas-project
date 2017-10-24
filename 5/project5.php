<?php
class barang
{
public $namabarang;
public $harga;
public $merek;
public $warna;

public function __construct($namabarang, $harga, $merek, $warna)
{
$this->nb = $namabarang;
$this->hrg  = $harga;
$this->mrk = $merek;
$this->wrn = $warna;

}
}


?>