

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/profile.html">Profile</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/orders.html">Orders</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Konfirmasi Order #01234123
                        <div class="float-right">
                            <span class="badge badge-pill badge-info">Menunggu Pembayaran</span>
                        </div>
                    </div>
                    <form action="<?= base_url('fitur_invoice/invoice')?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Transaksi</label>
                                <input type="text" class="form-control" value="01234123" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Dari Rekening a/n</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Sebesar</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Catatan</label>
                                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Bukti Transfer</label> <br>
                                <input type="file" name="image" id="">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

<script src="/assets/libs/jquery/jquery-3.4.1.min.js" ></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>