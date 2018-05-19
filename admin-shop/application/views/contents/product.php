<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Produk
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
                        <h3 class="box-title">Input produk baru</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?=form_open('Admin/add_product', 'role="form"')?>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" name="name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga(Rp.)</label>
                                        <input type="number" class="form-control" name="price" min="0" value="0" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Diskon(%)</label>
                                        <input type="number" class="form-control" name="discount" min="0" max="100" value="0" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <select type="text" class="form-control" name="gender">
                                            <option value="M">MALE</option>
                                            <option value="F">FEMALE</option>
                                            <option value="B">BOTH</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Brand</label>
                                        <select class="form-control" name="brand">
                                            <?foreach($data_content['brand'] as $val):?>
                                                <option value="<?=$val['brand']?>"><?=$val['brand']?></option>
                                            <?endforeach?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="form-control" name="category">
                                            <?foreach($data_content['categories'] as $val):?>
                                                <option value="<?=$val['category']?>"><?=$val['category']?></option>
                                            <?endforeach?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label for="">Berat(gram)</label>
                                        <input type="number" class="form-control" name="weight" min="0" max="" value="0" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Dimensi</label>
                                        <input type="text" class="form-control" name="dimension" placeholder="10 x 10..."/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Catatan penggunaan</label>
                                        <input type="text" class="form-control" name="note" placeholder="catatan pemakaian"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea class="form-control" name="description" rows="4"></textarea>
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
                                    <th>Nama</th>
                                    <th>Brand</th>
                                    <th>Gender</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Diskon</th>
                                    <th>Publikasi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?foreach($data_content['data_product'] as $val):?>
                                    <tr>
                                        <td><?=$val['name']?></td>
                                        <td><?=$val['brand']?></td>
                                        <td><?=$val['gender']?></td>
                                        <td><?=$val['category']?></td>
                                        <td><?=$val['price']?></td>
                                        <td><?=$val['discount']?></td>
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