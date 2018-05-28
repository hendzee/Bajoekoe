<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Produk Promo
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
                        <h3 class="box-title">Update referensi promo</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h3>Promo 1</h3>
                        <?=form_open_multipart('Admin/update_promo')?>
                            <input type="hidden" name="id-ref" value="001" />
                            <div class="form-group">                                
                                <input type="text" class="form-control" name="title" placeholder="judul..." required />
                            </div>
                            <div class="form-group">                                
                                <input type="text" class="form-control" name="ref" placeholder="referensi..." required />
                            </div>
                            <div class="form-group">                            
                                <label>max 200kB</label>      
                                <input type="file" name="image" required />                                
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <br/>
                        <h3>Promo 2</h3>
                        <?=form_open_multipart('Admin/update_promo')?>
                            <input type="hidden" name="id-ref" value="002" />
                            <div class="form-group">                                
                                <input type="text" class="form-control" name="title" placeholder="judul..." required />
                            </div>
                            <div class="form-group">                                
                                <input type="text" class="form-control" name="ref" placeholder="referensi..." required />
                            </div>
                            <div class="form-group">  
                                <label>max 200kB</label>                          
                                <input type="file" name="image" required />                                
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <br/>
                        <h3>Promo 3</h3>
                        <?=form_open_multipart('Admin/update_promo')?>
                            <input type="hidden" name="id-ref" value="003" />
                            <div class="form-group">                                
                                <input type="text" class="form-control" name="title" placeholder="judul..." required />
                            </div>
                            <div class="form-group">                                
                                <input type="text" class="form-control" name="ref" placeholder="referensi..." required />
                            </div>
                            <div class="form-group">    
                                <label>max 200kB</label>                        
                                <input type="file" name="image" required />                                
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <br/>
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