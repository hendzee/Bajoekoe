<section id="Content" role="main">
    <div class="container">
        <!-- SECTION EMPHASIS 1 -->
        <!-- FULL WIDTH -->
    </div>   
    <div class="container">
        <!-- !FULL WIDTH -->
        <!-- !SECTION EMPHASIS 1 -->


        <section class="row">
            <div class="section-header col-xs-12">                
                <h2 class="strong-header">
                    Siapa Kami
                </h2>
            </div>
            <div class="col-md-12">
                <!-- DESCRIPTION SHOP -->
                <?foreach($data_content as $val):?>
                    <?=$val['description']?>
                <?endforeach?>
                <!-- END DESCRIPTION SHOP -->
            </div>            
        </section>


        <!-- !SECTION EMPHASIS 1 -->
        <!-- FULL WIDTH -->
    </div>
    <!-- !container -->
    <div class="full-width section-emphasis-2">
        <div class="container">
            <section class="row">
                <div class="section-header col-xs-12">
                    <hr>
                    <h2 class="strong-header">
                        Our services
                    </h2>
                    <!-- VIDEO     -->
                    <?foreach($data_content as $val):?>                    
                        <iframe width="920" height="515"
                            src="<?=$val['video_about']?>">
                        </iframe> 
                    <?endforeach?>
                </div>              
            </section>
        </div>
    </div>
    <!-- !full-width -->   
    <div class="container">
        <!-- !FULL WIDTH -->

        <section class="team row">
            <div class="section-header col-xs-12">                
                <h2 class="strong-header">
                    Hello
                </h2>
                <!-- TEAM PHOTO -->
                <?foreach($data_content as $val):?>
                    <img src="<?=base_url()?>assets/images/common_image/<?=$val['team_photo']?>" />
                <?endforeach?>
            </div>            
        </section>

    </div>
</section>