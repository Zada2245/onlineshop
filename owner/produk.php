<?php


// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "toko");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$produk = $conn->query("SELECT * FROM tb_produk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Halaman Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Daftar Produk</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm text-left text-gray-700 border border-gray-200">
        <thead class="bg-gray-200 font-semibold text-gray-700">
          <tr>
            <th class="px-4 py-2 border">No</th>
            <th class="px-4 py-2 border">Nama Produk</th>
            <th class="px-4 py-2 border">Harga</th>
            <th class="px-4 py-2 border">Berat</th>
            <th class="px-4 py-2 border">Foto</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while ($row = $produk->fetch_assoc()): ?>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2 border"><?= $no++; ?></td>
            <td class="px-4 py-2 border"><?= htmlspecialchars($row['nama_produk']); ?></td>
            <td class="px-4 py-2 border">Rp <?= number_format($row['harga_produk']); ?></td>
            <td class="px-4 py-2 border"><?= $row['berat_produk']; ?> gram</td>
            <td class="px-4 py-2 border">
              <img src="../images/<?= $row['foto_produk']; ?>" alt="Foto" class="w-20 h-20 object-cover rounded">
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <a href="index.php" class="block mt-6 text-center text-blue-600 hover:underline">Kembali ke Dashboard</a>
  </div>
</body>
</html>

<?php $conn->close(); ?>
