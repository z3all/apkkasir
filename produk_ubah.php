<?php
    $id = $_GET['id'];
    if(isset($_POST['nama_produk'])) {
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];

       $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', harga='$harga', stock='$stock' WHERE id_produk=$id");
       if($query){
            echo '<script>alert("Data berhasil diubah"); location.href="?page=produk"</script>';
        }else{
            echo '<script>alert("Data gagal diubah"); location.href="?page=produk"</script>';
        }
    }
    $query = mysqli_query($koneksi, "SELECT*FROM produk WHERE id_produk=$id");
    $data = mysqli_fetch_array($query);


?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1> 
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <a href="?page=produk" class="btn btn-danger">Kembali</a>
                        <hr>
                        
                        <form method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="200">Nama Produk</td>
                                    <td width="1">:</td>
                                    <td><input type="text" value="<?php echo $data['nama_produk']; ?>" name="nama_produk" class="form-control"></td>
                                </tr>
                                <tr>    
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input name="harga" type="number" value="<?php echo $data['harga']; ?>" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td>:</td>
                                    <td><input type="number" value="<?php echo $data['stock']; ?>" name="stock" step="0" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                       
                                    </td>
                            </table>
                        </form>
                    </div>