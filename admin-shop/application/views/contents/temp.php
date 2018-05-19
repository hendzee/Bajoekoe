<!-- left column -->
        <div class="col-md-5">                                 
          <!-- Input addon -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Masukkan parameter</h3>
            </div>
            <div class="box-body">                                          
              <h6>Kategori</h6>                                        
              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-info btn-flat">Simpan</button>
                </span>
              </div>
              <!-- /input-group -->

              <h6>Ukuran</h6>                                        
              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Simpan</button>
                    </span>
              </div>
              <!-- /input-group -->              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Brand</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            <div class="box-body">
                <div class="form-group">
                <label for="exampleInputEmail1">Brand</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>                                
                <div class="form-group">
                <label for="exampleInputEmail1">Logo</label>
                <input type="file" id="exampleInputEmail1" placeholder="Enter email">
                </div>                                
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        
        <!-- /.box -->

        <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Warna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            <div class="box-body">
                <div class="form-group">
                <label for="exampleInputEmail1">Warna</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>                                
                <div class="form-group">
                <label for="exampleInputEmail1">Kode Warna</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>                                
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Kategori</h3>
                </div>
                <!-- /.box-header -->                                
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Brand</th>                                    
                                </tr>
                                </thead>
                                <tbody>                        
                                <?foreach($data_content['brand'] as $val):?>                                    
                                    <tr>
                                        <td><?=$val['brand']?></td>
                                    </tr>                        
                                <?endforeach?>
                                </tbody>
                                </table>
                            </div>                             
                        </div>
                        <div class="col-xs-3">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Kategori</th>                                    
                                </tr>
                                </thead>
                                <tbody>               
                                <?foreach($data_content['categories'] as $val):?>
                                    <tr>
                                        <td><?=$val['category']?></td>
                                    </tr>                        
                                <?endforeach?>
                                </tbody>
                                </table>
                            </div>                             
                        </div>
                        <div class="col-xs-3">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Ukuran</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?foreach($data_content['size'] as $val):?>
                                    <tr>
                                        <td><?=$val['size_val']?></td>        
                                    </tr>                        
                                <?endforeach?>
                                </tbody>
                                </table>
                            </div>                             
                        </div>
                        <div class="col-xs-3">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Warna</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?foreach($data_content['colors'] as $val): ?>
                                <tr>
                                    <td><?=$val['color']?></td>
                                </tr>                        
                                <?endforeach?>
                                </tbody>
                                </table>
                            </div>                             
                        </div>
                    </div>                    
                </div>
                <!-- /.box-body -->                
            </div>
            <!-- /.box -->             
        </div>
        <!--/.col (right) -->