<?php

   function winRate($menang,$kalah){
    $total = $menang + $kalah;
    $wr =$menang / $total;

    return $wr;

   }
    
   function cekTier($we){
     if ($wr>=0.7){
          return 'Mythic';
     }elseif ($wr  >= 0.45){
        
         return 'Legend';
     }elseif ($wr  >= 0.2){
        return 'Epic';
     }else{
        return 'master';
     }
       
  }

  function predikat ($wr){
      switch (cekTier($wr)) {
          case 'Mythic':
              return 'Sangat Memuaskan';
              break;

          case 'Legend':
               return 'Sangat Memuaskan';
               break;

          case 'Epic':
               return 'Sangat Memuaskan';
               break;

         default:
             return 'kurang';
             break;

      }
  }


?>