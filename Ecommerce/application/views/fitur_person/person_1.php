
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
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
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