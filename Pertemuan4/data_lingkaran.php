<?php

    require_once "class_Lingkaran.php";
    echo "NIlai phi =" . Lingkaran ::PHI;

    $lingkar1 = new Lingkaran(7);
    $lingkar2 = new Lingkaran(15);
    $lingkar3 = new Lingkaran(30);
    $lingkar4 = new Lingkaran(25);

    echo"<br> Luas Lingkaran 1 = " .$lingkar1->getLuas();
    echo"<br> Luas Lingkaran 2 = " .$lingkar2->getLuas();
    echo"<br> Luas Lingkaran 3 = " .$lingkar3->getLuas();
    echo"<br> Luas Lingkaran 4 = " .$lingkar4->getLuas();
    echo"<br>";
    echo"<br> kel Lingkaran 1 = " .$lingkar1->getKel();
    echo"<br> kel Lingkaran 2 = " .$lingkar2->getKel();
    echo"<br> kel Lingkaran 3 = " .$lingkar3->getKel();
    echo"<br> kel Lingkaran 4 = " .$lingkar4->getKel();


?>