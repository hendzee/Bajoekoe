<section id="Content" role="main">
    <div class="container">

        <!-- SECTION EMPHASIS 1 -->
        <!-- FULL WIDTH -->
    </div><!-- !container -->
    <div class="full-width section-emphasis-1 page-header">
        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1 class="strong-header pull-left">
                        Pesanan Diterima
                    </h1>
                    <!-- BREADCRUMBS -->
                    <ul class="breadcrumbs list-inline pull-right">
                        <li><a href="index.html">Home</a></li><!--
                        --><li><a href="03-shop-products.html">Shop</a></li><!--
                        --><li>Order received</li>
                    </ul>
                    <!-- !BREADCRUMBS -->
                </div>
            </header>
        </div>
    </div><!-- !full-width -->
    <div class="container">
        <!-- !FULL WIDTH -->
        <!-- !SECTION EMPHASIS 1 -->

        <div class="row">
            <section class="col-sm-6 col-md-5">
                <p class="order-first-paragraph">
                    Pesanan anda telah berhasil dibuat.
                </p>
                <p>
                    Order ID: <strong><?=$data_id?></strong><br>
                    Tanggal: <strong><?=date('F j, Y', strtotime($data_date))?></strong><br>
                    Total Pembayaraan: <strong>Rp.<?=$data_payment?></strong><br>
                </p>
                <p>
                    Silahkan lakukan pembayaran melalui transfer di nomor rekening yang tersedia
                    dalam waktu 5 jam dari pemesanan. Pengiriman akan dilakukan sehari setelah anda melakukan
                    pembayaran.
                </p>
                <div class="clearfix"></div>                                
            </section>
            <div class="clearfix visible-xs space-30"></div>
            <aside class="col-sm-6 col-md-7">                                
                <div class="tabs">
                    <ul class="nav nav-tabs nav-tabs-notop">
                        <li class="active"><a href="#bca" data-toggle="tab">REKENING BCA</a></li>
                        <li><a href="#cimb" data-toggle="tab">REKENING CIMB</a></li>                        
                        <li><a href="#bni" data-toggle="tab">REKENING BNI</a></li>
                    </ul>

                    <div class="tab-content">    
                        <div class="tab-pane fade in active" id="bca">
                            <p>
                                Account name: <strong>Decima store</strong><br>
                                Account number: <strong>123456789</strong><br>
                                Store code: <strong>01-02-03</strong><br>
                                Bank name: <strong>Sample Bank</strong><br>
                                IBAN: <strong>GB29 NWBK 6016 1331 9268 19</strong>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="cimb">
                            <p>
                                Account name: <strong>Decima store</strong><br>
                                Account number: <strong>123456789</strong><br>
                                Store code: <strong>01-02-03</strong><br>
                                Bank name: <strong>Sample Bank</strong><br>
                                IBAN: <strong>GB29 NWBK 6016 1331 9268 19</strong>
                            </p>
                        </div>    
                        <div class="tab-pane fade" id="bni">
                            <p>
                                Account name: <strong>Decima store</strong><br>
                                Account number: <strong>123456789</strong><br>
                                Store code: <strong>01-02-03</strong><br>
                                Bank name: <strong>Sample Bank</strong><br>
                                IBAN: <strong>GB29 NWBK 6016 1331 9268 19</strong>
                            </p>
                        </div>    
                    </div>                    
                </div>
                <div class="space-30"></div>
                <a href="<?=base_url()?>index.php/Common/page_select/payment" class="btn btn-default">Lakukan Pembayaran</a>
            </aside>
        </div>

    </div>
</section>