
<div class="row m-5">
    <div class=" sidebar-menu mt-4 ml-4 col-2">
        <div class="panel-heading">
            <h3 class="h4 panel-title">Categories</h3>
        </div>
        <div>
           <a href="<?= base_url('index.php/fitur_categories/category/home_utensils') ?>" class="nav-link  "><span>Home Utensils</span><span class="badge badge-secondary"></span></a>
            <a href="<?= base_url('index.php/fitur_categories/category/fashion') ?>" class="nav-link  "><span>Fasihon</span><span class="badge badge-secondary"></span></a>
            <a href="<?= base_url('index.php/fitur_categories/category/book') ?>" class="nav-link  "><span>Book</span><span class="badge badge-secondary"></span></a>
            <a href="<?= base_url('index.php/fitur_categories/category/electronic') ?>" class="nav-link  "><span>Electronic</span><span class="badge badge-secondary"></span></a>
            <a href="<?= base_url('index.php/fitur_categories/category/phone') ?>" class="nav-link font-weight-bold " style="color:#730006"><span>Phone</span><span class="badge badge-secondary"></span></a>
            <a href="<?= base_url('index.php/fitur_categories/category/vehicle') ?>" class="nav-link  "><span>Vehicle</span><span class="badge badge-secondary"></span></a> 
        </div>
                    
    </div>

    <div class="col-9 p-4">
        <?php foreach($phone as $dt) :?>
            <div class="span"> 
                <div class="card text-center " style="width: 16rem; float: left; margin: 16px;">
                    <img src="<?php echo base_url().'/uploads/'.$dt->gambar?>" class="card-img-top" style="width: 250px;
                    height: 250px; margin: auto; padding: 10px">
                    <div class="produk">
                        <p class="font-weight-bold text-uppercase">
                            <?php echo $dt->nama_barang ?>
                        </p>
                        <small class="font-italic">Category: <?php echo $dt->kategori?></small>
                        <p>
                            Price: Rp<?php echo number_format($dt->harga,0,',','.')?>
                        </p>
                       <div style="padding: 10px"> 
                            <?= anchor('fitur_cart/cart/add_keranjang/'.$dt->id_barang,'<div class="btn btn-primary btn-block" style="margin:auto; background-color: #730006; outline-style: no-outline;" id="tambah_barang">Add to Cart</div>')?>
                            <a style="cursor: pointer; margin:6px 0px ;  " class="btn btn-outline-dark btn-block" id="">Detail</a>
                        </div>
                        <!-- <a style="cursor: pointer;" class=margin" btn btn-primary text-white tambah_barang" > tambah </a> -->
                        
                    </div>
                </div>
            </div>
        <?php endforeach;?>          

    </div>

</div>