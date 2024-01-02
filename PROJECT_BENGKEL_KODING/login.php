function login() {
  // Ambil username dan password dari form login
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query database untuk mencari data user dengan username dan password yang sesuai
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  // Jika data user ditemukan, maka set variabel $role dengan role user tersebut
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];
  } else {
    // Jika data user tidak ditemukan, maka tampilkan pesan kesalahan
    $role = '';
  }

  // Kembalikan variabel $role
  return $role;
}
