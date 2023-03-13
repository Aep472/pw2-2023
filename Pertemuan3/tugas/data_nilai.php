
<div class="container mt-4 mb-3">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <h2 align="center" style ="color : red;"><b>"Data Mahasiswa"<b></h2>
  <table class="table mt-3">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Aepuloh</td>
              <td>Dasar Dasar Pemrograman</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
              <td>100</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Angelita Saritri</td>
              <td>Statistika dan Probabilitas</td>
              <td>90</td>
              <td>93</td>
              <td>90</td>
              <td>91</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

        <?php

            require_once 'libfungsi.php';

            $nomor=3;

            $nama = $_POST['nama_lengkap'];
            $matkul = $_POST['matkul'];
            $uts = $_POST['nilai_uts'];
            $uas = $_POST['nilai_uas'];
            $tugas = $_POST['nilai_tugas']; 
            $dN = dataNilai($uts, $uas, $tugas);
            $grade = grade($dN);
            $predikat = predikat($dN);
            $kelulusan = kelulusan($dN);

            echo '<td>' . $nomor;
            echo '<td>' . $nama;
            echo '<td>' . $matkul;
            echo '<td>' . $uts;		
            echo '<td>' . $uas;
            echo '<td>' . $tugas;
            echo '<td>' . $dN;
            echo '<td>' . $grade;
            echo '<td>' . $predikat;
            echo '<td>' . $kelulusan;
            
        ?>

      </tbody>
</table>
</div>