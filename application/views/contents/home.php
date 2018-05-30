<section id="Content" role="main">
<div class="container">

<!-- FULL WIDTH -->
</div>
<!-- !container -->
<div class="full-width no-space flexslider-full-width">
  <!-- FLEXSLIDER -->
  <!-- SPECIAL VERSION 1 -->
  <div class="flexslider">
    <ul class="slides">
      <!-- FLEXSLIDER SLIDE -->
      <?$slider_1 = ''?>
      <?foreach($data_content['shop_slider_1'] as $val) {
        $slider_1 = $val['image'];
      }?>
      <li style="background-image: url(<?=base_url()?>assets/images/common_image/<?=$slider_1?>); min-height: 560px">
        <!-- <div class="container">
          <div class="row">
            <div class="col-sm-4 col-sm-offset-6">
              <br><br><br><br><br><br><br> -->
              <!-- CALL TO ACTION BOX -->
              <!-- <div class="calltoaction-box text-center">
                <h4 class="strong-header">20% off new season</h4>

                <p>
                  Bring your wardrobe up to speed with Autumn/Winter 2013: shop transitional
                  pieces, all with 20% off
                  <br><br>
                </p>
                <a href="#" class="btn btn-primary">Shop now</a>
              </div> -->
              <!-- !CALL TO ACTION BOX -->
            <!-- </div>
          </div>
        </div> -->
      </li>
      <!-- !FLEXSLIDER SLIDE -->
      <!-- FLEXSLIDER SLIDE -->
      <?$slider_2 = ''?>      
      <?foreach($data_content['shop_slider_2'] as $val) {
        $slider_2 = $val['image'];
      }?>
      <li style="background-image: url(<?=base_url()?>assets/images/common_image/<?=$slider_2?>); min-height: 560px">
          <!-- <div class="container">
              <div class="row">
                  <div class="col-sm-5 col-sm-offset-7">
                      <br><br>
                      <div class="calltoaction-box calltoaction-box-version-2 text-center">
                          <h4 class="strong-header">Ray of light</h4>
                          <p>
                              Hit the road in your festival favourites -<br>
                              fringed vests, bleach effect denim, tie-dye and dungarees
                          </p>
                          <a href="#" class="btn btn-primary">Shop now</a>
                      </div>
                  </div>
              </div>
          </div> -->
      </li>
      <!-- !FLEXSLIDER SLIDE -->

    </ul>
    <div class="flexslider-full-width-controls"></div>
  </div>
  <!-- !FLEXSLIDER -->
</div>
<!-- !full-width -->
<div class="container">
  <!-- !FULL WIDTH -->


  <!-- !SECTION EMPHASIS 1 -->
  <!-- FULL WIDTH -->
</div>
<!-- !container -->

<div class="container">
<!-- !FULL WIDTH -->
<!-- !SECTION EMPHASIS 1 -->

<section class="row">
  <div class="section-header col-xs-12">   
    <h2 class="strong-header">
      Promo
    </h2>
  </div>
  <div class="col-sm-4">
    <!-- SHOP HIGHLIGHT -->
    <!-- VERSION 1 -->
    <div class="shop-item-highlight shop-item-highlight-version-1">
      <?foreach($data_content['shop_promo_1'] as $val):?>
        <a href="<?=base_url()?>index.php/Common/product_list_param/name/<?=$val['ref']?>">
          <img src="<?=base_url()?>assets/images/common_image/<?=$val['image']?>" alt="Highlighted shop item">
        </a>

        <a href="<?=base_url()?>index.php/Common/product_list_param/name/<?=$val['ref']?>" class="item-info-name-data" display="none">
          <div class="item-info-name-data-wrapper">
            <h4><?=$val['title']?></h4>          
          </div>
        </a>
      <?endforeach?>
    </div>
    <!-- !SHOP HIGHLIGHT -->
    <!-- !VERSION 1 -->
  </div>
  <div class="clearfix visible-xs space-30"></div>
  <!-- VIRTUAL ROW !IMPORTANT -->
  <div class="col-sm-4">
    <!-- SHOP HIGHLIGHT -->
    <!-- VERSION 1 -->
    <div class="shop-item-highlight shop-item-highlight-version-1">
      <?foreach($data_content['shop_promo_2'] as $val):?>
        <a href="<?=base_url()?>index.php/Common/product_list_param/name/<?=$val['ref']?>">
          <img src="<?=base_url()?>assets/images/common_image/<?=$val['image']?>" alt="Highlighted shop item">
        </a>

        <a href="<?=base_url()?>index.php/Common/product_list_param/name/<?=$val['ref']?>" class="item-info-name-data">
          <div class="item-info-name-data-wrapper">
            <h4><?=$val['title']?></h4>          
          </div>
        </a>
      <?endforeach?>
    </div>
    <!-- !SHOP HIGHLIGHT -->
    <!-- !VERSION 1 -->
  </div>
  <div class="clearfix visible-xs space-30"></div>
  <!-- VIRTUAL ROW !IMPORTANT -->
  <div class="col-sm-4">
    <!-- SHOP HIGHLIGHT -->
    <!-- VERSION 1 -->
    <div class="shop-item-highlight shop-item-highlight-version-1">
      <?foreach($data_content['shop_promo_3'] as $val):?>
        <a href="<?=base_url()?>index.php/Common/product_list_param/name/<?=$val['ref']?>">
          <img src="<?=base_url()?>assets/images/common_image/<?=$val['image']?>" alt="Highlighted shop item">
        </a>

        <a href="<?=base_url()?>index.php/Common/product_list_param/name/<?=$val['ref']?>" class="item-info-name-data">
          <div class="item-info-name-data-wrapper">
            <h4><?=$val['title']?></h4>          
          </div>
        </a>
      <?endforeach?>
    </div>
    <!-- !SHOP HIGHLIGHT -->
    <!-- !VERSION 1 -->
  </div>
  <div class="clearfix visible-xs space-30"></div>
  <!-- VIRTUAL ROW !IMPORTANT -->
