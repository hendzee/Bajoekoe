<section id="Content" role="main">
    <div class="container">

        <!-- SECTION EMPHASIS 1 -->
        <!-- FULL WIDTH -->
    </div>
    <!-- !container -->
    <div class="full-width section-emphasis-1 page-header">
        <div class="container">
            <header class="row">
                <div class="col-md-12">
                    <h1 class="strong-header pull-left">
                        Pembayaran
                    </h1>
                    <!-- BREADCRUMBS -->
                    <ul class="breadcrumbs list-inline pull-right">
                        <li><a href="index-2.html">Home</a></li>
                        <!--
                        -->
                        <li><a href="03-shop-products.html">Shop</a></li>
                        <!--
                        -->
                        <li>Checkout</li>
                    </ul>
                    <!-- !BREADCRUMBS -->
                </div>
            </header>
        </div>
    </div>
    <!-- !full-width -->
    <div class="container">
        <!-- !FULL WIDTH -->
        <!-- !SECTION EMPHASIS 1 -->

        <div class="row">
            <?=$this->session->flashdata('msg')?>
            <div class="clearfix space-30"></div>
            <div class="col-sm-5 col-sm-push-7 space-left-30">
                <p>
                    Jika anda sudah melakukan pembayaran silahkan masukkan Order ID dan upload bukti transfer anda. Jika anda memiliki pertanyaan silahkan hubungi kami <a href="#">disini</a>
                </p>
                <div class="tabs">
                    <ul class="nav nav-tabs nav-tabs-notop">
                        <li class="active"><a href="#bca" data-toggle="tab">REKENING BCA</a></li>
                        <li><a href="#cimb" data-toggle="tab">REKENING CIMB</a></li>
                        <li><a href="#bni" data-toggle="tab">REKENING BNI</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="bca">
                            <p>
                                Account name: <strong>Decima store</strong><br> Account number: <strong>123456789</strong><br> Store code: <strong>01-02-03</strong><br> Bank name: <strong>Sample Bank</strong><br> IBAN: <strong>GB29 NWBK 6016 1331 9268 19</strong>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="cimb">
                            <p>
                                Account name: <strong>Decima store</strong><br> Account number: <strong>123456789</strong><br> Store code: <strong>01-02-03</strong><br> Bank name: <strong>Sample Bank</strong><br> IBAN: <strong>GB29 NWBK 6016 1331 9268 19</strong>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="bni">
                            <p>
                                Account name: <strong>Decima store</strong><br> Account number: <strong>123456789</strong><br> Store code: <strong>01-02-03</strong><br> Bank name: <strong>Sample Bank</strong><br> IBAN: <strong>GB29 NWBK 6016 1331 9268 19</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-xs space-30"></div>
            <div class="col-sm-7 col-sm-pull-5">
                <section class="payment element-emphasis-strong clearfix">
                    <h2 class="strong-header element-header">
                        Upload Bukti Pembayaran
                    </h2>
                    <?=form_open_multipart('Common/payment_check', 'role="form"')?>
                        <div class="form-group">
                            <label for="id-order">Order ID</label>
                            <input type="text" class="form-control" id="id-order" name="id-order" required>
                        </div>
                        <div class="form-group">
                            <label for="transfer-bank">Rekening</label>
                            <select class="chosen chosen-select-deselect form-control" name="transfer-bank" id="transfer-bank" data-placeholder=" " tabindex="1">
                            <option>BCA</option>
                            <option>BCO</option>
                            <option>BCD</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="token-img">Bukti Pembayaran</label>
                            <input type="file" id="token-img" name="token-img" required>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Kirim</button>
                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>