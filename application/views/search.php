
<form action="<?php echo base_url(); ?>book/insertBooking" method="POST" id="setbook">
						
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">BOOKING</h2>
				</div>
			</div>
			<div class="row modifier">
				<div class="col-xl-6 offset-3">
					<select class="form-control" id="field" name="field" onChange="changePrice()">
						<?php 
							for($f=0; $f<count($field); $f++){
								if($input->lapangan == $field[$f]->id){
									echo '<option value="'.$field[$f]->id.'" selected="selected">'.$field[$f]->name.'</option>';
								}else{
									echo '<option value="'.$field[$f]->id.'">'.$field[$f]->name.'</option>';
								}
							}
						?>
					</select>
				</div>
			</div>
			<div class="row modifier">
				<div class="col-xl-6 offset-3">
					<input type="date" name="bookingdate" id="bookingdate" class="form-control" value="<?php echo $input->bookingdate;?>" placeholder="Booking Date" onChange="changePrice()">
				</div>
			</div>
			<div class="row modifier">
				<div class="col-xl-3 offset-3">
					<select class="form-control" id="starttime" name="starttime" onChange="changePrice()">
						<?php 
							for($t=0; $t<count($time); $t++){
								if($input->bookingtime == $time[$t]->hour){
									echo '<option value="'.$time[$t]->id.'" selected="selected">'.$time[$t]->hour.'</option>';
								}else{
									echo '<option value="'.$time[$t]->id.'">'.$time[$t]->hour.'</option>';
								}
							}
						?>
					</select>
					<span id="fullBook" style="color:red"></span>
				</div>
				<div class="col-xl-3">
					<select class="form-control" id="endtime" name="endtime" onChange="changePrice()" required>
						<option selected="true" disabled>SELECT TIME</option>
						<?php 
							for($t=0; $t<count($time); $t++){
								echo '<option value="'.$time[$t]->id.'">'.$time[$t]->hour.'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="row modifier">
				<div class="col-xl-6 offset-3">
					<input type="text" name="price" id="price" class="form-control" value="" placeholder="Price" readonly>
				</div>
			</div>
			<div class="row modifier">
				<div class="col-xl-6 offset-3">
					<input type="text" name="bookingname" class="form-control" value="" placeholder="Booking Name" required>
				</div>
			</div>
			<div class="row modifier">
				<div class="col-xl-6 offset-3">
					<button class="button search_button" id="submitB" disabled>book<span></span><span></span><span></span></button>
				</div>
			</div>
		</div>
	</div>
</form>

    <!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center"></h2>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

			
				

			</div>
		</div>
	</div>

	<script>

function changePrice(){
	var field = document.getElementById("field").value;
	var date = document.getElementById("bookingdate").value;
	var start = parseInt(document.getElementById("starttime").value);
	var end = parseInt(document.getElementById("endtime").value);
	var fullBook = document.getElementById("fullBook");
	var submitButton = document.getElementById("submitB");
	
	if(date != undefined && start != undefined){
		$.ajax({
		type: "GET",
		contentType: 'application/json',
		dataType:'JSON',
		responseType:'application/json',
		url: "http://localhost/asboen-foetsal/search/getBookByDate?date="+date,
		cache: false,
		success: function(response){
			if(response.length > 0){
				if(start == response[0].start_time && field == response[0].id_field){
					fullBook.innerHTML = "Not Available";
					$("#starttime").css('border-color', 'red');
					submitButton.disabled = true;
				}else{
					fullBook.innerHTML = "";
					$("#starttime").css('border-color', '');
					submitButton.disabled = false;
				}
			}else{
				submitButton.disabled = false;
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
				console.warn(jqXHR.responseText)
			}
	});
	}

	if(isNaN(end)){
		return false;
	}

	if(end > start){
		var totalhour = end - start;
	}else{
		var totalhour = (24-start)+end;
	}

	$.ajax({
		type: "GET",
		contentType: 'application/json',
		dataType:'JSON',
		responseType:'application/json',
		url: "http://localhost/asboen-foetsal/search/getFieldById?id="+field,
		cache: false,
		success: function(response){
			var priceperhour = response[0].price;
			var pricetotal = priceperhour * totalhour;
			$("#price").val(pricetotal);
		},
		error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
				console.warn(jqXHR.responseText)
			}
	});
}
	</script>