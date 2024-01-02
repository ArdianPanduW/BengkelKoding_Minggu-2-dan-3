// Fungsi untuk menampilkan daftar obat
function getAllObat() {
  // Query database untuk mengambil semua data obat
  $query = "SELECT * FROM obat";
  $result = mysqli_query($conn, $query);

  // Jika ada data obat, maka tampilkan data obat tersebut
  if (mysqli_num_rows($result) > 0) {
    $obat = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $obat[] = $row;
    }
    return $obat;
