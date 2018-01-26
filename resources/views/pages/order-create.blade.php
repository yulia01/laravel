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
                        <tbody>
                        <form action="index.php?module=order" method="POST">
<input type="text" placeholder="Id" id="id" name="id" required>
<input type="text" placeholder="Kode" id="kode" name="kode" required>
<input type="text" placeholder="Id Pelanggan" id="idpelanggan" name="idpelanggan" required>
<input type="text" placeholder="Id Makanan" id="idmakanan" name="idmakanan" required>
<input type="text" placeholder="Jumlah" id="jumlah" name="jumlah" required>
<input type="text" placeholder="Total" id="total" name="total" required>
<input type="submit" class="btn btn-info" name="add">
</form>
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>