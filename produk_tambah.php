<?php
    if(isset($_POST['nama_produk'])) {
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];

        $query = mysqli_query($koneksi, "INSERT INTO produk(nama_produk,harga,stock) values('$nama', '$harga', '$stock')");
        if($query){
            echo '<script>alert("Data berhasil disimpan"); location.href="?page=produk"</script>';
        }else{
            echo '<script>alert("Data gagal disimpan"); location.href="?page=produk"</script>';
        }
    }


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
                                    <td><input type="text" name="nama_produk" class="form-control"></td>
                                </tr>
                                <tr>    
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="harga" type="number"  class="form-control"></textarea>
                                    </td>
                                </tr>
                                <tr>    
                                    <td>Stock</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="stock" type="number"  class="form-control"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                    </td>
                            </table>
                        </form>
                    </div>