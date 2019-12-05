
<body id="page-top" style="background: #FFFAFA;">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
        <div class="search-box navbar d-flex w-50 mr-auto">

            <a href="<?php echo site_url('fitur_search/search') ?>" class="navbar d-flex w-50 mr-auto search-btn"><i class="fas fa-search"></i></a>

        </div>    
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link " href="<?php echo site_url('dashboard') ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('fitur_categories/category') ?>">Categories</a>
                    </li>
                    <li class="nav-item active">
                        <a id="brand" class="nav-link" href="#"><img style="width:53px ; height: 22px" src="<?php echo base_url('assets/img/rev.png') ?>" alt="" class="logo"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('fitur_whatsnew/whatsnew') ?>">What's New</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('fitur_contact/contact') ?>">Contact Us</a>
                    </li>
                </ul>

                
                <a class="p-0 nav ml-auto w-100 justify-content-end " href="<?php if($this->session->isLogin !== true){ echo base_url(); } else { echo base_url('fitur_cart/cart'); } ?>">
                        
                        <img src="<?= base_url('assets/img/cart.png') ?>" alt="cart" width="24px">
                </a>
                <span class="sr-only">(current)</span>
                <span class="badge badge-danger "  id="jml_brg"><script>var jumlah = 0</script></span>


                <!-- <a href="<?php echo site_url('fitur_cart/cart') ?>" class="nav ml-auto w-100 justify-content-end"><i class="fas fa-shopping-cart"></i></a> -->
                <?php
                    
                    // var_dump($this->session->isLogin); die();

                    if(isset($this->session->isLogin)){
                        if($this->session->isLogin){
                            $this->load->view('templates/non_login');
                        }
                        else{
                            $this->load->view('templates/login');
                        }
                    }else{
                        $this->load->view('templates/login');
                    }
                    
                ?>
            </div>
        </nav>

