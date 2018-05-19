<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Daftar Pesanan
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
                                    <th>ID Order</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Status</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach($data_content as $val):?>
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <?=$val['id_order']?>
                                            </a>
                                        </td>
                                        <td><?=$val['email_buyer']?></td>
                                        <td><?=$val['phone_buyer']?></td>
                                        <td><?=$val['first_name'].' '.$val['last_name']?></td>
                                        <td><?=$val['order_date']?></td>
                                        <td><?=$val['order_status']?></td>                                        
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