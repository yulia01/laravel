<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="choco">
                                    <h4 class="title"> Pelanggan</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                        </thead>
                                        <tbody>
                                        <?php
if(isset($_POST['submit'])) {
       include ".../../databases.php";
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $almt = $_POST["alamat"];
    mysqli_query($koneksi,"insert into pelanggan(id,nama,alamat) values ('$id','$nama','$almt')");
} ?>
<?php
if(isset($_POST['edit'])) {
       include ".../../databases.php";
        $id = $_GET["id"];
        $nama = $_POST["nama"];
        $almt = $_POST["alamat"];
    mysqli_query($koneksi,"update pelanggan set id='$id',nama='$nama',alamat='$almt'where id='$id'");
} ?>
<?php
if (isset($_GET['delete'])){
    include '.../../databases.php';
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "delete from pelanggan where id='$id'") or die("error");
    if($delete){?><script>window.alert("Data Berhasil dihapus")</script><?php}
    else{?><script> window.alert("Data Gagal dihapus")</script></div><?php }}?>
    
                                            <?php
                                            include '.../../databases.php';
                                            $tampil = mysqli_query($koneksi,"select * from pelanggan");
                                                while ($data = mysqli_fetch_assoc($tampil)){ ?>
                                                    <tr>
                                                        <td><?php echo $data['id']?></td>
                                                        <td><?php echo $data['nama']?></td>
                                                        <td><?php echo $data['alamat']?></td>
                                                        <td><a href="index.php?module=pelanggan-edit&id=<?php echo $data['id'];?>">Edit</a></td>
                                                        <td><a href="index.php?module=pelanggan&id=<?php echo $data['id'];?>&delete">Delete</a></td>
                                                    </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                        <center><a href="index.php?module=pelanggan-create" class="btn" role="button"> Create  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>