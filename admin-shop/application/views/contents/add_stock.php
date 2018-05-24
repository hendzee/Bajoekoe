<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Stok
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?=$this->session->flashdata('msg')?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Stock Baru</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?=form_open_multipart('Admin/add_stock_data', 'role="form"')?>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <?foreach($data_content['data_stock'] as $val):?>
                                        <input type="hidden" name="id_item" value="<?=$val['id_item']?>" />
                                    <?endforeach?>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            disabled="" 
                                            <?foreach($data_content['data_stock'] as $val):?>
                                                placeholder="<?=$val['name']?>" 
                                            <?endforeach?>
                                            name="name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="color">Warna</label>
                                        <select class="form-control" name="color">
                                            <?foreach($data_content['data_color'] as $val):?>
                                                <option value="<?=$val['color']?>"><?=$val['color']?></option>
                                            <?endforeach?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="size_val">Ukuran</label>
                                        <select class="form-control" name="size">
                                            <?foreach($data_content['data_size'] as $val):?>
                                                <option value="<?=$val['size_val']?>"><?=$val['size_val']?></option>
                                            <?endforeach?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <input type="number" class="form-control" name="stock" min="0" value="0" required/>
                                    </div>                                                                                                            
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label for="image_one">Gambar 1 (wajib, max = 200kB)</label>
                                        <input type="file" name="image_one" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="image_two">Gambar 2 (max = 200kB)</label>
                                        <input type="file" name="image_two" />
                                    </div>
                                    <div class="form-group">
                                        <label for="image_three">Gambar 3 (max = 200kB)</label>
                                        <input type="file" name="image_three" />
                                    </div>
                                    <div class="form-group">
                                        <label for="image_four">Gambar 4 (max = 200kB)</label>
                                        <input type="file" name="image_four" />
                                    </div>                                                                        
                                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                </div>                                
                            </div>
                        </form>
                        <br/>
                        <hr/>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Ukuran</th>
                                    <th>Warna</th>
                                    <th>Stock</th>
                                    <th>Tgl Update</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?foreach($data_content['data_stock'] as $val):?>
                                    <tr>
                                        <td><?=$val['id_item']?></td>
                                        <td>
                                            <p><?=$val['name']?></p>
                                            <p><span class="blur-tag"><?=$val['brand']?></span></p>
                                            <p><span class="blur-tag"><?=$val['gender']?></span></p>
                                        </td>
                                        <td><?=$val['size']?></td>
                                        <td><?=$val['color']?></td>
                                        <td><?=$val['stock']?></td>
                                        <td><?=$val['add_date']?></td>                                        
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