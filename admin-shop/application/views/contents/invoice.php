<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Invoice
            <?foreach($data_content['order_list'] as $val):?>
                <small><?=$val['id_order']?></small>
                <?endforeach?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Invoice</li>
        </ol>
    </section>

    <div class="pad margin no-print">
        <?=$this->session->flashdata('msg')?>
    </div>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Shop-Admin.                    
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">                
                <address>
                    <?foreach($data_content['order_list'] as $val):?>                    
                    <strong>Alamat: </strong><?=$val['ship_info']?><br/>
                    <strong>Telepon: </strong><?=$val['phone_buyer']?><br>
                    <strong>Email: </strong><?=$val['email_buyer']?>
                    <?endforeach?>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">                
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">          
                <?$valid = TRUE?>      
                <?foreach($data_content['order_list'] as $val):?>                                    
                    <strong> ID Order: </strong><?=$val['id_order']?><br>                    
                    <strong> Tanggal Order: </strong><?=$val['order_date']?><br/>
                   <?
                        $expired_date = date_create($val['order_date']);
                        date_add($expired_date, date_interval_create_from_date_string('2 days'));                        
                   ?>
                    <strong> Jatuh Tempo: </strong><?=date_format($expired_date, 'Y-m-d H:i:s')?><br/>
                    <strong> Valid: </strong>                                       
                   <?
                        if(date_create(date('Y-m-d H:i:s')) > $expired_date ){
                            $valid = FALSE;
                            echo 'Tidak';
                        }else{
                            echo 'Ya';
                        }
                   ?>
                <?endforeach?>            
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Warna</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?$total_payment = 0?>
                        <?foreach ($data_content['order_item'] as $val):?>
                            <tr>
                                <td><?=$val['id_item']?></td>
                                <td><?=$val['name']?></td>
                                <td><?=$val['color']?></td>
                                <td><?=$val['size']?></td>
                                <td><?=$val['price']?></td>
                                <td><?=$val['number_item']?></td>
                                <td>Rp.<?=$val['subtotal']?></td>
                                <?$total_payment += $val['subtotal']?>
                            </tr>
                        <?endforeach?>                        
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Status Pembayaran</p>
                <img src="<?=base_url()?>assets/dist/img/credit/visa.png" alt="Visa">
                <img src="<?=base_url()?>assets/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="<?=base_url()?>assets/dist/img/credit/american-express.png" alt="American Express">
                <img src="<?=base_url()?>assets/dist/img/credit/paypal2.png" alt="Paypal">

                <?if(count($data_content['payment_report']) <= 0 ):?>
                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                        Belum Membayar
                    </p>
                <?else:?>
                    <table class="table table-striped">
                        <thead>
                            <th>Transfer Bank</th>
                            <th>Tanggal</th>
                        </thead>
                        <tbody>
                            <?foreach($data_content['payment_report'] as $val):?>
                                <tr>
                                    <td><?=$val['transfer_bank']?></td>
                                    <td><?=$val['report_date']?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
                <?endif?>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Pembayaran</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>Rp.<?=$total_payment?></td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>Rp.<?=$total_payment?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                <?if($valid == TRUE):?>
                <?=form_open('Admin/update_order_status', 'class="pull-right"')?>                
                    <?foreach($data_content['order_list'] as $val):?>
                        <input type="hidden" name="id-order" value="<?=$val['id_order']?>" />
                        <input type="hidden" name="order-status" value="SHIPPED" />
                    <?endforeach?>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-credit-card"></i> Konfirmasi Pengiriman
                    </button>
                </form>
                <?=form_open('Admin/update_order_status', 'class="pull-right"')?>                
                    <?foreach($data_content['order_list'] as $val):?>
                        <input type="hidden" name="id-order" value="<?=$val['id_order']?>" />
                        <input type="hidden" name="order-status" value="PAYYED" />
                    <?endforeach?>
                    <button type="submit" class="btn btn-default" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Konfirmasi Pembayaran
                    </button>
                </form>
                <?endif?>
                <button type="button" class="btn btn-default pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Batalkan
                </button>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
</div>
<!-- /.content-wrapper -->
