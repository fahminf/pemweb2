<?php
class Balok {
  public $panjang;
  public $lebar;
  public $tinggi;

  function __construct($panjang, $lebar, $tinggi) {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
    $this->tinggi = $tinggi;
  }

  public function hitungVolume() {
    return $this->panjang * $this->lebar * $this->tinggi;
  }
}
$balok = new Balok(10, 7, 8);
$volumeBalok = $balok->hitungVolume();
echo "Volume Balok: " . $volumeBalok . "<br>";