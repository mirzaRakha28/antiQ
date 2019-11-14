
<!-- <div class="row">
    <p class="col-3">
        <p class="">
            <p><b>Categories</b></p>
            <br>
            <p>Home Utensils</p>
            <p>Fashion</p>
            <p>Book</p>
            <p>Electronic</p>
            <p>Phone</p> 
        </p>
    </p>
    <div class="col-9">
        <div class="row">
                <?php foreach($barang as $dt) :?>
                    <div class="col-3 p-5 span"> 
            
                        <div class="card " style="width: 13rem;">
                            <img src="<?php echo base_url().'/uploads/'.$dt->gambar?>" class="card-img-top gambar">
                            <div class="produk">
                                <p>
                                    <?php echo $dt->nama_barang ?>
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
    </div>
</div> -->


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
                                        <?php echo $dt->nama_barang ?>
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
    </div>
</div>