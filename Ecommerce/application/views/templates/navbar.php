
<body id="page-top" style="background: #FFFAFA;">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
            <a href="<?php echo site_url('fitur_search/search') ?>" class="navbar d-flex w-50 mr-auto"><i class="fas fa-search"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link " href="<?php echo site_url('dashboard') ?>">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo site_url('fitur_categories/category') ?>">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a id="brand" class="nav-link" href="#"><img style="width:53px ; height: 22px" src="<?php echo base_url('assets/img/rev.png') ?>" alt="" class="logo"></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo site_url('fitur_whatnew/whatsnew') ?>">What's New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('fitur_contact/contact') ?>">Contact Us</a>
                    </li>
                </ul>


                <?php if($this->cart->total_items()) == '0' ?>{
                    <a href="<?php echo site_url('fitur_cart/cart') ?>" class="nav ml-auto w-100 justify-content-end"><i class="fas fa-shopping-cart"></i></a>
                }
                 <?php if($this->cart->total_items() === 0) {?>
                    <a href="<?php echo site_url('fitur_cart/cart') ?>" class="nav ml-auto w-100 justify-content-end"><i class="fas fa-cart-plus"></i></a>
                <?php }else {?>
                    <a href="<?php echo site_url('fitur_cart/cart') ?>" class="nav ml-auto w-100 justify-content-end"><i class="fas fa-shopping-cart"></i>  </a>
                <?php } ?>

        </nav>

