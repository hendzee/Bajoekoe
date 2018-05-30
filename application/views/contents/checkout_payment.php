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
            <div class="clearfix space-30"></div>
            <div class="col-sm-5 col-sm-push-7 space-left-30">
                <section class="order-summary element-emphasis-weak">
                    <h3 class="strong-header element-header pull-left">
                        Pesanan Saya
                    </h3>
                    <a href="<?=base_url()?>index.php/Common/page_select/shoping_cart" class="pull-right">
                        <i class="fa fa-shopping-cart"></i> Ubah Pesanan
                    </a>
                    <div class="clearfix"></div>
                    <?foreach ($this->cart->contents() as $items):?>
                        <!-- SHOP SUMMARY ITEM -->
                        <article class="shop-summary-item">
                            <img src="<?=base_url()?>assets/images/item_image/<?=$items['image']?>" alt="Shop item in cart">
                            <header class="item-info-name-features-price">
                                <h4>
                                    <a href="04-shop-product-single.html">
                                        <?=$items['name']?>
                                    </a>
                                </h4>
                                <span class="features"><?=$items['options']['color']?>, <?=$items['options']['size']?></span><br>
                                <span class="quantity"><?=$items['qty']?></span><b>&times;</b><span class="price">Rp.<?=$items['price']?></span>
                            </header>
                        </article>
                    <?endforeach?>
                    <!-- !SHOP SUMMARY ITEM -->
                    <dl class="order-summary-price">
                        <dt>Subtotal</dt>
                        <dd><strong>Rp.<?=$this->cart->total()?></strong></dd>
                        <dt>Shipping</dt>
                        <dd>-</dd>
                        <dt class="total-price">Order total</dt>
                        <dd class="total-price"><strong>Rp.<?=$this->cart->total()?></strong></dd>
                    </dl>
                </section>
            </div>
            <div class="clearfix visible-xs space-30"></div>
            <div class="col-sm-7 col-sm-pull-5">
                <section class="checkout checkout-step-1 checkout-step-previous element-emphasis-weak">
                    <h2 class="strong-header element-header pull-left">
                        Informasi Pengiriman
                    </h2>
                    <?=form_open('Common/page_data_shiping')?>
                        <input type="hidden" id="first-name" name="first-name" value="<?=$dt_first_name?>">
                        <input type="hidden" id="last-name" name="last-name" value="<?=$dt_last_name?>">
                        <input type="hidden" id="email" name="email" value="<?=$dt_email?>">
                        <input type="hidden" id="phone" name="phone" value="<?=$dt_phone?>">
                        <input type="hidden" id="country" name="country" value="<?=$dt_country?>">
                        <input type="hidden" id="street-address" name="address" value="<?=$dt_address?>">
                        <input type="hidden" id="city" name="city" value="<?=$dt_city?>">
                        <input type="hidden" id="region" name="province" value="<?=$dt_province?>">
                        <input type="hidden" id="zip-code" name="zip-code" value="<?=$dt_zip_code?>">
                        <input type="hidden" name="page" value="checkout_shiping_edit" />
                        <button type="submit" class="btn btn-default btn-small pull-right">
                        Ubah
                        </button>
                    </form>
                    <div class="clearfix"></div>

                    <p>
                        <?=$dt_first_name.' '.$dt_last_name?><br/>
                        <?=$dt_ship_info?>
                    </p>
                    <h4 class="strong-header">
                        Informasi Kontak
                    </h4>

                    <p>
                        email:
                        <?=$dt_email?><br/> 
                        telepon:
                        <?=$dt_phone?><br/>
                    </p>
                </section>
                <section class="checkout checkout-step-3 checkout-step-current element-emphasis-strong clearfix">
                    <h2 class="strong-header element-header">
                        Metode Pembayaran
                    </h2>
                    <p>
                        Pembayaran dilakukan dengan melakukan transfer bank pada rekening yang tersedia. Barang akan dikirim 1 hari setelah anda melakukan pembayaran. Klik tombol di bawah untuk menyimpan data pengiriman dan melihat detail rekening bank kami.
                    </p>
                    <?=form_open('Common/create_order', 'role="form"')?>
                        <input type="hidden" id="first-name" name="first-name" value="<?=$dt_first_name?>">
                        <input type="hidden" id="last-name" name="last-name" value="<?=$dt_last_name?>">
                        <input type="hidden" id="email" name="email" value="<?=$dt_email?>">
                        <input type="hidden" id="phone" name="phone" value="<?=$dt_phone?>">
                        <input type="hidden" id="country" name="country" value="<?=$dt_country?>">
                        <input type="hidden" id="street-address" name="address" value="<?=$dt_address?>">
                        <input type="hidden" id="city" name="city" value="<?=$dt_city?>">
                        <input type="hidden" id="region" name="province" value="<?=$dt_province?>">
                        <input type="hidden" id="zip-code" name="zip-code" value="<?=$dt_zip_code?>">
                        <button type="submit" class="btn btn-primary pull-right">Selesai</button>
                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>