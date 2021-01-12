<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="/assets/bootstrap/css/bootstrap.min.css"> -->

    <title>CRUD PHP - MySQL | Tambah Data</title>
  </head>
  <body>
    <div class="container">
    	<div class="row mt-5">
    		<div class="col-md-8 offset-md-2">
    			<div class="card">
    				<div class="card-header">
    					Tambah Data
    				</div>
    				<div class="card-body">
    					<form action="simpan-siswa.php" method="post">
    						<div class="form-group">
    							<label>NISN</label>
    							<input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
    						</div>
    						<div class="form-group">
    							<label>Nama Lengkap</label>
    							<input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control">
    						</div>
    						<div class="form-group">
    							<label>Alamat</label>
    							<textarea name="alamat" rows="4" placeholder="Masukkan Alamat Siswa" class="form-control"></textarea>
    						</div>
    						<button type="submit" class="btn btn-success">Simpan</button>
    						<button type="reset" class="btn btn-warning">Reset</button>
    					</form>
    				</div>
                    <div class="card-footer text-center">
                        &copy; 2021, Jonathan Basuki.
                    </div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <!-- <script src="/assets/jquery-3.5.1.slim.min.js"></script> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>