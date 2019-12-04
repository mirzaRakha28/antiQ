<div class="col-12">
		<?php
		$x = array_reverse($barang,true); 
		foreach($x as $dt) :?>
            <div class="span"> 
                <div class="card text-center " style="width: 16rem; float: left; margin-right: 55   px;">
                    <img src="<?php echo base_url().'/uploads/'.$dt->gambar?>" class="card-img-top" style="width: 250px;
                    height: 250px; margin: auto;">
                    <div class="produk ">
                        <p>
                            <?php echo $dt->nama_barang ?>
                        </p>
                        <small><?php echo $dt->keterangan ?></small>
                        <p>
                            Rp. 
                            <?php echo $dt->harga?>
                        </p>
                        
                        <!-- <?= anchor($dt->id_barang,'<div class="btn btn-primary" id="tambah_barang"> tambah </div>')?> -->
                        <a style="cursor: pointer;" class=" btn btn-primary text-white tambah_barang" > tambah </a>
                        <a style="cursor: pointer;" class="btn btn-primary text-white" id="">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>          

    </div>