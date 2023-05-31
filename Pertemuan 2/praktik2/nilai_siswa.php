<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    
    <?php

        // Variable untuk menangkap data
        $nama = $_POST['nama_lengkap'];
        $matkul = $_POST['matkul'];
        $uts = $_POST['nilai_uts'];
        $uas = $_POST['nilai_uas'];
        $tugas = $_POST['nilai_tugas'];

        $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

        // Tampilkan data variable
        echo '<br>Nama siswa : ' . $nama;
        echo '<br>Mata Kuliah : ' . $matkul;
        echo '<br>Nilai UTS : ' . $uts;
        echo '<br>Nilai UAS : ' . $uas;
        echo '<br>Nilai Tugas : ' . $tugas;
        echo '<hr>';
        echo '<br>Nilai Total : ' . $total_nilai;
        echo '<hr>'
    ?>

</body>
</html>