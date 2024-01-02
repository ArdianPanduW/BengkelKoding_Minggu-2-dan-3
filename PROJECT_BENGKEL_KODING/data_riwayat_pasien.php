// Query database untuk mengambil data pendaftaran poli yang telah selesai diperiksa
$query = "SELECT * FROM pendaftaran WHERE status = 'selesai_diperiksa'";
$result = mysqli_query($conn, $query);

// Jika ada data pendaftaran poli, maka tampilkan data pendaftaran poli tersebut
if (mysqli_num_rows($result) > 0) {
  $riwayat = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $riwayat[] = $row;
  }
  return $riwayat;
} else {
  // Jika tidak ada data pendaftaran poli, maka tampilkan pesan kosong
  return [];
}
