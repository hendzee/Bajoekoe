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
                            Keranjang Saya
                        </h1>
                        <!-- BREADCRUMBS -->
                        <ul class="breadcrumbs list-inline pull-right">
                            <li><a href="index-2.html">Home</a></li><!--
                        --><li><a href="03-shop-products.html">Shop</a></li><!--
                        --><li>Shopping cart</li>
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
                <?=$this->session->flashdata('msg')?>                

                <div class="col-xs-12">
                    <div class="table table-responsive cart-summary">
                        <table>
                            <thead>
                            <tr>
                                <td colspan="2">Barang</td>
                                <td class="width16">Pilihan</td>
                                <td class="width16">Jumlah</td>
                                <td class="text-right width16">Subtotal</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?foreach ($this->cart->contents() as $items):?>                                   
                                <tr>
                                    <td>
                                        <a href="<?=base_url()?>index.php/Common/page_single_product/<?=$items['id']?>/<?=$items['options']['color']?>">
                                            <img class="cart-img" src="<?=base_url()?>assets/images/item_image/<?=$items['image']?>" alt="Shop item">
                                        </a>
                                    </td>
                                    <td>
                                        <h4><a href="<?=base_url()?>index.php/Common/page_single_product/<?=$items['id']?>/<?=$items['options']['color']?>"><strong><?=$items['name']?></strong></a></h4>
                                        <span class="price">Rp.<?=$items['price']?> / Barang</span>
                                        <br><br>                                            
                                        <a href="<?=base_url()?>index.php/Common/remove_item_cart/<?=$items['rowid']?>/cart"><i class="fa fa-trash-o"></i> Hapus dari daftar</a>
                                    </td>
                                    <td>
                                        <p class="features">
                                            Warna: <strong><?=$items['options']['color']?></strong><br>
                                            Ukuran: <strong><?=$items['options']['size']?></strong>
                                        </p>                                            
                                    </td>
                                    <td>                                                           
                                        <?=form_open('Common/update_cart')?>
                                            <input name="id_item" type="hidden" value="<?=$items['id']?>" />
                                            <input name="color" type="hidden" value="<?=$items['options']['color']?>" />
                                            <input name="size" type="hidden" value="<?=$items['options']['size']?>" />
                                            <input name="rowid" type="hidden" value="<?=$items['rowid']?>" />
                                            <input name="qty" type="number" min="0" value="<?=$items['qty']?>" class="form-control quantity-spinner" id="" required>
                                            <br/>
                                            <i class="fa fa-save"></i><input type="submit" class="update-cart" value="simpan" />
                                        </form>
                                    </td>
                                    <td class="text-right">
                                        <strong>Rp.<?=$items['subtotal']?></strong>
                                    </td>
                                </tr>
                            <?endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 form-inline">
                    <div class="form-group">
                        <label for="promo-code" class="sr-only">Promo code</label>
                        <input type="text" class="form-control" id="promo-code" placeholder="Enter promo code">
                    </div><!--
                    --><button type="button" class="btn btn-primary btn-small">OK</button>
                </div>
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="table">
                        <table class="price-calc">
                            <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td class="text-right">
                                        <strong>Rp.<?=$this->cart->total()?></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-link shipment-calc-toggle">Calculate</button>
                                    </td>
                                </tr>
                                <tr class="shipment-calc">
                                    <td colspan="2">
                                        <div class="form-group">
                                            <label for="country" class="sr-only">Country</label>
                                            <select class="chosen chosen-select-deselect form-control" id="country" data-placeholder="Select your country" tabindex="1">
                                                <option value=""> </option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                            </select>
                                            <label for="state" class="sr-only">State</label>
                                            <select class="chosen chosen-select-deselect form-control" id="state" data-placeholder="Select your state" tabindex="1">
                                                <option value=""> </option>
                                                <option value="">Alaska</option>
                                                <option value="">Arizona</option>
                                                <option value="">Arkansas</option>
                                                <option value="">California</option>
                                                <option value="">Colorado</option>
                                                <option value="">Connecticut</option>
                                                <option value="">Delaware</option>
                                                <option value="">Florida</option>
                                                <option value="">Georgia</option>
                                                <option value="">Hawaii</option>
                                                <option value="">Idaho</option>
                                                <option value="">Illinois</option>
                                                <option value="">Indiana</option>
                                                <option value="">Iowa</option>
                                                <option value="">Kansas</option>
                                                <option value="">Kentucky</option>
                                            </select>
                                            <label for="postal-code" class="sr-only">Postal code / Zip code</label>
                                            <input type="text" class="form-control" id="postal-code" placeholder="Postal code / Zip code">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total Pembayaran</th>
                                    <td class="text-right">
                                        $89.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12">
                    <a href="<?=base_url()?>index.php/Common/page_select/product_list" class="btn btn-default pull-left">Lanjutkan Belanja</a>
                    <a href="<?=base_url()?>index.php/Common/page_select/checkout_shiping" class="btn btn-primary pull-right">Buat Pesanan</a>
                </div>                
            </section>
        </div>
  </section>