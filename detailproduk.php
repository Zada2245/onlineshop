<?php 
  session_start();
	$koneksi = new mysqli("localhost", "root", "","toko");

	$id_produk = $_GET['id'];
	$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
	$pecah = $ambil->fetch_assoc();

?>

<!-- <pre>
	<?php 
		//print_r($pecah);
	?>
</pre> -->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin/css/global.css">

    <title>SIX-TEE OLSHOP</title>
  </head>
 <body>

	
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <div class="container">
        <a class="navbar-brand" href="#">SIXTEE SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="checkout.php">Checkout</a>
           <?php if (isset($_SESSION["pelanggan"])) : ?>
              </li>
               <li >
                <a class="nav-link" href="logout.php">Log Out</a>
              </li>

           <?php else:  ?>
             </li>
               <li >
                <a class="nav-link" href="login.php">Login</a>
              </li>
           <?php endif ?>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
  </nav>
 <br>
<!-- NAVBAR -->

<!-- KONTEN -->
<form method="POST">
	<div class="content">
		<div class="container">
			<div class="row align-items-start p-3">
				
				<div class="col-md-4 mb-3">
					<img src="images/<?= $pecah['foto_produk']; ?>" class="img-fluid mx-auto d-block" style="max-height: 400px; object-fit: cover;">
				</div>

				<div class="col-md-6">
					<div class="alert alert-info">
						<h6 class="alert-heading"><?php echo $pecah['nama_produk']; ?> | <?php echo "Rp. ".$pecah['harga_produk']; ?></h6>
						<hr>
						<?php echo $pecah['deskripsi_produk']; ?>
					</div>

					<div class="alert alert-success">
						<h6 class="alert-heading">Tambahkan Produk</h6>
						<hr>
						<input type="number" min="1" class="form-control" name="jumlah"></input>
            <div >
						<button class="btn btn-success btn-block" name="beli">BELI</button>
						</div>
					</div>
				</div>
			</div>					
	</div>
</form>

<!-- KONTEN -->


  <?php 

    if (isset($_POST["beli"])) {
      $jumlah = $_POST["jumlah"];
      $_SESSION["keranjang"][$id_produk] = $jumlah;
      echo "<script>alert('Produk Tambah Ke Keranjang');</script>";
      echo "<script>location = 'keranjang.php';</script>";
    }

  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>