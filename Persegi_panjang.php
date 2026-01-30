<?php
class PersegiPanjang{


public $panjang;
public $lebar;

public function hitungLuas(){
    return $this->panjang * $this->lebar;
}

public function hitungKeliling(){
    return 2 * ($this->panjang * $this->lebar);
}
}

//penulisan object
$pp1 =  new PersegiPanjang();
$pp1->panjang = 10;
$ppl->lebar = 5;
//object 2
$pp2 = new PersegiPanjang();
$pp2->panjang = 7;
$pp2->lebar = 3;

//cetek
echo "<h3>Persegi Panjang 1</h3>";
echo "Panjang : {$pp1->panjang}<br>";
echo "Lebar : {$pp1->lebar}<br>";

?>