<section id="Content" role="main">
    <div class="container">

        <!-- SECTION EMPHASIS 1 -->
        <!-- FULL WIDTH -->
    </div>    
    <div class="container">
        <!-- !FULL WIDTH -->
        <!-- !SECTION EMPHASIS 1 -->

        <section class="row">
            <div class="col-sm-3">
                <nav class="shop-section-navigation element-emphasis-weak">
                    <ul class="list-unstyled">
                        <li><a href="09-a-shop-account-dashboard.html">Account dashboard</a></li>
                        <li><a href="09-b-shop-account-information.html">Account information</a></li>
                        <li><a href="09-c-shop-account-my-orders.html">My orders</a></li>
                        <li><a href="09-d-shop-account-address-book.html">Address book</a></li>
                        <li><span>My wishlist</span></li>
                        <li><a href="index-2.html">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix visible-xs space-30"></div>
            <div class="col-sm-9 space-left-30">
                <h2 class="strong-header large-header">My wishlist</h2>
                <div class="row">                    
                    <?$counter_list = 0?>
                    <?foreach ($data_content as $val):?>
                    <?if($counter_list % 3 == 0):?>
                        <div class="clearfix visible-xs visible-md visible-lg space-15"></div>               
                    <?endif?>
                    <div class="col-md-4">
                        <!-- SHOP FEATURED ITEM -->
                        <article class="shop-item shop-item-wishlist">
                            <div class="wishlist-item">                                
                                <?  
                                    $id_itm = $val['id_item'];
                                    $clr = $val['color'];
                                    $data_img = array();
                                    $query = "SELECT * FROM image_item WHERE id_item = '$id_itm' AND
                                        color = '$clr'";
                                    $data_img = $this->Database->all_query($query);
                                ?>
                                <a href="<?=base_url()?>index.php/Common/page_single_product/<?=$val['id_item']?>/<?=$val['color']?>">
                                    <?foreach($data_img as $img):?>
                                    <img 
                                        src="<?=base_url()?>assets/images/item_image/<?=$img['image_one']?>" 
                                        alt="Shop item" 
                                        />
                                    <?endforeach?>
                                </a>                                
                                <span class="brand-tag"><?=$val['brand']?></span>
                            </div>
                            <header class="item-info-name-features-price">                                
                                <!-- RATING -->
                                <?
                                    $data_rating = array();
                                    $r_id_item = $val['id_item'];
                                    $r_color = $val['color'];
                                    $rating_val = 1;
                                    $query_rating = "SELECT AVG(rating) AS avg_rating FROM ratings_table
                                    WHERE id_item = '$r_id_item' AND color = '$r_color'";
                                    
                                    $data_rating = $this->Database->all_query($query_rating);

                                    if (COUNT($data_rating) > 0) {
                                    foreach($data_rating as $rat_item) {
                                        $rating_val = $rat_item['avg_rating'];
                                    }
                                    }
                                ?>          
                                <select class="rating-star" name="rating" data-current-rating="<?=$rating_val?>" autocomplete="off">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <!-- END RATING -->
                                <a href="<?=base_url()?>index.php/Common/page_single_product/<?=$val['id_item']?>/<?=$val['color']?>">
                                    <h4><?=$val['name']?></h4>
                                </a>
                                <span class="price">Rp.<?=$val['price']?></span><br>
                                <a 
                                    href="<?=base_url()?>index.php/Common/delete_wishlist/<?=$val['id_item']?>/<?=$val['color']?>"
                                >
                                    <i class="fa fa-trash-o"></i> Hapus
                                </a>
                            </header>
                        </article>
                        <!-- !SHOP FEATURED ITEM -->
                    </div>   
                    <?$counter_list+=1?>                      
                    <?endforeach?>                    
                </div>
            </div>
        </section>
    </div>
</section>