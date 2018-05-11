<!--open wrapper-->
<div class="wrapper">

<header id="MainNav">
<div class="container">
<div class="row">
<section class="col-md-12" id="TopBar"> 
  <div class="top-info pull-left">
    <a href="<?=base_url()?>index.php/Common/page_select/payment"><i class="fa fa-credit-card"></i> Pembayaran</a>    
  </div>  
  <!-- SHOPPING CART -->  
  <div class="shopping-cart-widget pull-right">    
    <button type="button" class="btn btn-link pull-right">
      <span aria-hidden="true" data-icon="&#xe006;"></span> <?=$this->cart->total_items()?> barang (Rp.<?=$this->cart->total()?>) <b class="caret"></b>
    </button>
    <div role="complementary">
      <!-- SHOP SUMMARY ITEM -->
      <?if($this->cart->total_items() > 0):?>
        <?foreach($this->cart->contents() as $items):?>
          <article class="shop-summary-item">
            <img src="<?=base_url()?>assets/images/item_image/<?=$items['image']?>" alt="Shop item in cart">

            <div class="item-info-name-features-price">
              <h4><a href="#"><?=$items['name']?></a></h4>
              <?if ($this->cart->has_options($items['rowid'])):?>
                  <span class="features">
                    <?foreach($this->cart->product_options($items['rowid']) as $key => $val):?>
                        <?=$val?>
                    <?endforeach?>
                  </span><br>
              <?endif?>
              <span class="quantity"><?=$items['qty']?></span><b>&times;</b><span class="price"><?=$items['price']?></span>
            </div>
            <a href="<?=base_url()?>index.php/Common/remove_item_cart/<?=$items['rowid']?>/shop" class="button close" aria-hidden="true">
              <span aria-hidden="true" data-icon="&#xe005;"></span>
            </a>
          </article>      
        <?endforeach?>
      <?endif?>      
      <!-- !SHOP SUMMARY ITEM -->      
      <hr>
      <span class="total-price-tag pull-left">Subtotal</span><span class="total-price pull-right">
        Rp.<?=$this->cart->total()?>
      </span>

      <div class="clearfix"></div>
      <a href="<?=base_url()?>index.php/Common/page_select/shoping_cart" class="btn btn-primary btn-block">
        Keranjang Saya
      </a>
      <a href="<?=base_url()?>index.php/Common/page_select/checkout_shiping" class="btn btn-default btn-block">
        Buat Pesanan
      </a>
    </div>
  </div>
  <!-- !SHOPPING CART -->
</section>
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle btn btn-primary">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/logo.png" alt=" "></a>
    </div>

    <div class="navbar-collapse navbar-main-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <b class="caret"></b></a>
          <ul class="dropdown-menu">            
            <li>
              <a href="<?=base_url()?>index.php/Common/product_list_param/gender/M">
                Pria
              </a>
            </li>
            <li>
              <a href="<?=base_url()?>index.php/Common/product_list_param/gender/F">
                Wanita
              </a>
            </li>
            <li><a href="<?=base_url()?>index.php/Common/page_select/product_list">Semua</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brand <b class="caret"></b></a>
          <ul class="dropdown-menu">            
            <?foreach($nav_brand as $val):?>
              <li>
                <a href="<?=base_url()?>index.php/Common/product_list_param/brand/<?=$val['brand']?>">
                  <?=$val['brand']?>
                </a>
              </li>            
            <?endforeach?>
          </ul>
        </li>        
        <li class="dropdown">
          <a href="11-a-portfolio-4-columns.html" class="dropdown-toggle" data-toggle="dropdown">Jenis <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <?foreach($nav_category as $val):?>
              <li>
                <a href="<?=base_url()?>index.php/Common/product_list_param/category/<?=$val['category']?>">
                  <?=$val['category']?>
                </a>
              </li>            
            <?endforeach?>
          </ul>
        </li>      
        <li>
          <a href="<?=base_url()?>index.php/Common/product_list_param/sale/100">
            Sale
          </a>
        </li>          
      </ul>      
      <?=form_open('Common/search_product_list', ('class="navbar-form navbar-left navbar-search" role="search"'))?>
        <div class="form-group">
          <label class="sr-only" for="navbar-search">Your search</label>
          <input name="value" type="search" id="navbar-search" class="form-control">
        </div>
        <button type="submit" class="btn btn-default navbar-search">
          <span class="fa fa-search">
              <span class="sr-only">Search</span>
          </span>
        </button>
      </form>
      <div class="navbar-right" id="navbar-login">
        <?if($this->session->userdata('logged_in') == TRUE):?>
          <a href="<?=base_url()?>index.php/Common/page_select/account_dashboard">
            Halo, <?=$this->session->userdata('member_name')?>
          </a>
          |
          <a href="<?=base_url()?>index.php/Common/logout">Logout</a>
        <?else:?>
          <a href="<?=base_url()?>index.php/Common/page_select/login">Masuk</a> 
          | 
          <a href="<?=base_url()?>index.php/Common/page_select/register">Daftar</a>
        <?endif?>
      </div>      
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>
</div>
</header>