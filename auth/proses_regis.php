<?php
session_start();
require_once "_config/config.php";
use Ramsey\Uuid\Uuid;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pasien = Uuid::uuid4()->toString(); // Menambahkan UUID untuk id_pasien
    $nomor_identitas = $_POST['nomor_identitas'];
    $nama_pasien = $_POST['nama_pasien'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Menggunakan password_hash untuk keamanan
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    // Query untuk memasukkan data
    $query = "INSERT INTO tb_pasien (nomor_identitas, nama_pasien, username, password, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($query);
    $stmt->bind_param("sssssss", $nomor_identitas, $nama_pasien, $username, $password, $jenis_kelamin, $alamat, $no_telp);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Pendaftaran berhasil!';
        header("Location: register.php#success"); // Redirect kembali ke halaman register
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>