<<<<<<< HEAD

<div class="row">
    <div class="col-sm-3">
        <div class="kategori">
            <p><b>Categories</b></p>
            <br>
            <p>Home Utensils</p>
            <p>Fashion</p>
            <p>Book</p>
            <p>Electronic</p>
            <p>Phone</p> 
        </div>
    </div>
    
    <div class="col-sm-9" style=" margin-top: 50px ;">
        <div class="row">
            <?php foreach($barang as $dt) :?>
                <div class="span"> 
        
                    <div class="card " style="width: 17rem;">
                        
                        <img src="<?php echo base_url().'/uploads/'.$dt->gambar?>" class="card-img-top gambar">
                        <div class="produk">
                            <p>
                               <a href=""> 
                                    <?php echo $dt->nama_barang ?>
                                </a>
                            </p>
                            <p>
                                Rp. 
                                <?php echo $dt->harga?>
                            </p>
                        </div>
                        
                    </div>
                </div>
            <?php endforeach;?>
                
        </div>
=======
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
                        
                        <?= anchor('fitur_categories/category/keranjang/'.$dt->id_barang,'<div class="btn btn-primary"> tambah </div>')?>
                        
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>          

>>>>>>> f0d21a0d9bf48dc83aef8866763fe9cf636d6a11
    </div>

</div>