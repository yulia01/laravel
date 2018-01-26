<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Daftar Menu</h4>
                                </div>
                                <?php
                                            include ".../../databases.php";
                                            $id = $_GET['id'];
                                            $query = mysqli_query($koneksi, "SELECT * FROM makanan WHERE id='$id'");
                                            $data = mysqli_fetch_assoc($query);
                                           
                                        ?>
                <form action="index.php?module=makanan" method = "POST">                        
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group label-floating">
                                <label class="control-label">ID</label>
                                     <input type="text" name="id" class="form-control" value= <?php echo $data['id']?>>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value= <?php echo $data['nama']?>>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Stok</label>
                        <input type="text" name="stok" class="form-control" value= <?php echo $data['stok']?>>
                     </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <label class="control-label">Harga</label>
                        <input type="text" name="harga" class="form-control" value= <?php echo $data['harga']?>>
                     </div>
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
                