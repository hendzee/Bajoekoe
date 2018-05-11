<section id="Content" role="main">
      <div class="container">

          <!-- SECTION EMPHASIS 1 -->
          <!-- FULL WIDTH -->
      </div><!-- !container -->
      <div class="full-width section-emphasis-1 page-header">
          <div class="container">
              <header class="row">
                  <div class="col-md-12">
                      <h1 class="strong-header pull-left">
                          Login
                      </h1>
                      <!-- BREADCRUMBS -->
                      <ul class="breadcrumbs list-inline pull-right">
                          <li><a href="index-2.html">Home</a></li><!--
                          --><li><a href="03-shop-products.html">Shop</a></li><!--
                          --><li>My account</li>
                      </ul>
                      <!-- !BREADCRUMBS -->
                  </div>
              </header>
          </div>
      </div><!-- !full-width -->
      <div class="container">
          <!-- !FULL WIDTH -->
          <!-- !SECTION EMPHASIS 1 -->

          <div class="row">
              <div class="col-md-6 space-right-20">
                  <section class="login element-emphasis-strong">
                        <h2 class="strong-header large-header">
                            Member
                        </h2>                       
                        <?=form_open('Common/check_auth', 'role="form"')?>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary pull-left">Login</button>
                            <a href="#" class="btn btn-link pull-right">Forgot your password?</a>
                            <div class="clearfix"></div>
                        </form>
                  </section>
              </div>
              <div class="col-md-6 space-left-20">
                  <section class="element-emphasis-weak">
                      <h2 class="strong-header">
                          Belum Daftar ?
                      </h2>
                      <p>
                          By creating an account with our store, you will be able to move through the checkout process
                          faster, store multiple shipping addresses, view and track your orders in your account and more
                      </p>
                      <a href="<?=base_url()?>index.php/Common/page_select/register" class="btn btn-default">
                          Daftar
                      </a>
                  </section>
              </div>
          </div>

      </div>
  </section>