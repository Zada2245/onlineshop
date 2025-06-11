<?php

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "toko");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data pembelian dan pelanggan
$query = "SELECT * FROM tb_pembelian 
          JOIN tb_pelanggan ON tb_pembelian.id_pelanggan = tb_pelanggan.id_pelanggan 
          ORDER BY tanggal_pembelian DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Halaman Pembelian</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Daftar Pembelian</h1>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm text-left text-gray-800 border border-gray-200">
        <thead class="bg-gray-200 font-semibold">
          <tr>
            <th class="px-4 py-2 border">No</th>
            <th class="px-4 py-2 border">Nama Pelanggan</th>
            <th class="px-4 py-2 border">Tanggal</th>
            <th class="px-4 py-2 border">Status</th>
            <th class="px-4 py-2 border">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while ($row = $result->fetch_assoc()): ?>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2 border"><?= $no++; ?></td>
            <td class="px-4 py-2 border"><?= htmlspecialchars($row['nama_pelanggan']); ?></td>
            <td class="px-4 py-2 border"><?= $row['tanggal_pembelian']; ?></td>
            <td class="px-4 py-2 border"><?= $row['status']; ?></td>
            <td class="px-4 py-2 border">Rp <?= number_format($row['total_pembelian'], 0, ',', '.'); ?></td>
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
