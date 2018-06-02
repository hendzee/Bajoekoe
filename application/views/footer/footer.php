<div class="clearfix visible-xs visible-sm"></div>
<!-- fixes floating problems when mobile menu is visible -->

<footer>
  <div class="container">
    <section class="row">
      <div class="col-md-3 col-sm-6">
        <h3 class="strong-header">
          Perusahaan
        </h3>

        <div class="link-widget">
          <ul class="list-unstyled">
            <li>
              <a href="<?=base_url()?>index.php/Common/page_select/about">
                Tentang Kami
              </a>
            </li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="16-pages-contact.html">Kontak</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3 class="strong-header">
          Bantuan
        </h3>

        <div class="link-widget">
          <ul class="list-unstyled">
            <li><a href="10-a-shop-customer-service-track-order.html">Pembayaran</a></li>
            <li><a href="10-b-shop-customer-service-faq.html">FAQs</a></li>
            <li><a href="#">Shipping info</a></li>
            <li><a href="#">Payment</a></li>
            <li><a href="#">Returns</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3 class="strong-header">
          Navigasi
        </h3>

        <div class="link-widget">
          <ul class="list-unstyled">
            <li><a href="#">Size guide</a></li>
            <li><a href="09-a-shop-account-dashboard.html">Akunku</a></li>
            <li><a href="09-e-shop-account-my-wishlist.html">Wishlist</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <h3 class="strong-header">
          Follow us
        </h3>

        <div class="social-widget">
          <ul class="list-inline">
            <?foreach($social_media as $val):?>
              <li><a href="<?=$val['facebook']?>" target="_blank" class="fb"><span class="sr-only">Facebook</span></a></li>
              <li><a href="<?=$val['twitter']?>" target="_blank" class="tw"><span class="sr-only">Twitter</span></a></li>
              <li><a href="<?=$val['instagram']?>" target="_blank" class="in"><span class="sr-only">Instagram</span></a></li>
              <li><a href="<?=$val['youtube']?>" target="_blank" class="yt"><span class="sr-only">Youtube</span></a></li>            
            <?endforeach?>
          </ul>
        </div>
      </div>
    </section>
    <hr>
    <section class="row">
      <div class="col-md-12">
        <span class="copyright pull-left">&copy; 2018 Hendzee</span>       
      </div>
    </section>
  </div>
</footer>

</div>