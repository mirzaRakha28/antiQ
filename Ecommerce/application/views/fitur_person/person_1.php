<!-- 
<div class="login ">
    <div class="text-center ">
        <div class="costumer">    
            <div class="text-center costumer_log "style= "float: left   ">
                <a href="">New Costumer</a>
                <hr>
            </div>
            <div class="text-center costumer_log" style= "float: right">
                <a href="<?php echo site_url('fitur_person/person_0') ?>">Old Custumer</a>
                <hr>
            </div>
        </div>
        
    <div class="text-center" >
        <h2 class="text-judul">
            <b>Create Account</b>
        </h2>
        <form class="user" method="post" action="<?= base_url('index.php/fitur_person/person_0/registration'); ?>">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Address" value="<?= set_value('email'); ?>">
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                </div>
            </div>
            <button type="submit" class="btn btn-danger btn-user btn-block">
                Register Account
            </button>
        </form>
    </div> -->

    <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
        <div class="card-body p-0">
                <div class="text-center ">
                <div class="costumer">    
                    <div class="text-center costumer_log "style= "float: left   ">
                        <a href="">New Costumer</a>
                        <hr>
                    </div>
                    <div class="text-center costumer_log" style= "float: right">
                        <a href="<?php echo site_url('fitur_person/person_0') ?>">Old Custumer</a>
                        <hr>
                    </div>
                </div>
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('index.php/fitur_person/person_0/registration'); ?>">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Address" value="<?= set_value('email'); ?>">
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                </div>
            </div>
            <button type="submit" class="btn btn-danger btn-user btn-block">
                Register Account
            </button>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 