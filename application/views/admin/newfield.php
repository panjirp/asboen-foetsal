 <!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">New Futsal Field</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>admin/insertNew">
                <div class="box-body">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="newname">Field Name</label>
                        <input type="text" class="form-control" id="newname" name="newname" placeholder="Enter Field Name">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="newprice">Price</label>
                        <input type="number" class="form-control" id="newprice" name="newprice" placeholder="Enter price / hour">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="newInputFile">Field Pictures</label>
                        <input type="file" id="newinputfile" name="newinputfile[]" multiple >
                    </div>
                </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
</div>

