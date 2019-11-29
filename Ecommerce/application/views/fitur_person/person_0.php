
<div class="login ">
    <div class="text-center ">
        <div class="costumer">    
            <div class="text-center costumer_log "style= "float: left   ">
                <a href="<?php echo site_url('fitur_person/person_0/registration') ?>">New Costumer</a>
                <hr>
            </div>
            <div class="text-center costumer_log" style= "float: right">
                <a href="">Old Custumer</a>
                <hr>
            </div>
        </div>
        
    <div class="text-center" >
        <h2 class="text-judul">
            <b>Login Account</b>
        </h1>
        <form  class="user" method="post" action="<?= base_url('index.php/fitur_person/person_0'); ?>" >
            <div class="form-group input_data">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group input_data">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

            </div>
            <div class="form-group login_submit">
                <button type="submit" class="btn btn-primary login_submit">Login</button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
