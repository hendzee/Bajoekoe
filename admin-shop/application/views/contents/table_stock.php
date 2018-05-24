<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Daftar Stock
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Daftar Pesanan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?=$this->session->flashdata('msg')?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Semua Pesanan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">                       
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Items</th>
                                    <th>Nama</th>
                                    <th>Tgl Publish</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach($data_content as $val):?>
                                    <tr>                                        
                                        <td>
                                            <a href="<?=base_url()?>index.php/Admin/page_add_stock/<?=$val['id_item']?>">
                                                <?=$val['id_item']?>
                                            </a>
                                        </td>
                                        <td><?=$val['name']?></td>
                                        <td><?=$val['publish_date']?></td>                                        
                                    </tr>
                                <?endforeach?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>