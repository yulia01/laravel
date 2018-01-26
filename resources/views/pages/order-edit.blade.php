<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="brown">
                                    <h4 class="title">Order</h4>
                                </div>
                                <?php
                                            include ".../../databases.php";
                                            $id = $_GET['id'];
                                            $query = mysqli_query($koneksi, "SELECT * FROM pengiriman WHERE id='$id'");
                                            $data = mysqli_fetch_assoc($query);
                                           
                                        ?>
                <form action="index.php?module=order" method = "POST">                        
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group label-floating">
                                <label class="control-label">ID</label>
                                     <input type="text" name="id" class="form-control" value= <?php echo $data['id']?>>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Kode</label>
                        <input type="text" name="kode" class="form-control" value= <?php echo $data['kode']?>>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Id Pelanggan</label>
                        <input type="text" name="idpelanggan" class="form-control" value= <?php echo $data['pelanggan_id']?>>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Id Makanan</label>
                        <input type="text" name="idmakanan" class="form-control" value= <?php echo $data['makanan_id']?>>
                     </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group label-floating">
                                <label class="control-label">Jumlah</label>
                                     <input type="text" name="jumlah" class="form-control" value= <?php echo $data['jumlah']?>>
                        </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group label-floating">
                                <label class="control-label">Total</label>
                                     <input type="text" name="total" class="form-control" value= <?php echo $data['total']?>>
                        </div>
                
</div>
<button type="submit" name="edit" class="btn btn-primary pull-right">Edit</button>
</form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                