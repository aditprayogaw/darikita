<?php
include '../script/db.php';

$id_user_delete = $_GET['id_user'];

// ubah user_id pada tabel donasi menjadi NULL
$query = "UPDATE donasi SET id_user = NULL WHERE id_user = '$id_user_delete'";
mysqli_query($conn, $query);
// hapus data user
$sql = "DELETE FROM user WHERE id_user = '$id_user_delete'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: admin-user.php');
}
?>