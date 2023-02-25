<?php
$m_fruitz = [
    ['id'=>1, 'nama'=>'Pisang','warna'=> 'Kuning','stok'=>84,'harga'=>18000 ,'description' => 'Pisang dengan rasa manis'],
    ['id'=>2, 'nama'=>'Melon','warna'=> 'Hijau','stok'=>90,'harga'=>80000 ,'description' => 'Melon dengan rasa manis dan sedikit gurih'],
    ['id'=>3, 'nama'=>'Delima','warna'=> 'Merah','stok'=>95,'harga'=>50000 ,'description' => 'Delima dengan rasa manis menyegarkan'],
    ['id'=>4, 'nama'=>'Mangga','warna'=> 'Orange','stok'=>95,'harga'=>25000 ,'description' => 'mangga dengan rasa asam dan manis  dsangat cocok'],
    ['id'=>4, 'nama'=>'Semangka','warna'=> 'Hijau Tua','stok'=>75,'harga'=>30000 ,'description' => 'Semangka dengan rasa manis dan berair sangat menyegarkan'],
    ['id'=>4, 'nama'=>'Anggur','warna'=> 'Ungu','stok'=>45,'harga'=>50000 ,'description' => 'Anggur dengan rasa asam dan manis  dsangat cocok']
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h3 class="text-center mt-5 mb-1">Daftar Buah</h3><br>
    <h4 class="text-center mb-3"> Pasar Tradisional Surade</h4>
    <table class="table table-striped table-hover" border="1" width="100%">
      <thead class="thead-dark">
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
    <h3 class="text-center"><font color="blue">Selamat Berbelanja</font> </h3>
  </div>
</body>
</html>