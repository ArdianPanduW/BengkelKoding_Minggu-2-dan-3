// Ambil data pasien dari form periksa
$id_pasien = $_POST['id_pasien'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$obat = $_POST['obat'];

// Hitung biaya periksa
$biaya_periksa = 50000;
if ($obat) {
  $biaya_periksa += $obat * 10000;
}

// Query database untuk memperbarui data pendaftaran poli
$query = "UPDATE pendaftaran SET status = 'selesai_diperiksa', biaya_periksa = '$biaya_periksa' WHERE id_pasien = '$id_pasien'";
$result = mysqli_query($conn, $query);

// Jika query berhasil, maka tampilkan pesan berhasil
if ($result) {
  echo "Pemeriksaan pasien berhasil.";
} else {
  // Jika query gagal, maka tampilkan pesan kesalahan
  echo "Pemeriksaan pasien gagal.";
}
