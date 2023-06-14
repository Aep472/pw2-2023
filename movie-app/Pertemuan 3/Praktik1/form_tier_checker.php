<?php
  include_once 'atas.php';
?>

   <div class="container mt-5">
	        <h1 class="text-center mb-4">Mobile Legend Tier Checker</h1>
	        <form action="" method="post">
	            <div class="form-floating mb-3">
	                <label for="nickname">Nickname</label>
	                <input type="text" class="form-control" id="nickname" name="nickname" required>
	            </div>
	            <div class="form-floating mb-3">
	                <label for="jumlahMenang">Jumlah Menang</label>
	                <input type="number" class="form-control" id="jumlahMenang" name="jumlahMenang" required>
	            </div>
	            <div class="form-floating mb-3">
	                <label for="jumlahKalah">Jumlah Kalah</label>
	                <input type="number" class="form-control" id="jumlahKalah" name="jumlahKalah" required>
	            </div>
	            <button name="submit" type="submit" class="btn btn-success">Check Tier</button>
	        </form>
		    </div>


            <?php
              require_once 'libfungsi.php';
              $nick = $_POST['nickname'];
              $win = $_POST['jumlahMenang'];
              $lose = $_POST['jumlahKalah'];
              $wr  = winRate($win, $lose);
              $tier  = cekTier($wr);
              $predikat  = predikat($wr);

            ?>

            <div class="mt-4">
                <h2>Hasil :</h2>
                <p>Nickname : <?= $nick; ?></p>
                <p>Win Rate : <?= $wr ?></p>
                <p>Tier : <?= $tier ?></p>
                <p>Predikat : <?= $predikat ?></p>
 
            </div>

            <?php
                include_once 'bawah.php';
             ?>