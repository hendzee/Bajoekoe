<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
            <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
                </span>
        </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PENJUALAN</li>
        <li class="active">
            <a href="<?=base_url()?>index.php/Admin/page_select/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
            </a>            
        </li>        
        <li class="">
            <a href="<?=base_url()?>index.php/Admin/page_select/category">
            <i class="fa fa-tag"></i>
            <span>Kategori</span>            
            </a>            
        </li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Produk</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="<?=base_url()?>index.php/Admin/page_select/product"><i class="fa fa-circle-o"></i> Katalog</a></li>
            <li><a href="<?=base_url()?>index.php/Admin/page_select/table_stock"><i class="fa fa-circle-o"></i> Stock</a></li>            
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-edit"></i> <span>Pesanan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="<?=base_url()?>index.php/Admin/page_select/table_order"><i class="fa fa-circle-o"></i> Semua</a></li>
            <li><a href="<?=base_url()?>index.php/Admin/page_select/table_neworder"><i class="fa fa-circle-o"></i> Baru</a></li>
            <li><a href="<?=base_url()?>index.php/Admin/page_select/table_payorder"><i class="fa fa-circle-o"></i> Lunas</a></li>
            <li><a href="<?=base_url()?>index.php/Admin/page_select/table_successorder"><i class="fa fa-circle-o"></i> Terkirim</a></li>
            <li><a href="<?=base_url()?>index.php/Admin/page_select/table_cancelorder"><i class="fa fa-circle-o"></i> Dibatalkan</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-table"></i> <span>Refund</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
            </ul>
        </li>        
        <li>
            <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
            </span>
            </a>
        </li>               
        <li class="header">TOKO</li>
        <li class="">
            <a href="<?=base_url()?>index.php/Admin/page_select/shop_promo">
            <i class="fa fa-bullhorn"></i> <span>Promo</span>            
            </a>            
        </li>                
        <li class="">
            <a href="<?=base_url()?>index.php/Admin/page_select/shop_slider">
            <i class="fa fa-clone"></i> <span>Slider</span>            
            </a>            
        </li>                
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>