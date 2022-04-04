<?php
require_once 'class_account.php';

class Accountbank extends account{
public $costumer;
static $biaya_admin = 6500;

function __construct($nomor,$saldo,$costumer){
parent::__construct($nomor,$saldo);
$this->costumer = $costumer;
}

public function transfer($ab_tujuan,$uang){
$ab_tujuan->deposit($uang);
$this->witdrawl($uang);

}

public function cetak(){
parent::cetak();
echo '<hr/> costumer : '.$this->costumer;
}

public function getsaldo(){
return $this->saldo;
}
}
?>
