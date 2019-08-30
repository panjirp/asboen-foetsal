 <!-- Main content -->
 <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">New Booking Info</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="newBookingClient" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Booking Date</th>
                        <th>Booking Hour</th>
                        <th>Price</th>
                        <th>Bukti Bayar</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dateNow = date("Y-m-d");
                      $timeNow = date("H");
                        for($b=0;$b<count($booking);$b++){
                          if($dateNow <= $booking[$b]->booking_date){
                            if($booking[$b]->status == 0){
                              $status = 'Unverified';
                            }else if($booking[$b]->status == 1){
                              $status = 'Verified';
                            }else{
                              $status = 'Cancel';
                            }

                            if(isset($booking[$b]->transfer_pict)){
                              $picttrf = '<button class="btn btn-default" data-toggle="modal" data-target="#myModal'.$booking[$b]->id.'" style="margin-right:10"><i class="fa fa-file" aria-hidden="true"> Show File</i></button>';
                            }else{
                              $picttrf = 'Belum Ada';
                            }
                            echo '<tr>
                            <td>'.$booking[$b]->booking_name.'</td>
                            <td>'.$booking[$b]->booking_date.'</td>
                            <td>'.$booking[$b]->start_time.' - '.$booking[$b]->end_time.'</td>
                            <td>'.$booking[$b]->total_payment.'</td>
                            <td>'.$picttrf.'</td>
                            <td>'.$status.'</td>
                            <td><button type="button" class="btn btn-success" onClick="approved('.$booking[$b]->id.')">Verifikasi</button>&nbsp
                            <button type="button" class="btn btn-danger" onClick="cancel('.$booking[$b]->id.')">Cancel</button></td></tr>';
                          }
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Booking Date</th>
                        <th>Booking Hour</th>
                        <th>Price</th>
                        <th>Bukti Bayar</th>
                        <th>Status</th>
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

<!-- <div class="modal fade" id="myModal47" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <h4 class="modal-title" id="modalLabel">Modal Title</h4>
      </div>
      <div class="modal-body">
        Modal content...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div> -->
</div>

<?php
for($bm=0;$bm<count($booking);$bm++){
  // echo base_url().@$booking[$b]->transfer_pict;
  if(isset($booking[$bm]->transfer_pict)){
    echo "
    <div id='myModal".$booking[$bm]->id."' class='modal' tabindex='-1' role='dialog'>
      <div class='modal-dialog modal-xl'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h4 class='modal-title>Bukti Transfer</h4>
          </div>
          <div class='modal-body'>
            <iframe src='".base_url().@$booking[$bm]->transfer_pict."#zoom=65' style='width:100%; height:600px;' frameborder='0'></iframe>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>"; 
  }
}
?>

<script>
var base_url = window.location.origin;

function approved(id){
  $.ajax({
		type: "GET",
		contentType: 'application/json',
		dataType:'JSON',
		responseType:'application/json',
		url: base_url+"/asboen-foetsal/admin/approved?id="+id,
		cache: false,
		success: function(response){
			if(response != false){
        window.location.href="http://localhost/asboen-foetsal/admin/newbookingclient";
      }
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
			console.warn(jqXHR.responseText)
		}
	});
}

function cancel(id){
  $.ajax({
		type: "GET",
		contentType: 'application/json',
		dataType:'JSON',
		responseType:'application/json',
		url: base_url+"/asboen-foetsal/admin/cancel?id="+id,
		cache: false,
		success: function(response){
			if(response != false){
        window.location.href="http://localhost/asboen-foetsal/admin/newbookingclient";
      }
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
			console.warn(jqXHR.responseText)
		}
	});
}
</script>