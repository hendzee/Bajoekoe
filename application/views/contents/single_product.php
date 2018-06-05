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
<article class="row shop-product-single">  
<?=$this->session->flashdata('msg')?>

<div class="col-md-6 space-right-20">

  <!-- thumbnailSlider -->
  <? foreach($data_content as $val): ?>
  <div class="thumbnailSlider">
    <div class="flexslider flexslider-thumbnails">
      <ul class="slides">
        <li>
          <a href="<?=base_url()?>assets/images/item_image/<?=$val['image_one']?>" data-rel="prettyPhotoGallery[product]" class="img-preview-1">
            <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_one']?>" alt=" " class="img-preview-1">
          </a>
        </li>
        <li>
          <a href="<?=base_url()?>assets/images/item_image/<?=$val['image_two']?>" data-rel="prettyPhotoGallery[product]" class="img-preview-2">
            <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_two']?>" alt=" " class="img-preview-2">
          </a>
        </li>
        <li>
          <a href="<?=base_url()?>assets/images/item_image/<?=$val['image_three']?>" data-rel="prettyPhotoGallery[product]" class="img-preview-3">
            <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_three']?>" alt=" " class="img-preview-3">
          </a>
        </li>
        <li>
          <a href="<?=base_url()?>assets/images/item_image/<?=$val['image_four']?>" data-rel="prettyPhotoGallery[product]" class="img-preview-4">
            <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_four']?>" alt=" " class="img-preview-4">
          </a>
        </li>
      </ul>
    </div>

    <ul class="smallThumbnails clearfix">
      <li data-target="0" class="active">
        <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_one']?>" alt=" " class="img-preview-1">
      </li>
      <li data-target="1">
        <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_two']?>" alt=" " class="img-preview-2">
      </li>
      <li data-target="2">
        <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_three']?>" alt=" " class="img-preview-3">
      </li>
      <li data-target="3">
        <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_four']?>" alt=" " class="img-preview-4">
      </li>
    </ul>
  </div>
<? endforeach ?>
  <!-- / thumbnailSlider -->

</div>
<div class="clearfix visible-sm visible-xs space-30"></div>
<div class="col-md-6 space-left-20">
<?foreach($data_content as $val):?>
<header>
    <h1>
        <?=$val['name'];?>
    </h1>
    <span class="product-code">Brand: <?=$val['brand']?></span><br><br>
    <?if($val['discount'] > 0 && $val['discount'] != null){?>
        <?$dis_price = $val['price'] - ($val['price'] * $val['discount'] / 100)?>
        <span class="price-old">Rp.<?=$val['price']?></span>&nbsp;&nbsp;<span class="price">Rp.<?=$dis_price?></span>
    <?}else{?>
        <span class="price">Rp.<?=$val['price']?></span>
    <?}?>    
</header>
<?endforeach?>
<?=form_open('Common/insert_cart', 'role="form" class="shop-form form-horizontal" novalidate')?>  
  <?foreach($data_content as $val):?>    
      <input name="id-item" type="hidden" value="<?=$val['id_item']?>" />        
      <input name="item-name" type="hidden" value="<?=$val['name']?>" />             
      <?if($val['discount'] > 0){?>
        <?$dis_price = $val['price'] - ($val['price'] * $val['discount'] / 100)?>
          <input name="price" type="hidden" value="<?=$dis_price?>" />
      <?}else{?>
          <input name="price" type="hidden" value="<?=$val['price']?>" />
      <?}?>    
    <div class="form-group">
      <input name="image" type="hidden" value="<?=$val['image_one']?>" />
    </div>
  <?endforeach?>
  <div class="form-group">
    <label class="col-xs-2" for="color">Warna</label>

    <div class="col-xs-5">
      <select name="color-chosen" class="chosen chosen-select-searchless" id="color-selector" data-placeholder=" ">
        <option value="<?=$first_color?>"><?=$first_color?></option>
        <?foreach($data_color as $val):?>
          <option value="<?=$val['color']?>"><?=$val['color'];?></option>
        <?endforeach?>        
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-xs-2" for="size">Ukuran</label>

    <div class="col-xs-5">
      <select name="size-chosen" class="chosen chosen-select-searchless" id="size-selector" data-placeholder=" ">
        <?foreach($data_size as $val):?>
          <option value="<?=$val['size']?>"><?=$val['size'];?></option>
        <?endforeach?>        
      </select>
    </div>
    <div class="col-xs-3">
      <a href="#SizeGuide" class="size-guide-toggle">Size guide</a>
    </div>
    <div class="clearfix visible-xs visible-sm"></div>
  </div>
  <!-- GUIDE LIST -->
  <div class="size-guide-wrapper form-group visible-xs visible-sm">
    <div class="col-xs-12">
      <div id="SizeGuide">
        <div class="table">
          <table>
            <thead>
            <tr>
              <td></td>
              <td>XXS</td>
              <td>XS</td>
              <td>S</td>
              <td>M</td>
              <td>L</td>
              <td>XL</td>
              <td>XXL</td>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th>Bust</th>
              <td>78</td>
              <td>82</td>
              <td>86</td>
              <td>90</td>
              <td>96</td>
              <td>103</td>
              <td>110</td>
            </tr>
            <tr>
              <th>Waist</th>
              <td>60</td>
              <td>64</td>
              <td>68</td>
              <td>72</td>
              <td>78</td>
              <td>85</td>
              <td>92</td>
            </tr>
            <tr>
              <th>Hips</th>
              <td>86</td>
              <td>90</td>
              <td>94</td>
              <td>98</td>
              <td>104</td>
              <td>111</td>
              <td>118</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- END GUIDE LIST -->
  <div class="form-group">
    <label class="col-xs-2" for="quantity">Qty</label>
    <div class="col-xs-3">
      <input type="number" value="1" min="0" name="quantity" class="form-control quantity-spinner" id="quantity-selector" required />      
    </div>    
  </div>
  <button type="submit" class="btn btn-primary">Ambil</button>
  <!-- WISHLIST -->
  <?if($this->session->userdata('logged_in') == true):?>
  <button type="button" id="add-wishlist" class="btn btn-default">
    <?foreach($data_content as $val): ?>
      <input type="hidden" id="id-item" value="<?=$val['id_item']?>" />
      <input type="hidden" id="color-item" value="<?=$val['color']?>" />
    <?endforeach?>
    <i class="fa fa-heart"></i> Tambahkan ke wishlist
  </button>
  <?endif?>
  <!-- WISHLIST END -->
