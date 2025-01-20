<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM penjualan WHERE id_penjualan='$id'");
$query = mysqli_query($koneksi, "DELETE FROM detailpenjualan WHERE id_penjualan='$id'");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="?page=pembelian"</script>';
} else {
    echo '<script>alert("Data gagal dihapus")</script>';
}
