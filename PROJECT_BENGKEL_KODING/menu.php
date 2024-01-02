function getMenu($role) {
  // Jika role adalah Admin, maka tampilkan menu Admin
  if ($role == 'Admin') {
    $menu = [
      'Obat',
    ];
  } else if ($role == 'Dokter') {
    // Jika role adalah Dokter, maka tampilkan menu Dokter
    $menu = [
      'Periksa',
      'Riwayat Pasien',
    ];
  } else {
    // Jika role tidak valid, maka tampilkan pesan kesalahan
    $menu = [];
  }

  // Kembalikan variabel $menu
  return $menu;
}