</form>
  <div class="clearfix"></div>
<div class="shop-product-single-social">
  <span class="social-label pull-left">Share this product</span>

  <div class="social-widget social-widget-mini social-widget-dark">
    <ul class="list-inline">
      <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.createit.pl"
           onclick="window.open(this.href, 'facebook-share','width=580,height=296'); return false;"
           rel="nofollow"
           title="Facebook"
           class="fb">
          <span class="sr-only">Facebook</span>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/share?text=CreateIT&amp;url=http://www.createit.pl" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235'); return false;" rel="nofollow" title=" Share on Twitter" class="tw">
          <span class="sr-only">Twitter</span>
        </a>
      </li>
      <li>
        <a href="https://plus.google.com/share?url=http://www.createit.pl"
           onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530'); return false;"
           rel="nofollow"
           title="Google+"
           class="in">
          <span class="sr-only">Instagram</span>
        </a>
      </li>      
    </ul>
  </div>
</div>
<div class="tabs">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#description" data-toggle="tab">Deskripsi</a></li>
    <li><a href="#info" data-toggle="tab">Info Tambahan</a></li>
    <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
  </ul>

  <div class="tab-content">
    <?foreach($data_content as $val):?>
    <div class="tab-pane fade in active" id="description">
      <?=$val['description']?>
    </div>
    <div class="tab-pane fade" id="info">
      <div class="table table-condensed">
        <table>
          <tbody>          
            <tr>
              <th class="weak width25">Berat</th>
              <td><?=$val['weight']?></td>
            </tr>
            <tr>
              <th class="weak">Dimensi</th>
              <td><?=$val['dimension']?></td>
            </tr>
            <tr>
              <th class="weak">Catatan</th>
              <td><?=$val['note']?></td>
            </tr>                      
          </tbody>
        </table>
      </div>
    </div>
    <?endforeach?>
    <section class="tab-pane fade" id="reviews">
      <?if (COUNT($data_comment) < 1):?>
        <p>Belum ada ulasan</p>
      <?else:?>
        <?foreach($data_comment as $val):?>
        <article class="review">
          <header>
            <span class="rating" data-score="4"></span><br>
            <h4 class="author"><?=$val['first_name'] . ' ' . $val['last_name']?></h4>
            <span class="date"><?=date('F j, Y', strtotime($val['review_date']))?></span>
          </header>
          <p>
            <?=$val['review']?>
          </p>
        </article>
        <?endforeach?>
      <?endif?>               
      <?//CHECK SESSION?>
      <?if($this->session->userdata('logged_in') == TRUE):?>
        <?
          $id = '';
          $clr = '';
          $valid = false;

          foreach($data_content as $val) {
            $id_cst = $this->session->userdata('member_id');
            $id_itm = $val['id_item'];
            $clr = $val['color'];            
          }

          $check_history = array();
          $query = "SELECT * FROM order_list INNER JOIN order_item using(id_order) WHERE 
            id_customer = '$id_cst' AND id_item = '$id_itm' AND color = '$clr' AND 
            order_status = 'SHIPPED'";
          $check_history = $this->Database->all_query($query);

          if (COUNT($check_history) > 0) {
            $valid = true;
          }          
        ?>        
        <?if ($valid == true): ?>
          <?=form_open('Common/add_rating', 'class="review-form"')?>
            <?foreach($data_content as $val):?>
              <input type="hidden" name="id-item" value="<?=$val['id_item']?>" />
              <input type="hidden" name="color" value="<?=$val['color']?>" />          
            <?endforeach?>
            <label class="raty-label">
              Berikan rating untuk produk ini<br>
              <span class="rate"></span>
              <select id="rating-star-review" current-rating="1" name="rating">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </label>

            <div class="form-group">
              <label for="review">Ulasan anda</label>
              <textarea class="form-control" id="review" name="review" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit review</button>
          </form>
        <?else:?>
          <br>
          <strong>Beli dan berikan ulasan anda</strong>
        <?endif?>
      <?else:?>
        <br>
        <strong>Beli dan berikan ulasan anda</strong>
      <?endif?>
      <?//END CHECK SESSION?>
    </section>
  </div>
</div>
</div>
</article>
</div>
</section>
<?foreach($data_content as $val):?>
<input type="hidden" value="<?=$val['id_item']?>" id="id-selector" style="display:none" />
<?endforeach?>