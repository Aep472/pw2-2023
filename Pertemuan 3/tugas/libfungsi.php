<?php
    
    function dataNilai($uts, $uas, $tugas){
        $dataNilai = $uts + $uas + $tugas;
        $dN = $dataNilai / 3; 
    
        return $dN;
    }

    function kelulusan($dN){
        if ($dN >=55) {
            return "Lulus";
        }else {
            return "Tidak Lulus";
        }
}
    

    function grade($dN){
        if ($dN >= 100) {
            return "A";
        } elseif ($dN >= 84) {
            return "B";
        } elseif ($dN >= 69) {
            return "C";
        } elseif ($dN >= 55) {
            return "D";
        } elseif ($dN >= 35) {
            return "E";
        } else {
            return "I";
        }
    }

    function predikat($dN){
        $grade = grade($dN);
    switch ($grade) {
        case "A":
            return "Sangat Memuaskan";
            break;
        case "B":
            return "Memuaskan";
            break;
        case "C":
            return "Cukup";
            break;
        case "D":
            return "Kurang";
            break;
        case "E":
            return "Sangat Kurang";
            break;
        default:
            return "Tidak Ada";
            break;
        }   
    }


?>