<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Daftar Menu</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                        </thead>
                                        <tbody>
                                        <?php
if (isset($_GET['delete'])){
include '.../../databases.php';
$id = $_GET['id'];
$delete = mysqli_query($koneksi, "delete from makanan where id='$id'") or die("error");
if($delete){
?>
<script>window.alert("Data Berhasil dihapus")</script>
<?php
}else{
    ?>
    <script> window.alert("Data Gagal dihapus")</script>
</div>
<?php }}
 ?>
<?php
if(isset($_POST['submit'])) {
       include ".../../databases.php";
        $id1 = $_POST["id"];
        $nama1 = $_POST["nama"];
        $stok1 = $_POST["stok"];
        $harga1 = $_POST["harga"];
    mysqli_query($koneksi,"insert into makanan(id, nama, stok, harga) values ('$id1','$nama1','$stok1','$harga1')");
} ?>
<?php
if(isset($_POST['edit'])) {
       include ".../../databases.php";
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $stok = $_POST["stok"];
        $harga = $_POST["harga"];
    mysqli_query($koneksi,"update makanan set nama='$nama',stok='$stok',harga='$harga'where id='$id'");
} ?>
                                        <?php
                                        include '.../../databases.php';
                                        $tampil = mysqli_query($koneksi,"select * from makanan");
                                            while ($data = mysqli_fetch_assoc($tampil)){ ?>
                                                <tr>
                                                    <td><?php echo $data['id']?></td>
                                                    <td><?php echo $data['nama']?></td>
                                                    <td><?php echo $data['stok']?></td>
                                                    <td><?php echo $data['harga']?></td>
                                                    <td><a href="index.php?module=makanan-edit&id=<?php echo $data['id'];?>">Edit</a></td>
                                                    <td><a href="index.php?module=makanan&delete&id=<?php echo $data['id'];?>">Delete</a></td>
                                                </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <center><a href="index.php?module=makanan-create" class="btn" role="button"> Create  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>