<section id="Content" role="main">
    <div class="container">

        <!-- SECTION EMPHASIS 1 -->
        <!-- FULL WIDTH -->
    </div>
    <!-- !container -->    
    <!-- !full-width -->
    <div class="container">
        <!-- !FULL WIDTH -->
        <!-- !SECTION EMPHASIS 1 -->

        <div class="row">
            <?=$this->session->flashdata('msg')?>
            <div class="clearfix space-30"></div>
            <div class="col-sm-5 col-sm-push-7 space-left-30">
                <p>
                    Cek status pengiriman digunakan khusus bagi pembeli non member. 
                    Silahkan daftar untuk memudahkan pengecekan pesanan anda di 
                    lain waktu.
                </p>              
            </div>
            <div class="clearfix visible-xs space-30"></div>
            <div class="col-sm-7 col-sm-pull-5">
                <section class="order-check element-emphasis-strong clearfix">
                    <h2 class="strong-header element-header">
                        Cek status pengiriman
                    </h2>
                    <?=form_open('Common/order_check', 'role="form"')?>
                        <div class="form-group">
                            <label for="id-order">Order ID</label>
                            <input type="text" class="form-control" id="id-order" name="id-order" required>
                        </div>                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>                        
                        <button type="submit" class="btn btn-primary pull-right">Kirim</button>
                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>