<?php 
// menangkap id_buku di url
$id_anggota = $_GET['id'];

$conn->query(query: "DELETE FROM tb_anggota WHERE id_anggota = $id_anggota") or die(mysqli_error(mysql: $conn));
echo "<script>alert('Data Berhasil Dihapus.');window.location='?p=anggota';</script>";

?>