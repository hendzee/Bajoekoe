<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Informasi Toko
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
                        <h3 class="box-title">Update informasi</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">                        
                        <?=form_open('Admin/update_info', 'role="form"')?>
                            <div class="form-group">
                                <label>Deskripsi Toko</label>
                                <textarea class="form-control" name="description" rows="5" required></textarea>
                            </div>                            
                            <div class="form-group">
                                <label>Video (Youtube)</label>
                                <input type="text" class="form-control" name="video" requried/>
                            </div>
                            <h3> Media Sosial</h3>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" name="ig-link" required/>
                            </div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="fb-link" required/>
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" name="tw-link" required/>
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text" class="form-control" name="yt-link" required/>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Simpan" />
                        </form>

                        
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