</section>

<!-- FLEXSLIDER -->
<!-- STANDARD -->
<section class="row">
<div class="section-header col-xs-12">  
  <h2 class="strong-header">
    Produk Baru
  </h2>
</div>
<div class="col-md-12">
<div class="flexslider flexslider-nopager row">
<ul class="slides">
  <?$counter = 0;?>
  <?foreach ($data_content['new_item'] as $val): ?>
  <?
    $get_stock = array();
    $count_stock = 0;
    $id_item = $val['id_item'];
    $color = $val['color'];      
    $query = "SELECT SUM(stock) AS count_stock FROM stock_table WHERE id_item='$id_item' AND color='$color'";
    $get_stock = $this->Database->all_query($query);

    foreach($get_stock as $item_stock){
      $count_stock = $item_stock['count_stock'];
    }
  ?>                        
  <?if($count_stock):?>
  <? if ($counter == 0 || $counter == 4) { ?>
    <li class="row">            
  <? } ?>
    <div class="col-md-3 col-sm-6">            
      <!-- SHOP FEATURED ITEM -->
      <div class="shop-item shop-item-featured overlay-element">
        <div class="overlay-wrapper">
          <a href="04-shop-product-single.html">
            <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_one']?>" alt="Shop item">
          </a>

          <div class="overlay-contents">
            <div class="shop-item-actions">              
              <a 
              href="<?=base_url()?>index.php/Common/page_single_product/<?=$val['id_item']?>/<?=$val['color']?>" 
              class="btn btn-primary btn-block">
                Lihat
              </a>              
            </div>
          </div>
        </div>
        <div class="item-info-name-price">
          <h4>
            <a href="<?=base_url()?>index.php/Common/page_single_product/<?=$val['id_item']?>/<?=$val['color']?>">
              <?=$val['name']?>
            </a>
          </h4>
          <? if ($val['discount'] > 0 && $val['discount'] != null):?>
            <?
              $dis_price = $val['price'] - ($val['price'] * $val['discount'] / 100);
            ?>
            <span class="price-old">Rp.<?=$val['price']?></span>&nbsp;&nbsp;<span class="price">Rp.<?=$dis_price?>,-</span>
          <?else:?>
            <span class="price">Rp.<?=$val['price']?>,-</span>
          <? endif ?>
          <? if($val['discount'] > 0 && $val['discount'] != null):?>
            <span class="sale-tag"><?=$val['discount']?><sup>%</sup></span>
          <? endif ?>
        </div>
      </div>
      <!-- !SHOP FEATURED ITEM -->  
    </div>
    <div class="clearfix visible-xs space-30"></div>
    <!-- VIRTUAL ROW !IMPORTANT -->
  <?if ($counter == 3 || $counter == 10){ ?>
    </li>
  <? } ?>
  <?$counter+=1;?>
  <?endif?>
  <?endforeach?>
</ul>
</div>
</div>
</section>
<!-- !FLEXSLIDER -->

  <section class="row">
    <div class="section-header col-xs-12">      
      <h2 class="strong-header">
        Featured brands
      </h2>
    </div>
    <div class="col-md-12 text-center logotypes">
      <img src="<?=base_url()?>assets/images/common_image/brand-07.png" alt=" ">
      <img src="<?=base_url()?>assets/images/common_image/brand-03.png" alt=" ">
      <img src="<?=base_url()?>assets/images/common_image/brand-02.png" alt=" ">
      <img src="<?=base_url()?>assets/images/common_image/brand-06.png" alt=" ">
      <img src="<?=base_url()?>assets/images/common_image/brand-04.png" alt=" ">      
    </div>
  </section>

<!-- SECTION EMPHASIS 2 -->
<!-- FULL WIDTH -->
</div>
<!-- !container -->

<div class="home-emphasis full-width section-emphasis-2">
  <div class="container">
    <section class="row">
      <div class="col-md-12 text-center">
        <div class="row">
          <div class="col-md-4">
            <div class="shop-adv">
              <span><i class="fa fa-smile-o"></i></span>
              <h3>Mudah</h3>
            </div>
            <div>
              <p>
                Kami memberikan pengalaman kemudahan dalam berbelanja di
                toko kami.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="shop-adv">
              <span><i class="fa fa-heart"></i></span>
              <h3>Return &amp; Refund</h3>
            </div>
            <div>
              <p>
                Kembalikan barang cacat dan pengembalian uang.
              </p>
            </div>
          </div> 
          <div class="col-md-4">
            <div class="shop-adv">
              <span><i class="fa fa-truck"></i></span>
              <h3>Transparan</h3>
            </div>
            <div>
              <p>
                Cek status pesanan anda.
              </p>
            </div>
          </div>         
        </div>
      </div>
    </section>
  </div>
</div>
<!-- !full-width -->
<div class="container">
  <!-- !FULL WIDTH -->
  <!-- !SECTION EMPHASIS 2 -->

</div>
</section>