


<div class="container mt-3 pt-3">



<div class="row pt-4">

    <!-- Sidebar -->
    <div class="col-lg-3">

        <div class="">
            <!-- Grid row -->
            <div class="row">
                <div class="col-md-6 col-lg-12 mb-5">
                    <!-- Panel -->
                    <h5 class="font-weight-bold dark-grey-text"><strong>Order By</strong></h3>
                        <div class="divider"></div>

                        <a href="#" class="nav-link  "><span>Home Utensils</span><span class="badge badge-secondary"></span></a>
                        <a href="#" class="nav-link  "><span>Fasihon</span><span class="badge badge-secondary"></span></a>
                        <a href="#" class="nav-link  "><span>Book</span><span class="badge badge-secondary"></span></a>
                        <a href="#" class="nav-link  "><span>Electronic</span><span class="badge badge-secondary"></span></a>
                        <a href="#" class="nav-link  "><span>Phone</span><span class="badge badge-secondary"></span></a>
                </div>

                
                <!-- /Filter by category-->
            </div>
            <!-- /Grid row -->

            <!-- Grid row -->
            <div class="row">

            </div>
            <!-- /Grid row -->
        </div>

    </div>
    <!-- /.Sidebar -->

    <!-- Content -->
    <div class="col-lg-9">

        <!-- Filter Area -->
        <div class="row">
            <div class="col-md-12 text-right">

                <!-- View Switcher -->
                <a class="btn btn-blue-grey btn-sm"><i class="fas fa-th mr-2" aria-hidden="true"></i><strong> Grid</strong></a>
                <a class="btn btn-blue-grey btn-sm"><i class="fas fa-th-list mr-2" aria-hidden="true"></i><strong> List</strong></a>
                <!-- /.View Switcher -->

            </div>

        </div>
        <section class="section pt-4">
            
            <div class="row">
                <?php foreach($barang as $dt) :?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card card-ecommerce">
                        <div class="view overlay">
                                <img src="<?php echo base_url().'/uploads/'.$dt->gambar?>" style="width: 254.98px; height: 169.98px" alt="">
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
                                    <a style="cursor: pointer;" class=" btn btn-primary text-white tambah_barang" > tambah </a>
                                    <a style="cursor: pointer;" class="btn btn-primary text-white" id="">Detail</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
    </div>
</div>

</div>
