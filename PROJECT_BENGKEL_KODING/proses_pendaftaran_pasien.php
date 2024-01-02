// Ambil data pasien dari form pendaftaran
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

// Buat data pasien baru
$pasien = [
  'nama' => $nama,
  'alamat' => $alamat,
  'no_telp' => $no_telp,
];

// Query database untuk menambahkan data pasien baru
$query = "INSERT INTO pasien (nama, alamat, no_telp) VALUES ('$nama', '$alamat', '$no_telp')";
$result = mysqli_query($conn, $query);

// Jika query berhasil, maka tampilkan pesan berhasil
if ($result) {
  echo "Pendaftaran pasien berhasil.";
} else {
  // Jika query gagal, maka tampilkan pesan kesalahan
  echo "Pendaftaran pasien gagal.";
}
