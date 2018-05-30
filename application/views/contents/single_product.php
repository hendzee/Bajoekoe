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
  <div class="form-group">
    <label class="col-xs-2" for="quantity">Qty</label>
    <div class="col-xs-3">
      <input type="number" value="1" min="0" name="quantity" class="form-control quantity-spinner" id="quantity-selector" required />      
    </div>    
  </div>
  <button type="submit" class="btn btn-primary">Ambil</button>
  <!--
                            -->
  <button type="button" class="btn btn-default">Add to wishlist</button>
  <div class="clearfix"></div>
</form>
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
           class="gp">
          <span class="sr-only">Google+</span>
        </a>
      </li>
      <li>
        <a href="https://www.pinterest.com/pin/create/button/?url=http://www.createit.pl/&amp;media=http://www.createit.pl/images/frontend/logo.png&amp;description=CreateIT" onclick="window.open(this.href, 'pinterest-share', 'width=770,height=320'); return false;" rel="nofollow" title="Pinterest" class="pt">
          <span class="sr-only">Pinterest</span>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://developer.linkedin.com&amp;title=LinkedIn%20Developer%20Network&amp;summary=My%20favorite%20developer%20program&amp;source=LinkedIn" onclick="window.open(this.href, 'linkedin-share', 'width=600,height=439'); return false;" rel="nofollow" title="LinkedIn" class="in">
          <span class="sr-only">LinkedIn</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="tabs">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#description" data-toggle="tab">Deskripsi</a></li>
    <li><a href="#info" data-toggle="tab">Info Tambahan</a></li>
    <li><a href="#reviews" data-toggle="tab">Reviews (2)</a></li>
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
      <article class="review">
        <header>
          <span class="rating" data-score="4"></span><br>
          <h4 class="author">Richard Doe</h4>
          <span class="date">Aug 7, 2013</span>
        </header>
        <p>
          Choupette Mulberry dark red lipstick crop button up chunky sole chambray shirt
          maxi skirt vintage Levi shorts. Loafers 90s collar indigo denim silver collar
          round sunglasses. Cashmere skirt peach Miu Miu Bag 'N' Noun leather shorts
          oversized printed clashing patterns. Tulle printed jacket sheer Prada Saffiano
          white Converse.
        </p>
      </article>
      <article class="review">
        <header>
          <span class="rating" data-score="3"></span><br>
          <h4 class="author">Richard Doe</h4>
          <span class="date">Aug 3, 2013</span>
        </header>
        <p>
          Leather jacket pastels backpack neutral green white. Strong eyebrows washed out
          Chanel. leggings skinny jeans Missoni capsule clutch cotton.
        </p>
      </article>
      <form class="review-form">
        <label class="raty-label">
          Your rating for this item<br>
          <span class="rate"></span>
        </label>

        <div class="form-group">
          <label for="review">Your review</label>
          <textarea class="form-control" id="review" name="review" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit review</button>
      </form>
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