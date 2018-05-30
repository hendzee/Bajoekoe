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

        <section class="row">
            <?=$this->session->flashdata('msg')?>
                <div class="col-sm-3">
                    <nav class="shop-section-navigation element-emphasis-weak">
                        <ul class="list-unstyled">
                            <li><a href="<?=base_url()?>index.php/Common/page_select/account_dashboard">Dashboard</a></li>
                            <li class="active"><span>Profil</span></li>
                            <li><a href="<?=base_url()?>index.php/Common/page_select/account_order">Pesananku</a></li>
                            <li><a href="<?=base_url()?>index.php/Common/page_select/account_shiping">Alamat Pengiriman</a></li>
                            <li><a href="<?=base_url()?>index.php/Common/logout">Logout</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="clearfix visible-xs space-30"></div>
                <div class="col-md-6 col-sm-9 space-left-30">
                    <h2 class="strong-header large-header">Perbaruhi Informasi AKun</h2>
                    <?=form_open('Common/update_account_profile', 'role="form"')?>
                        <?foreach($data_content as $val):?>
                            <div class="form-group">
                                <label for="first-name">Nama Depan</label>
                                <input type="text" class="form-control" id="first-name" name="first-name" value="<?=$val['first_name']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Nama Belakang</label>
                                <input type="text" class="form-control" id="last-name" name="last-name" value="<?=$val['last_name']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?=$val['email']?>" required>
                            </div>
                        <?endforeach?>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
        </section>
    </div>
</section>