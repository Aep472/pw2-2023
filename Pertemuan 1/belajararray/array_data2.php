<?php
//buatlah data  buah dengan array multidimensi
$m_fruitz = [
['id'=>1, 'nama'=>'Pisang','warna'=> 'Kuning','stok'=>84,'harga'=>18000 ,'description' => 'Pisang dengan rasa manis'],
['id'=>2, 'nama'=>'Melon','warna'=> 'Hijau','stok'=>90,'harga'=>80000 ,'description' => 'Melon dengan rasa manis dan sedikit gurih'],
['id'=>3, 'nama'=>'Delima','warna'=> 'Merah','stok'=>95,'harga'=>50000 ,'description' => 'Delima dengan rasa manis menyegarkan'],
['id'=>4, 'nama'=>'Mangga','warna'=> 'Orange','stok'=>95,'harga'=>25000 ,'description' => 'mangga dengan rasa asam dan manis  dsangat cocok']
];

?>

<h3 style="text-align: center;" >Daftar Buah</h3>
<table border="1" width="100%">
<thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Warna</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        
    </tr>
</thead>
<tbody>
    <?php

    foreach ($m_fruitz as $fruit){
        echo '<td>'.$fruit['id'].'</td>';
        echo '<td>'.$fruit['nama'].'</td>';
        echo '<td>'.$fruit['warna'].'</td>';
        echo '<td>'.$fruit['stok'].'</td>';
        echo '<td>'.$fruit['harga'].'</td>';
        echo '<td>'.$fruit['description'].'</td>';
        echo '<tr/>';
       
    }
    ?>
</tbody>
</table>