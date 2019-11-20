<form action="<?= base_url().'admin/input_data/add_barang' ?>" method="post">   

    <div class="form-group">
        <label >Nama BARANG</label>
        <input type="text" class="form-control" name="nama_brg">
    </div>
    <div class="form-group">
        <label >Keterangan</label>
        <input type="text" class="form-control" name="keterangan">
    </div>
    <div class="form-group">
        <label >Kategori</label>
        <input type="text" class="form-control" name="kategori">
    </div>
    <div class="form-group">
        <label >harga</label>
        <input type="text" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label >Stock</label>
        <input type="text" class="form-control" name="stock">
    </div>

    <div class="form-group">
        <label >Gambar</label>
        <input type="file" class="form-control" name="gambar">
    </div>

</form>

<a class="btn btn-primary" href="#" role="submit">add</a>
    <a class="btn btn-primary" href="dasboard" role="button">kembali</a>