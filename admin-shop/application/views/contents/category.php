<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kategori Produk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?=$this->session->flashdata('msg')?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Parameter Kategori Produk</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?=form_open_multipart('Admin/add_categories', 'role="form"')?>
                                    <input type="hidden" name="type" value="brand" />
                                    <div class="form-group">
                                        <label for="brand">Brand</label>
                                        <input type="text" class="form-control" id="brand" name="brand" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo(max 100kb)</label>
                                        <input type="file" id="brand-logo" name="brand-logo">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <br/>
                                <br/>
                                <?=form_open('Admin/add_categories')?>
                                    <input type="hidden" name="type" value="category" />
                                    <div class="form-group">
                                        <label for="category">Kategori</label>
                                        <input type="text" class="form-control" name="category" required />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <!-- /input-group -->
                                <br/>
                                <br/>
                            </div>
                            <div class="col-md-6">
                                <?=form_open('Admin/add_categories')?>
                                    <input type="hidden" name="type" value="color" />
                                    <div class="form-group">
                                        <label for="color">Warna</label>
                                        <input type="text" class="form-control" id="color" name="color" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="color-code">Kode Warna</label>
                                        <input type="text" class="form-control" id="color-code" name="color-code" placeholder="#kode warna" required />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <br/>
                                <br/>
                                <?=form_open('Admin/add_categories')?>
                                    <input type="hidden" name="type" value="size" />
                                    <div class="form-group">
                                        <label for="size">Ukuran</label>
                                        <input type="text" class="form-control" name="size" required />
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <hr/>
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
                                            <?foreach ($data_content['brand'] as $val): ?>
                                                <tr>
                                                    <td>
                                                        <?=$val['brand']?>
                                                    </td>
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
                                            <?foreach ($data_content['categories'] as $val): ?>
                                                <tr>
                                                    <td>
                                                        <?=$val['category']?>
                                                    </td>
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
                                            <?foreach ($data_content['size'] as $val): ?>
                                                <tr>
                                                    <td>
                                                        <?=$val['size_val']?>
                                                    </td>
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
                                            <?foreach ($data_content['colors'] as $val): ?>
                                                <tr>
                                                    <td>
                                                        <?=$val['color']?>
                                                    </td>
                                                </tr>
                                            <?endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end box body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>