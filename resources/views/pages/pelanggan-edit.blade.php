<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="choco">
                                    <h4 class="title">Pelanggan</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">

                                        <?php
                                            include ".../../databases.php";
                                            $id = $_GET['id'];
                                            $query = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id='$id'");
                                            $data = mysqli_fetch_assoc($query);
                                            echo '<from action="index.php?module=pelanggan&id='.$id.'" method = "POST">'
                                        ?>
                                        <table>
                                        <?php
                                        echo  '<form action="index.php?module=pelanggan&id='.$id.'" method="post">';?>
                                        <tr><td>ID</td><td><input type="text" name="id" value="<?php echo $data['id'];?>"disabled></td></tr>
                                        <tr><td>Nama</td><td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td></tr>
                                        <tr><td>Alamat</td><td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td></tr>
                                        <tr><td colspan=2><input type=submit class = "btn btn-info btn-block" name='edit'></td></tr>
                                        </form>
                                        </tbody>
                                        </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                