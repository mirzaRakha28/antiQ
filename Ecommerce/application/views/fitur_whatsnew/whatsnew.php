


    <div class="col-lg-12">
        <section class="section pt-4">
            
            <div class="row">
                <?php
                $x = array_reverse($barang,true); 
                foreach($x as $dt) :?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card card-ecommerce">
                        <div class="view overlay">
                                <img src="<?php echo base_url().'/uploads/'.$dt->gambar?>" style="width: 419px; height: 169.98px" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text"><?php echo $dt->nama_barang ?></a></strong></h5>
                                <span class="badge badge-info mb-2"><?php echo $dt->kategori?></span>
                                <br>
                                <span class="text-center"><a><?php echo $dt->keterangan?></a></span>
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong><?php echo $dt->harga?></strong></span>
                                    </div>
                                    <div class="text-center">
                                        <a style="cursor: pointer;" class=" btn btn-primary text-white tambah_barang" > tambah </a>
                                        <a style="cursor: pointer;" class="btn btn-primary text-white" id="">Detail</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
    </div>