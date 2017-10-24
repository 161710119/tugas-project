<?php
class kendaraan
{
public $namakendaraan;
public $namapemilik;
public $merek;
public $warna;

public function __construct($namakendaraan, $namapemilik, $merek, $warna)
{
$this->nk = $namakendaraan;
$this->np  = $namapemilik;
$this->mrk = $merek;
$this->wrn = $warna;

}
}


?>