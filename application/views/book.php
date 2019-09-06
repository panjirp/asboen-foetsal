
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Invoice
            <small>#<?php echo $input->invoice_id;?></small>
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
                    <td><?php echo $input->booking_name;?></td>
                    <td><?php echo $input->fieldname;?></td>
                    <td><?php echo $input->booking_date;?></td>
                    <td><?php echo $input->start_time.':00';?></td>
                    <td><?php echo $input->end_time.':00';?></td>
                    <td><?php echo $input->total_hour;?></td>
                    <td><?php echo $input->priceperhour;?></td>
                    <td><?php echo $input->total_payment;?></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              <i class="fa fa-credit-card"></i>
               Transfer ke : <br>
              Bank : <?php echo $bank[0]->bank_name; ?> <br> 
              No. Rekening : <?php echo $bank[0]->account_number; ?> <br>
              A/N : <?php echo $bank[0]->account_name; ?> <br>
              </p>
            </div><!-- /.col -->
          </div>
            

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button class="btn btn-success pull-right" onClick="window.location.href='http://localhost/asboen-foetsal/book/submitPayment?id=<?php echo $input->invoice_id;?>'"><i class="fa fa-credit-card"></i> Submit Payment</button>
              <button class="btn btn-primary pull-right" onClick="window.location.href='http://localhost/asboen-foetsal/book/generatePDF?id=<?php echo $input->invoice_id;?>'" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->