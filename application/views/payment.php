
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Invoice
            <small>#<?php echo $book[0]->id;?></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="invoice">

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Atas Nama</th>
                    <th>Lapangan</th>
                    <th>Tanggal Booking</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Total Jam</th>
                    <th>Harga/Jam</th>
                    <th>Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $book[0]->booking_name;?></td>
                    <td><?php echo $field[0]->name;?></td>
                    <td><?php echo $book[0]->booking_date;?></td>
                    <td><?php echo $book[0]->start_time.':00';?></td>
                    <td><?php echo $book[0]->end_time.':00';?></td>
                    <td><?php echo $totalhour;?></td>
                    <td><?php echo $field[0]->price;?></td>
                    <td><?php echo $book[0]->total_payment;?></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-md-6">
              <p class="lead">Payment Methods:</p>
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              <i class="fa fa-credit-card"></i>
               Transfer ke : <br>
              Bank : <?php echo $bank[0]->bank_name; ?> <br> 
              No. Rekening : <?php echo $bank[0]->account_number; ?> <br>
              A/N : <?php echo $bank[0]->account_name; ?> <br>
              </p>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                <form action="<?php echo base_url(); ?>book/savefile" method="post" enctype="multipart/form-data" id="fileUploadForm">
                  <h4 class="">Upload Bukti Transfer</h4>
                    <div class="col-sm-12">
                        <input type="file" name="file" id="file">
                        <input type="hidden" name="id_invoice" id="id_invoice" value="<?php echo $book[0]->id;?>">
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
            


        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->