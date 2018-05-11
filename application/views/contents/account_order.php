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
                        My account
                    </h1>
                    <!-- BREADCRUMBS -->
                    <ul class="breadcrumbs list-inline pull-right">
                        <li><a href="index-2.html">Home</a></li><!--
                        --><li><a href="03-shop-products.html">Shop</a></li><!--
                        --><li>Checkout</li>
                    </ul>
                    <!-- !BREADCRUMBS -->
                </div>
            </header>
        </div>
    </div><!-- !full-width -->
    <div class="container">
        <!-- !FULL WIDTH -->
        <!-- !SECTION EMPHASIS 1 -->

        <section class="row">
            <div class="col-sm-3">
                <nav class="shop-section-navigation element-emphasis-weak">
                    <ul class="list-unstyled">
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_dashboard">Dashboard</a></li>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_profile">Profil</a></li>
                        <li class="active"><span>Pesananku</span></li>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_shiping">Alamat Pengiriman</a></li>          
                        <li><a href="index-2.html">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix visible-xs space-30"></div>
            <div class="col-sm-9 space-left-30">
                <h2 class="strong-header large-header">Pesananku</h2>
                <div class="table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="width20"> Order No. </td>
                                <td> Order Date </td>
                                <td> Total </td>
                                <td> Status </td>
                                <td class="text-right width13"> Details </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?foreach($data_content as $val):?>
                                <tr>
                                    <td><a href="#"><strong><?=$val['id_order']?></strong></a></td>
                                    <td><?=date('F j, Y, H:i:s', strtotime($val['order_date']))?></td>
                                    <td>Rp.<?=$val['total_pay']?></td>
                                    <td><?=$val['order_status']?></td>
                                    <td class="text-right"> <a href="#">Lihat</a></td>
                                </tr>
                            <?endforeach?>                               
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>