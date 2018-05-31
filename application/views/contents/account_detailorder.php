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
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_dashboard">Dashboard</a></li>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_profile">Profil</a></li>
                        <li class="active"><span>Pesananku</span></li>
                        <li><a href="<?=base_url()?>index.php/Common/page_select/account_shiping">Alamat Pengiriman</a></li>
                        <li><a href="<?=base_url()?>index.php/Common/logout">Logout</a></li>
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
                                <td class="width20"> # </td>
                                <td> Nama Barang </td>
                                <td> Warna </td>
                                <td> Ukuran </td>
                                <td> Harga </td>
                                <td> Jumlah </td>
                                <td class="text-right width13"> Subtotal </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?foreach($data_content as $val):?>
                                <tr>
                                    <td><?=$val['id_item']?></td>
                                    <td><?=$val['name']?></td>
                                    <td><?=$val['color']?></td>
                                    <td><?=$val['size']?></td>
                                    <td><?=$val['price']?></td>
                                    <td><?=$val['number_item']?></td>
                                    <td><?=$val['subtotal']?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>