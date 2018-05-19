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
                    <h1 class="strong-header pull-left">
                        Daftar
                    </h1>
                    <!-- BREADCRUMBS -->
                    <ul class="breadcrumbs list-inline pull-right">
                        <li><a href="index-2.html">Home</a></li>
                        <!--
                        -->
                        <li><a href="03-shop-products.html">Shop</a></li>
                        <!--
                        -->
                        <li>Register</li>
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
            <?=$this->session->flashdata('msg')?>
            <div class="col-md-6 space-right-20">
                <section class="element-emphasis-weak">
                    <h2 class="strong-header">
                        Sudah terdaftar ?
                    </h2>
                    <a href="<?=base_url()?>index.php/Common/page_select/login" class="btn btn-default">
                    Login
                </a>
                </section>
            </div>
            <div class="col-md-6 space-left-20">
                <section class="register element-emphasis-strong">
                    <h2 class="strong-header large-header">
                        Buat Akun
                    </h2>
                    <?=form_open('Common/member_register', 'role="form" id="form-register"')?>
                        <div class="form-group">
                            <label for="first-name">Nama awal</label>
                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Nama akhir</label>
                            <input type="text" class="form-control" id="last-name" name="last-name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password-repeat">Konfirmasi password</label>
                            <input type="password" class="form-control" id="password-repeat" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit-register">Daftar</button>
                    </form>
                </section>
            </div>
        </div>

    </div>
</section>