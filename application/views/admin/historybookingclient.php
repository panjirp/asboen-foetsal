 <!-- Main content -->
 <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">History Booking Info</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="newBookingClient" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Booking Date</th>
                        <th>Booking Hour</th>
                        <th>Price</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dateNow = date("Y-m-d");
                      $timeNow = date("H");
                        for($b=0;$b<count($booking);$b++){
                          if($booking[$b]->status == 0){
                            $status = 'Unverified';
                          }else if($booking[$b]->status == 1){
                            $status = 'Verified';
                          }else{
                            $status = 'Cancel';
                          }
                            echo '<tr>
                            <td>'.$booking[$b]->booking_name.'</td>
                            <td>'.$booking[$b]->booking_date.'</td>
                            <td>'.$booking[$b]->start_time.' - '.$booking[$b]->end_time.'</td>
                            <td>'.$booking[$b]->total_payment.'</td>
                            <td>'.$status.'</td></tr>';
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Booking Date</th>
                        <th>Booking Hour</th>
                        <th>Price</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.box -->
        </div>
</section>
</div>
