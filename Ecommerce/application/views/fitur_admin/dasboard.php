<button class="btn" data-toggle = "modal" data-target = "#tamba_barang">tambah barang</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA BARANG</th>
      <th scope="col">Keterangan</th>
      <th scope="col">kategori</th>
      <th scope="col">harga</th>
      <th scope="col">stock</th>
    </tr>
  </thead>
  <?php 
  $no = 1; 
  foreach ($barang as $brg) :?>
    <tr>
      <th scope="col"><?= $no++;?></th>
      <th scope="col"><?= $brg->nama_barang;?></th>
      <th scope="col"><?= $brg->keterangan;?></th>
      <th scope="col"><?= $brg->kategori;?></th>
      <th scope="col"><?= $brg->harga;?></th>
      <th scope="col"><?= $brg->stock;?></th>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<div class="modal" tabindex="-1" role="dialog" id="tamba_barang">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url().'fitur_admin/input_data/add_barang' ?>" method="post">   

        <div class="modal-body">
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>