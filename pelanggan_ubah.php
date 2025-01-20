<?php
    $id = $_GET['id'];
    if(isset($_POST['nama_pelanggan'])) {
        $nama = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        $no_telepon = $_POST['no_telepon'];

       $query = mysqli_query($koneksi, "UPDATE pelanggan SET nama_pelanggan='$nama', alamat='$alamat', no_telepon='$no_telepon' WHERE id_pelanggan=$id");
       if($query) {
            echo '<script>alert("Data berhasil diubah"); location.href="?page=pelanggan"</script>';
        }else{
            echo '<script>alert("Data gagal diubah"); location.href="?page=pelanggan"</script>';
        }
    }
    $query = mysqli_query($koneksi, "SELECT*FROM pelanggan WHERE id_pelanggan=$id");
    $data = mysqli_fetch_array($query);


?>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Pelanggan</h1> 
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                        <a href="?page=pelanggan" class="btn btn-danger">Kembali</a>
                        <hr>
                        
                        <form method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="200">Nama Pelanggan</td>
                                    <td width="1">:</td>
                                    <td><input type="text" value="<?php echo $data['nama_pelanggan']; ?>" name="nama_pelanggan" class="form-control"></td>
                                </tr>
                                <tr>    
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <textarea name="alamat"  rows="5" class="form-control"><?php echo $data['alamat']; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Telepon</td>
                                    <td>:</td>
                                    <td><input type="number" value="<?php echo $data['no_telepon']; ?>" name="no_telepon" step="0" class="form-control"></td>
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