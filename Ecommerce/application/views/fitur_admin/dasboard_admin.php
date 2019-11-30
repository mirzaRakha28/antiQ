<div class="box text-center">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Tambah Barang</button>
</div>


<div class="text-center">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">KETERANGAN</th>
            <th scope="col">HARGA</th>
            <th scope="col">STOCK</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            <?php foreach($barang as $dt) :?>
                <tr>
                <th scope="row"><?= $no++;?></th>
                <td><?= $dt->nama_barang;?></td>
                <td><?= $dt->keterangan;?></td>
                <td><?= $dt->kategori;?></td>
                <td><?= $dt->harga;?></td>
                <td><?= $dt->stock;?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= base_url().'fitur_admin/dasboard/tambah_barang'?>" method="post" enctype="multipart/form-data">
                <div class="form-group ">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_brg" class="form-control">
                </div>
                <div class="form-group ">
                    <label>KETERANGAN</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Stock</label>
                    <input type="text" name="stock" class="form-control">
                </div>
                <div class="form-group ">
                    <label>Gambar</label>
                    <input type="file" name="nama_brg" class="form-control">
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

<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url().'index.php/fitur_admin/dasboard_admin/tambah_barang'?>" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>KETERANGAN</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Stock</label>
                        <input type="text" name="stock" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>