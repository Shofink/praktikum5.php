<?php
class dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaminuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($harga){
        $this->hargaSegelas = $harga;
        return $harga;
    }
    public function volgelas ($vlmg){
        $this->volumeGelas = $vlmg;
        return $vlmg;
    }
    function nama($nama){
        $this->namaminuman = $nama;
        return $nama;
    }

}

$wadah = new Dispenser();
echo '<br/>' .$wadah -> isi('Isi : 100 L');
echo '<br/>' .$wadah -> harga('Harga : Rp 10000,-');
echo '<br/>' .$wadah -> volgelas('Volume Gelas : 1 L');
echo '<br/>' .$wadah -> nama('Nama Minuman : Olatte');
?>