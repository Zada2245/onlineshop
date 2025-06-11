<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
</head>
<body class="bg-white">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="bg-[#f52222] w-36 flex flex-col p-4">
      <span class="font-extrabold italic text-black text-sm">DASHBOARD</span>
    </div>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
      <!-- Top bar -->
      <div class="bg-gray-300 flex justify-end items-center p-2 text-black text-xs font-semibold">
        <a href="login.php" class="hover:underline">Keluar</a>
      </div>

      <!-- Content area -->
      <div class="flex flex-col p-6 gap-6 items-center">
        <span class="font-extrabold italic text-black text-xs">SELAMAT DATANG</span>

        <div class="flex gap-6">
            <a href="produk.php" class="bg-[#00ff33] text-black font-bold text-sm w-40 h-20 flex items-center justify-center hover:opacity-80 transition">
            PRODUK
            </a>
            <a href="koment.php" class="bg-[#00ff33] text-black font-bold text-sm w-40 h-20 flex items-center justify-center hover:opacity-80 transition">
            ULASAN
            </a>
        </div>

        <a href="pembelian.php" class="bg-[#00ff33] text-black font-bold text-sm w-48 h-20 flex items-center justify-center hover:opacity-80 transition">
            PEMBELIAN
        </a>
        </div>
    </div>
  </div>
</body>
</html>
