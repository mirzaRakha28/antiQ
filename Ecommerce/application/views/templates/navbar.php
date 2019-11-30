
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

            <input type="text" class="search-txt" placeholder="Cari..">
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
                        <a class="nav-link" href="<?php echo site_url('fitur_whatnew/whatsnew') ?>">What's New</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('fitur_contact/contact') ?>">Contact Us</a>
                    </li>
                </ul>

                <a href="<?php echo site_url('fitur_cart/cart') ?>" class="nav ml-auto w-100 justify-content-end"><i class="fas fa-shopping-cart"></i></a>
                <?php
                    if(isset($_SESSION['email'])){
                        if($_SESSION['email'] = ''){
                            $this->load->view('templates/login');
                        }
                        else{
                            $this->load->view('templates/non_login');
                        }
                    }
                    else{
                        $this->load->view('templates/login');
                    }
                ?>
            </div>
        </nav>


        <!-- Sidebar Toggle (Topbar) -->
        