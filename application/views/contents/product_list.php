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
        <h1 class="strong-header pull-left">Shop</h1>

        <!-- BREADCRUMBS -->
        <ul class="breadcrumbs list-inline pull-right">
          <li><a href="index-2.html">Home</a></li>
          <!--
                         -->
          <li>Shop</li>
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
<form>
<div class="shop-list-filters col-sm-4 col-md-3">

  <div class="filters-active element-emphasis-strong" style="display:none;">
    <h3 class="strong-header element-header" style="display:none;">
      Pilihan Anda
    </h3>
    <!-- dynamic added selected filters -->
    <ul class="filters-list list-unstyled">
      <li></li>
    </ul>
    <button type="button" class="filters-clear btn btn-primary btn-small btn-block">
      Reset
    </button>
  </div>

  <button type="button" class="btn btn-default btn-small visible-xs" data-texthidden="Hide Filters" data-textvisible="Show Filters" id="toggleListFilters"></button>

  <div id="listFilters">

    <div class="filters-details element-emphasis-weak">
      <!-- ACCORDION -->
      <div class="accordion">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="strong-header panel-title">
                <a class="accordion-toggle" data-toggle="collapse" href="#collapse-001">
                  Harga
                </a>
              </h4>
            </div>
            <div id="collapse-001" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="filters-range" data-min="0" data-max="1000000" data-step="5">
                  <div class="filter-widget"></div>
                  <div class="filter-value">
                    <input type="text" class="min">
                    <input type="text" class="max">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="strong-header panel-title">
                <a class="accordion-toggle" data-toggle="collapse" href="#collapse-002">
                  Kategori
                </a>
              </h4>
            </div>
            <div id="collapse-002" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="filters-checkboxes myFilters" data-option-group="category" data-option-type="filter">
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-categories-all">
                    <label for="filters-categories-all" data-option-value="" class="selected isotopeFilter">All</label>
                  </div>
                  <? foreach($data_content['data_category'] as $val): ?>
                    <div class="form-group">
                      <input type="checkbox" class="sr-only" id="filters-categories-accessories">
                      <label for="filters-categories-<?=$val['category']?>" data-option-value=".<?=$val['category']?>" class="isotopeFilter"><?=$val['category']?></label>
                    </div>
                  <? endforeach ?>                  
                </div>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="strong-header panel-title">
                <a class="accordion-toggle" data-toggle="collapse" href="#collapse-003">
                  Ukuran
                </a>
              </h4>
            </div>
            <div id="collapse-003" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="filters-size myFilters" data-option-group="size" data-option-type="filter">
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-size-all">
                    <label for="filters-size-all" data-option-value="" class="selected isotopeFilter"><abbr title="All">All</abbr></label>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-size-s">
                    <label for="filters-size-s" data-option-value=".size1" class="isotopeFilter"><abbr title="Small">S</abbr></label>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-size-m">
                    <label for="filters-size-m" data-option-value=".size2" class="isotopeFilter"><abbr title="Medium">M</abbr></label>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-size-l">
                    <label for="filters-size-l" data-option-value=".size3" class="isotopeFilter"><abbr title="Large">L</abbr></label>
                  </div>
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-size-xl">
                    <label for="filters-size-xl" data-option-value=".size4" class="isotopeFilter"><abbr title="Extra Large">XL</abbr></label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="strong-header panel-title">
                <a class="accordion-toggle" data-toggle="collapse" href="#collapse-004">
                  Warna
                </a>
              </h4>
            </div>
            <div id="collapse-004" class="panel-collapse collapse in">
              <div class="panel-body">
                <div class="filters-color myFilters" data-option-group="color" data-option-type="filter">
                  <div class="form-group">
                    <input type="checkbox" class="sr-only" id="filters-color-all">
                    <label for="filters-color-all" data-option-value="" class="selected isotopeFilter"><span class="filters-color-swatch" style="background: transparent">All</span></label>
                  </div>
                  <?foreach($data_content['data_colors'] as $val):?>
                  <div class="form-group" data-toggle="tooltip" data-placement="bottom" title="<?=$val['color']?>">
                    <input type="checkbox" class="sr-only" id="<?=$val['color']?>">
                    <label for="filters-color-<?=$val['color']?>" data-option-value=".<?=$val['color']?>" class="isotopeFilter"><span class="filters-color-swatch" style="background: <?=$val['color_code']?>"></span></label>
                  </div>
                  <?endforeach?>                                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- !ACCORDION -->
    </div>
  </div>
  <!-- / #listFilters -->
</div>

<div class="clearfix visible-xs"></div>
<div class="col-sm-8 col-md-9">
<div class="row">
<div class="shop-list-filters col-sm-6 col-md-8">
  <span class="filters-result-count"><span>24</span> results</span>
