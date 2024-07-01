<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $phone = $_POST['no_hp'];
    $alamat = $_POST['email'];
    $username = $_POST['password'];
    $password = $_POST['alamat'];
    $role = 'donatur'; // Mengatur peran default

    // Mengecek apakah username sudah digunakan
    $check_username = $conn->prepare("SELECT id_user FROM user WHERE nama = ?");
    $check_username->bind_param("s", $username);
    $check_username->execute();
    $check_username->store_result();

    if ($check_username->num_rows > 0) {
        echo "nama sudah digunakan.";
    } else {
        // Memasukkan data ke database dengan peran default
        $insert_user = $conn->prepare("INSERT INTO user (nama, no_hp, email, password, alamat, role) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_user->bind_param("ssssss", $nama, $phone, $alamat, $username, $password, $role);

        if ($insert_user->execute()) {
            // Registrasi berhasil, tampilkan peringatan dan arahkan dengan JavaScript
            echo '<script>alert("Registrasi berhasil. Silakan login."); 
            window.location.href = "../pages/login.php";</script>';
        } else {
            echo "Registrasi gagal. Silakan coba lagi.";
        }

        $insert_user->close();
    }

    $check_username->close();
}

$conn->close();
?>

?>