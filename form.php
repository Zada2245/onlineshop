<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","toko");
 
	if (!isset($_SESSION["pelanggan"])) {
	 	echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
    echo "<script>location='login.php';</script>";
	 } 

   if (empty($_SESSION["keranjang"])) {
     echo "<script>alert('Silahkan Pilih Produk Terlebih Dahulu');</script>";
     echo "<script>location='index.php';</script>";
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Form Ulasan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <style>
    input[type="radio"] {
      display: none;
    }

    /* Warna default bintang */
    .star i {
      font-size: 2rem;
      color: #ddd;
      transition: color 0.2s;
      cursor: pointer;
    }

    /* Saat dipilih, warnanya hijau */
    input[type="radio"]:checked ~ label i {
      color: #22c55e;
    }

    /* Nonaktifkan efek hover */
    .star label:hover i,
    .star label:hover ~ label i {
      color: #ddd !important;
    }

    /* Set bintang terpilih berdasarkan urutan */
    #star1:checked ~ label[for="star1"] i,
    #star2:checked ~ label[for="star1"] i,
    #star2:checked ~ label[for="star2"] i,
    #star3:checked ~ label[for="star1"] i,
    #star3:checked ~ label[for="star2"] i,
    #star3:checked ~ label[for="star3"] i,
    #star4:checked ~ label[for="star1"] i,
    #star4:checked ~ label[for="star2"] i,
    #star4:checked ~ label[for="star3"] i,
    #star4:checked ~ label[for="star4"] i,
    #star5:checked ~ label[for="star1"] i,
    #star5:checked ~ label[for="star2"] i,
    #star5:checked ~ label[for="star3"] i,
    #star5:checked ~ label[for="star4"] i,
    #star5:checked ~ label[for="star5"] i {
      color: #22c55e;
    }
  </style>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
  <form action="submit_ulasan.php" method="POST" class="max-w-md w-full bg-white p-6 rounded shadow-md">
    <h2 class="text-lg font-bold mb-4 text-center">Form Ulasan</h2>

    <!-- Rating bintang statis -->
    <div class="flex justify-center mb-4 gap-1 star relative">
      <input type="radio" id="star5" name="rating" value="5" />
      <label for="star5"><i class="fas fa-star"></i></label>

      <input type="radio" id="star4" name="rating" value="4" />
      <label for="star4"><i class="fas fa-star"></i></label>

      <input type="radio" id="star3" name="rating" value="3" />
      <label for="star3"><i class="fas fa-star"></i></label>

      <input type="radio" id="star2" name="rating" value="2" />
      <label for="star2"><i class="fas fa-star"></i></label>

      <input type="radio" id="star1" name="rating" value="1" />
      <label for="star1"><i class="fas fa-star"></i></label>
    </div>

    <!-- Komentar -->
    <textarea
      name="coment"
      rows="4"
      placeholder="Tulis ulasan Anda di sini..."
      class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
      required
    ></textarea>

    <!-- Tombol submit -->
    <button
      type="submit"
      class="mt-4 w-full bg-[#00ff33] text-black font-bold py-3 rounded hover:opacity-80 transition"
    >
      Kirim Ulasan
    </button>
  </form>
</body>
</html>
