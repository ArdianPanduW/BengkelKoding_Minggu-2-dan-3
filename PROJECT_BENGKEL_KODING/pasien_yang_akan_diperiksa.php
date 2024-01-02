// Query database untuk mengambil data pendaftaran poli yang belum diperiksa
$query = "SELECT * FROM pendaftaran WHERE status = 'belum_diperiksa'";
$result = mysqli_query($conn, $query);

// Jika ada data pendaftaran poli, maka tampilkan data pendaftaran poli tersebut
if (mysqli_num_rows($result) > 0) {
  $pasien = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $pasien[] = $row;
  }
  return $pasien;
} else {
  // Jika tidak ada data pendaftaran poli, maka tampilkan pesan kosong
  return [];
}
