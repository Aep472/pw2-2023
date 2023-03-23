<?php

    class Lingkaran {
        // Property
        private $r;
        const PHI = 3.14;
        
        // Method
        function __construct($jari){
            $this->r = $jari;
        }


        function getLuas(){
            $luas = self::PHI * pow($this->r,2);
            return $luas;
        }

        function getKel(){
            $kel = 2 * self::PHI * $this->r;
            return $kel;
        }
    }

?>