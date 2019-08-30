 <!-- Main content -->
 <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Futsal Fields</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="editField" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Field Name</th>
                        <th>Price</th>
                        <th>Pictures</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        for($f=0;$f<count($fields);$f++){
                          echo '<tr>
                          <td>'.$fields[$f]->name.'</td>
                          <td>'.$fields[$f]->price.'</td>
                          <td>'.$fields[$f]->pics.'</td>
                          <td><button class="btn btn-success" data-toggle="modal" data-target="#myModalFields'.$fields[$f]->id.'" style="margin-right:10">Edit</button>
                          &nbsp<button type="button" class="btn btn-danger" onClick="deleteFields('.$fields[$f]->id.')">Delete</button></td></tr>';
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Field Name</th>
                        <th>Price</th>
                        <th>Pictures</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.box -->
        </div>
</section>
</div>


<?php
for($fm=0;$fm<count($fields);$fm++){
    echo "
    <div id='myModalFields".$fields[$fm]->id."' class='modal' tabindex='-1' role='dialog'>
      <div class='modal-dialog modal-xl'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h4 class='modal-title>Edit Fields</h4>
          </div>
          <div class='modal-body'>
            <form role='form' enctype='multipart/form-data' method='POST' action='".base_url()."admin/editFields'>
                <div class='box-body'>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label for='newname'>Field Name</label>
                        <input type='hidden' name='editid' id='editid' value='".$fields[$fm]->id."'>
                        <input type='text' class='form-control' id='editname' name='editname' placeholder='Enter Field Name' value='".$fields[$fm]->name."'>
                    </div>
                </div>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label for='newprice'>Price</label>
                        <input type='number' class='form-control' id='editprice' name='editprice' placeholder='Enter price / hour' value='".$fields[$fm]->price."'>
                    </div>
                </div>
                <div class='col-sm-12'>
                    <div class='form-group'>
                        <label for='newInputFile'>Field Pictures</label>
                        <input type='file' id='editinputfile' name='editinputfile[]' multiple >
                    </div>
                </div>
                <div class='col-sm-12'>
                <button type='submit' class='btn btn-primary pull-right'>Submit</button>
                </div>
                </div>
            </form>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>"; 
}
?>

<script>
  function deleteFields(id){
    window.location.href="http://localhost/asboen-foetsal/admin/deleteFields?id="+id;
  }
</script>