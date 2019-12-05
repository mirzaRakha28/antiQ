<div class="row">
    <div class=" sidebar-menu mt-4 ml-4 col-2">
        <div class="panel-heading">
            <h3 class="h4 panel-title">Categories</h3>
        </div>
        <div>
            <a href="#" class="nav-link  "><span>Home Utensils</span><span class="badge badge-secondary"></span></a>
            <a href="#" class="nav-link  "><span>Fasihon</span><span class="badge badge-secondary"></span></a>
            <a href="#" class="nav-link  "><span>Book</span><span class="badge badge-secondary"></span></a>
            <a href="#" class="nav-link  "><span>Electronic</span><span class="badge badge-secondary"></span></a>
            <a href="#" class="nav-link  "><span>Phonr</span><span class="badge badge-secondary"></span></a>
            
        </div>
                    
    </div>

    <div class="col-9">
        <?php foreach($barang as $dt) :?>
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
                       <div> 
                            <?= anchor('/fitur_cart/cart/add_keranjang/'.$dt->id_barang,'<div class="btn btn-primary" id="tambah_barang"> tambah </div>')?>
                        </div>
                        <!-- <a style="cursor: pointer;" class=" btn btn-primary text-white tambah_barang" > tambah </a> -->
                        <a style="cursor: pointer;" class="btn btn-primary text-white" id="">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>          

    </div>

</div>