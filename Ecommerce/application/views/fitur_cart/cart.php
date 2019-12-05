    <div class="pb-5">
        <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

            <!-- Shopping cart table -->
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col" class="border-0 bg-light">
                        <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->cart->contents() as $items){ ?>
                    
                        <tr>
                    <th scope="row" class="border-0">
                        <div class="p-2">
                        <img src="<?= base_url('')?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?=  $items['name']?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                        </div>
                        </div>
                    </th>
                    <td class="border-0 align-middle"><strong><?= number_format($items['price'],0,',','.') ?></strong></td>
                    <td class="border-0 align-middle">
                        <a href="" class="text-dark"><i class="fas fa-minus-circle"></i></a>
                        <strong class= "px-1"><?= $items['qty'] ?></strong>
                        <a href="" class="text-dark"><i class="fas fa-plus-circle"></i></a>
                    </td>
                    </tr>
                    <tr>

                    <?php } ?>  
                </tbody>
                </table>
            </div>
            <!-- End -->
            <a href="<?=  base_url('index.php/fitur_cart/cart/hapus_data') ?>"> 
                <button id="button-addon3" type="button" class="btn btn-outline-dark px-4 mr-2 ml-3 border-1" style="outline-color:
                #730006">Delete</button>    
            </a>
            <button id="button-addon3" type="button" class="btn btn-dark px-4 no-border" style="background-color: #730006">Update Cart</button>
            </div>

        </div> 
        <div class="row rounded">
            <span class="col-sm border border-dark">
            <div class="px-2 py-3 text-uppercase font-weight-bold">Cart Totals</div>
            <div class="p-2">
                <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>Rp. <?= number_format($this->cart->total(),0,',','.') ?></strong></li>
                <?php $pajak = $this->cart->total()*0.1; ?>
                <?php $pajak = $pajak + $this->cart->total(); ?>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">Rp.  <?= number_format($pajak,0,',','.') ?></h5>
                </li>
                </ul>
                <div class="text-right mb-3">
                <a href="<?php echo site_url('fitur_checkout/checkout') ?>" class="btn btn-dark border-0 py-2" style="background-color: #730006">Procceed to checkout</a>
                </div>
                
            </div>
            </span>
        </div>

        </div>
    </div>