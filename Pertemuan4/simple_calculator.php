<?php
    class Calculator {
        private $bilangansatu;
        private $bilangandua;
        
        public function __construct($bilsatu, $bildua,) {
            $this->bilangansatu = $bilsatu;
            $this->bilangandua = $bildua;
        }

        public function getPertambahan() {
            $tambah = ($this->bilangansatu + $this->bilangandua);
            return $tambah;
           }

        public function getPengurangan() {
            $kurang = ($this->bilangansatu - $this->bilangandua);
            return $kurang;
        }

        public function getPembagian() {
            $bagi = ($this->bilangansatu / $this->bilangandua);
            return $bagi;
        }

        public function getPerkalian() {
            $kali = ($this->bilangansatu * $this->bilangandua);
            return $kali;
        }
        // Method lainnya
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(200, 20);
    echo "<br><h2>Oke baiklah berikut di bawah ini hasil perhitungan dari pembagian pengurangan,perkalian ,dan pertambahan </h2>";
   
    echo "<br>Jadi  Hasil dari 200 di tambah  20 adalah = " . $calculator->getPertambahan();
    echo "<br>Jadi  Hasil dari 200 di kurangi  20 adalah = " . $calculator->getPengurangan();
    echo "<br>Jadi  Hasil dari 200 di bagi  20 adalah = " . $calculator->getPembagian();
    echo "<br>Jadi  Hasil dari 200 di kalikan 20 adalah = " . $calculator->getPerkalian();
?>