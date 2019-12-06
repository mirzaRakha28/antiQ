


    <div class="col-lg-12">
        <section class="section pt-4">
            
            <div class="row">
                <?php
                $x = array_reverse($barang,true); 
                foreach($x as $dt) :?>
                    <div class="span m-4"> 
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
                                    <?= anchor('fitur_cart/cart/add1_keranjang/'.$dt->id_barang,'<div class="btn btn-primary btn-block" style="margin:auto; background-color: #730006; outline-style: no-outline;" id="tambah_barang">Add to Cart</div>')?>
                                    <a style="cursor: pointer; margin:6px 0px ;  " class="btn btn-outline-dark btn-block" id="">Detail</a>
                                </div>
                                <!-- <a style="cursor: pointer;" class=margin" btn btn-primary text-white tambah_barang" > tambah </a> -->
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
    </div>