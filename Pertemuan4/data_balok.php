<?php 
		require_once "class_balok.php";
	
		$Balok1 = new Balok(7, 2, 4);
		$Balok2 = new Balok(15, 13,5);
		$Balok3 = new Balok(30,4,5);
		$Balok4 = new Balok(25,7,8);

		 
	
		echo"<br> Jadi Luas Balok 1 adalah = " .$Balok1->getLuas();
		echo"<br> Jadi Luas Balok 2  adalah= " .$Balok2->getLuas();
		echo"<br> Jadi Luas Balok 3 adalah = " .$Balok3->getLuas();
		echo"<br> Jadi Luas Balok 4 adalah = " .$Balok4->getLuas();
		
		echo"<br>";

		echo"<br> Jadi keliling Balok 1 adalah = " .$Balok1->getKeliling();
		echo"<br> Jadi keliling Balok 2 adalah= " .$Balok2->getKeliling();
		echo"<br>  Jadi keliling Balok 3 adalah= " .$Balok3->getKeliling();
		echo"<br> Jadi keliling Balok 4 adalah = " .$Balok4->getKeliling();

		echo"<br>";
		echo"<br> Jadi  Volume  dari Balok 1 adalah = " .$Balok1->getVolume();
		echo"<br> Jadi Volume  dari Balok 2 adalah= " .$Balok2->getVolume();
		echo"<br> jadi Volume dari Balok 3 adalah= " .$Balok3->getVolume();
		echo"<br> jadi Volume dari Balok 4 adalah= " .$Balok4->getVolume();
?>