</div>
<div class="shop-list-filters col-sm-6 col-md-4">
  <div class="filters-sort">
    <div class="btn-group myFilters" data-option-group="sortby" data-option-type="sortBy">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        -<span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#" class="selected isotopeFilter" data-option-value="original-order" data-option-asc="true">-</a></li>
        <li><a href="#" class="isotopeFilter" data-option-value="date" data-option-asc="false">Terbaru</a></li>
        <li><a href="#" class="isotopeFilter" data-option-value="popular" data-option-asc="false">Terlaris</a></li>
        <li><a href="#" class="isotopeFilter" data-option-value="rating" data-option-asc="false">Rating</a></li>
        <li><a href="#" class="isotopeFilter" data-option-value="random" data-option-asc="false">Random</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="col-xs-12">


<!-- ISOTOPE GALLERY -->
<div id="isotopeContainer" class="shop-product-list isotope">

<? foreach($data_content['data_items'] as $val): ?>
  <?
    $id = $val['id_item'];
    $color = $val['color'];    
    $size_arr = '';
    $data_isotope = '';    

    $query = "SELECT * FROM stock_table WHERE id_item='$id' AND color='$color' GROUP BY size";
    $get_color = $this->Database->all_query($query);
  
    foreach($get_color as $sizedata){
      $size_temp = '';

      if($sizedata['size'] == 'S'){
        $size_temp = 'size1';
      }elseif($sizedata['size'] == 'M'){
        $size_temp = 'size2';
      }elseif($sizedata['size'] == 'L'){
        $size_temp = 'size3';
      }elseif($sizedata['size'] == 'XL'){
        $size_temp = 'size4';
      }
      $size_arr .= $size_temp.' ';
      
    }

    $data_isotope = $val['color'].' '.$size_arr.$val['category'];
  ?>
  <div class="isotope-item color3 <?=$data_isotope?>" data-date="<?=date('F j, Y', strtotime($val['publish_date']))?>" data-popular="40" data-rating="4.0">
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
    <?if($count_stock < 1):?>
      <!-- SHOP FEATURED ITEM -->
      <div class="shop-item shop-item-featured overlay-element">            
        <div class="overlay-wrapper">        
          <span class="brand-tag"><?=$val['brand']?></span>        
          <img src="<?=base_url()?>assets/images/item_image/<?=$val['image_one']?>" alt=" " />
          <div class="overlay-contents">
            <div class="shop-item-empty">            
              <span><i class="fa fa-eye-slash"></i></span>
            </div>
          </div>
        </div>
        <div class="item-info-name-price">
          <h4><a href="#"><?=$val['name']?></a></h4>
          <? if ($val['discount'] > 0 && $val['discount'] != null){ ?>
            <?
              $dis_price = $val['price'] - ($val['price'] * $val['discount'] / 100);
            ?>
            <span class="price-old">Rp.<?=$val['price']?></span>&nbsp;&nbsp;<span class="price">Rp.<?=$dis_price?></span>
          <? } else{ ?>
            <span class="price">Rp.<?=$val['price']?></span>
          <? } ?>        
        </div>      
        <span class="empty-tag">Stock Habis</span>
      </div>
      <!-- !SHOP FEATURED ITEM -->
    <?else:?>
      <!-- SHOP FEATURED ITEM -->
      <div class="shop-item shop-item-featured overlay-element">      
        <div class="overlay-wrapper">        
        <span class="brand-tag"><?=$val['brand']?></span>        
        <a href="<?=base_url()?>index.php/Common/page_single_product/<?=$val['id_item']?>/<?=$val['color']?>"><img src="<?=base_url()?>assets/images/item_image/<?=$val['image_one']?>" alt=" "></a>
        <div class="overlay-contents">
            <div class="shop-item-actions">            
            <a href="<?=base_url()?>index.php/Common/page_single_product/<?=$val['id_item']?>/<?=$val['color']?>" class="btn btn-primary btn-block">
                Lihat
            </a>
            </div>
        </div>
        </div>
        <div class="item-info-name-price">
        <h4><a href="#"><?=$val['name']?></a></h4>
        <?if ($val['discount'] > 0 && $val['discount'] != null):?>
            <?
            $dis_price = $val['price'] - ($val['price'] * $val['discount'] / 100);
            ?>
            <span class="price-old">Rp.<?=$val['price']?></span>&nbsp;&nbsp;<span class="price">Rp.<?=$dis_price?></span>
        <?else:?>
            <span class="price">Rp.<?=$val['price']?></span>
        <?endif?>        
        </div>
        <? if($val['discount'] > 0 && $val['discount'] != null):?>
          <span class="sale-tag"><?=$val['discount']?><sup>%</sup></span>            
        <?endif?>      
      </div>
      <!-- !SHOP FEATURED ITEM -->
    <?endif?>
</div>
<? endforeach ?>

</div>
<!-- !ISOTOPE GALLERY -->

</div>


</div>
</div>


</form>
</div>
<!-- / row -->

</div>
</section>