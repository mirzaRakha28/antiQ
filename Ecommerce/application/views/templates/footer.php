    <footer class="text-white foot p-5" style="background: #00020A;">

        <div class="row">

            <div class="col-sm-4">
                <div class="mrAuto first-last">
                    <img src="<?php  echo base_url('assets/img/antiK.png')?>" alt="" >
                    <p class="visi" style="margin: 5px;">Menjual barang-barang bekas yang <br>unik, trendy, dan terjangkau</p>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="mrAuto">
                    <p><b>Contac Us:</b></p>
                    <p><a href="" class="foot">Instagram</a></p>
                    <p><a href="" class="foot">Instagram</a></p>
                    <p><a href="" class="foot">Instagram</a></p>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="mrAuto">
                    <p><b>Information:</b></p>
                    <p><a href="" class="foot">FaQs</a></p>
                    <p><a href="" class="foot">Resi Pengiriman</a></p>
                    

                </div>
            </div>
            <div class="col-sm-4">
                <div class="mrAuto first-last">
                    <p><b>NEWSLETTER:</b></p>
                    <p class="visi">Subcribe to receive updates, acces<br>to    exclusive deals, and more.</p>
                    <form>
                        <div class="form-group">
                            <input class="form-control form-control-sm mt-2" type="text" name="email4subs" placeholder="Enter Your Email">
                            <button class="btn btn-primary mt-2" style="background-color: #730006; border: none">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url()?>assets/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/js/script.js"></script>
    <script>
        var tombol = document.getElementsByClassName('tambah_barang');
        var angka  = document.getElementById('jml_brg');


        tombol.onclick = function(event){
                
                    angka.innerHTML = ++jumlah;
                
        }
    </script>
</body>

</html>
<script>
$(document).ready(function(){

load_data();

function load_data(query)
{
    $.ajax({
            url:"<?php echo base_url(); ?>index.php/fitur_search/search/fetch",
            method:"POST",
            data:{query:query},
            success:function(data){
            $('#result').html(data);
        }
    })
}

$('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
        load_data(search);
    }
    else
    {
        load_data();
    }
});
});
</script>