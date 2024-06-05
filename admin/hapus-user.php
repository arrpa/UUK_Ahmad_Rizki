<?php

$id_user = $_GET['id_user'];

include'../koneksi.php';
$sql = "DELETE FROM user WHERE id_user='$id_user'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=user");
} else {
    echo"<script>alert('Maaf data gagal dihapus'); window.location.assign('?url=user');</script>";
}

?>