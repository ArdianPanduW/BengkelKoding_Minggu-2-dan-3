// Ambil data pendaftaran poli dari form pendaftaran
$id_poli = $_POST['id_poli'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

// Buat data pendaftaran poli baru
$pendaftaran = [
  'id_poli' => $id_poli,
  'tanggal' => $tanggal,
  'jam' => $jam,
];

// Query database untuk menambahkan data pendaftaran poli baru
$query = "INSERT INTO pendaftaran (id_poli, tanggal, jam) VALUES ('$id_poli', '$tanggal', '$jam')";
$result = mysqli_query($conn, $query);

// Jika query berhasil, maka tampilkan pesan berhasil
if ($result) {
  echo "Pendaftaran poli berhasil.";
} else {
  // Jika query gagal, maka tampilkan pesan kesalahan
  echo "Pendaftaran poli gagal.";
}
