@extends('index')

<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="choco">
                    <h4 class="title">Daftar Menu</h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <tbody>
                        <form action="index.php?module=makanan" method="POST">
<input type="text" placeholder="Id" id="id" name="id" required>
<input type="text" placeholder="Nama" id="nama" name="nama" required>
<input type="text" placeholder="Stok" id="stok" name="stok" required>
<input type="text" placeholder="Harga" id="harga" name="harga" required>
<input type="submit" class="btn btn-info" name="submit">

                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>