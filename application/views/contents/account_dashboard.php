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

        <section class="row">
            <div class="col-sm-3">
                <nav class="shop-section-navigation element-emphasis-weak">
                    <ul class="list-unstyled">
                        <li class="active"><span>Dashboard</span></li>
                        <hr>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_profile">Profil</a></li>
                        <hr>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_order">Pesananku</a></li>
                        <hr>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_shiping">Alamat Pengiriman</a></li>
                        <hr>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_wishlist">My Wishlist</a></li>
                        <hr>
                        <li><a href="<?=base_url()?>index.php/Common/logout">Logout</a></li>                        
                    </ul>
                </nav>
            </div>
            <div class="clearfix visible-xs space-30"></div>
            <div class="col-sm-9 space-left-30">
                <h2 class="strong-header large-header">Dashboard</h2>
                <p>
                    Pada halaman ini anda dapat melihat rangkuman data diri anda, informasi alamat shiping (apabila anda melakukan pembelian) dan juga history aktivitas belanja anda pada toko kami.
                </p>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="strong-header">Informasi Akun</h3>
                        <?foreach($data_content['account'] as $val):?>
                            <p>
                                <br>
                                <?=$val['first_name'].' '.$val['last_name']?><br>
                                    <?=$val['email']?><br>
                                        <br>
                            </p>
                        <?endforeach?>
                                <a href="<?=base_url()?>index.php/Common/page_select/account_profile" class="btn btn-primary btn-small">
                            Edit
                        </a>
                                <hr class="visible-xs">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="strong-header">Alamat Pengiriman</h3>
                        <?foreach($data_content['account'] as $val):?>
                            <p>
                                <br>
                                <?=$val['country']?><br>
                                <?=$val['province']?><br>
                                <?=$val['city']?><br>
                                <?=$val['address']?><br>
                                <?=$val['zip_code']?><br>
                                <?=$val['phone']?><br>
                                <br>
                            </p>
                            <?endforeach?>
                                <a href="<?=base_url()?>index.php/Common/page_select/account_shiping" class="btn btn-primary btn-small">
                            Edit
                        </a>
                    </div>
                </div>
                <hr>
                <h3 class="strong-header">Recent orders</h3>
                <div class="table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="width20">ID Pesan</td>
                                <td>Tanggal Pesan</td>
                                <td>Total</td>
                                <td>Status</td>
                                <td class="text-right width13">Detail</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?foreach($data_content['order_history'] as $val):?>
                                <tr>
                                    <td>
                                        <a href="<?=base_url()?>index.php/Common/page_detail_order/<?=$val['id_order']?>">
                                            <strong><?=$val['id_order']?></strong>
                                        </a>
                                    </td>
                                    <td>
                                        <?=date('F j, Y, H:i:s', strtotime($val['order_date']))?>
                                    </td>
                                    <td>Rp.
                                        <?=$val['total_pay']?>
                                    </td>
                                    <td>
                                        <?=$val['order_status']?>
                                    </td>
                                    <td class="text-right"> 
                                        <a 
                                            href="<?=base_url()?>index.php/Common/page_detail_order/<?=$val['id_order']?>"
                                            class="btn btn-primary btn-small"
                                        >
                                            Lihat
                                        </a>
                                    </td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
                </div>
                <a 
                    href="<?=base_url()?>index.php/Common/page_select/account_order"
                    class="btn btn-default btn-small"
                >
                    Lihat Semua
                </a>
            </div>
        </section>
    </div>
</section>