<?php 
    session_start();
    $koneksi = new mysqli("localhost", "root", "", "toko");

   

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

 <body class="bg-[#2a2f40] min-h-screen flex items-center justify-center">
 <form action="" method="POST" class="bg-[#1c7ad9] p-8 rounded-3xl w-96 shadow-xl text-black">
    <h2 class="text-center font-black italic text-lg mb-6">MANEJER ONLY</h2>

    <div class="mb-4">
      <label class="block mb-1 text-black">Username</label>
      <input class="w-full px-3 py-2 border border-black rounded bg-[#1c7ad9] text-black placeholder-black" type="text" placeholder="Username" name="username" required>
    </div>

    <div class="mb-4">
      <label class="block mb-1 text-black">Password</label>
      <input class="w-full px-3 py-2 border border-black rounded bg-[#1c7ad9] text-black placeholder-black" type="password" placeholder="Password" name="password" required>
    </div>

    <div class="flex justify-between items-center text-sm mb-4 text-black">
      <label class="inline-flex items-center space-x-2">
        <input type="checkbox" name="remember">
        <span>Remember Me</span>
      </label>
      <a href="#" class="underline hover:text-gray-200">Forgot Password?</a>
    </div>

    <button class="w-full bg-[#2ecc40] text-white font-semibold py-2 rounded hover:bg-[#27ae37] transition" type="submit" name="submit">
      Sign In
    </button>

    <div class="mt-5 space-y-2">
      <button type="button" class="w-full bg-blue-600 text-white py-2 rounded">Admin</button>
      <button type="button" class="w-full bg-blue-400 text-white py-2 rounded">Home</button>
    </div>
  </form>
                    <?php 
                        if (isset($_POST['submit'])) {
                            $ambil = $koneksi->query("SELECT * FROM login WHERE username='$_POST[username]'
                                                      AND password='$_POST[password]'");
                            $yangcocok = $ambil->num_rows;

                            if ($yangcocok == 1) {
                                $_SESSION['admin'] = $ambil->fetch_assoc();
                                echo "<script>alert('Login Sukses');</script>";
                                echo "<script>location = 'index.php';</script>";
                            } else {
                                echo "<script>alert('Login Gagal, Periksa Username & Password');</script>";
                                echo "<script>location = 'login.php';</script>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- end document-->