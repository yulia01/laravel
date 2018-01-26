<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="brown">
                                    <h4 class="title">Order</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Kode</th>
                                            <th>Id Pelanggan</th>
                                            <th>Id Makanan</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody>
<?php
if(isset($_POST['edit'])) {
       include ".../../databases.php";
       $id = $_POST["id"];
       $kode = $_POST["kode"];
       $idpelanggan  = $_POST["idpelanggan"];
       $idmakanan = $_POST["idmakanan"];
       $jml = $_POST["jumlah"];
       $ttl = $_POST["total"];
    mysqli_query($koneksi,"update pengiriman set kode='$kode',pelanggan_id='$idpelanggan',makanan_id='$idmakanan', jumlah='$jml', total='$ttl' where id='$id'");
} ?>
                                        <?php
                                        $koneksi = mysqli_connect("localhost", "root", "", "makan");
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM pengiriman") or die("query error");
                                            while ($data = mysqli_fetch_array($tampil)){ ?>
                                                <tr>
                                                    <td><?php echo $data['id']?></td>
                                                    <td><?php echo $data['kode']?></td>
                                                    <td><?php echo $data['pelanggan_id']?></td>
                                                    <td><?php echo $data['makanan_id']?></td>
                                                    <td><?php echo $data['jumlah']?></td>
                                                    <td><?php echo $data['total']?></td>
                                                    <td><a href="index.php?module=order-edit&id=<?php echo $data['id'];?>">Edit</a></td>
                                                    <td><a href="index.php?module=order-delete&id=<?php echo $data['id'];?>">Delete</a></td>
                                                </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <center><a href="index.php?module=order-create" class="btn" role="button"> Create  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
if(isset($_POST['add'])) {
       include ".../../databases.php";
        $id = $_POST["id"];
        $kode = $_POST["kode"];
        $idpelanggan  = $_POST["idpelanggan"];
        $idmakanan = $_POST["idmakanan"];
        $jml = $_POST["jumlah"];
        $ttl = $_POST["total"];
    $create = mysqli_query($koneksi,"insert into pengiriman(id,kode,pelanggan_id,makanan_id,jumlah,total) values ('$id', '$kode','$idpelanggan','$idmakanan','$jml','$ttl')");
if($create){
    echo "berhasil";
}
else {
    echo "gagal";
}
} ?>