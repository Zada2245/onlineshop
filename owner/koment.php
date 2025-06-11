<?php
session_start();

// Cek apakah user sudah login

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "toko");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil semua ulasan
$sql = "SELECT rating, coment, created_at FROM ulasan ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Ulasan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h1 class="text-xl font-bold mb-4">Daftar Ulasan</h1>

    <?php if ($result->num_rows > 0): ?>
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="border-b border-gray-200 py-4">
          <div class="flex items-center mb-2">
            <div class="text-yellow-500 text-sm mr-2">
              <?php for ($i = 0; $i < $row['rating']; $i++) echo '★'; ?>
            </div>
            <span class="text-gray-500 text-xs"><?= $row['created_at']; ?></span>
          </div>
          <p class="text-sm text-gray-800"><?= htmlspecialchars($row['coment']); ?></p>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p class="text-sm text-gray-500">Belum ada ulasan.</p>
    <?php endif; ?>

    <a href="index.php" class="inline-block mt-4 text-blue-600 hover:underline text-sm">Kembali ke Dashboard</a>
  </div>
</body>
</html>

<?php
$conn->close();
?>
