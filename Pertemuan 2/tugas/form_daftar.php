<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
	<form method="POST" action="hasil_daftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
		<h1>Form Pendaftaran</h1>
		<hr />
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat"></textarea  required>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="tel" class="form-control" id="telepon" name="telepon" required>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
	</div>
</body>
</html>