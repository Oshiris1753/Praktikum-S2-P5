<?php   
    class account{
        public $nomor;
        protected $saldo;

        function __construct($nomor,$saldo){
            $this->nomor = $nomor;
            $this->saldo = $saldo;
        }
        
        public function deposit($uang){
            $this->saldo = $this->saldo + $uang;
        }
        
        public function getsaldo(){
        return $this->saldo;
        }

        public function witdrawl($uang){
            $this->saldo = $this->saldo - $uang;
        }

        public function cetak(){
            echo 'nomor account : ' .$this->nomor;
            echo '<br/>saldonya : ' .$this->saldo;
        }
    }
?>
