	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(<?php echo base_url(); ?>images/futsal-wallpaper-background-hd.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Asboen</h1>
							<h1>Foetsal</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url(); ?>images/futsal-wallpaper-background-hd2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Asboen</h1>
							<h1>Foetsal</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url(); ?>images/futsal-field.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Asboen</h1>
							<h1>Foetsal</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">
					<div class="search_panel active">
						<form action="<?php echo base_url(); ?>search" method="POST" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Field name</div>
								<select class="form-control" id="srcfieldname" name="srcfieldname">
									<?php 
										for($f=0; $f<count($field); $f++){
											echo '<option value="'.$field[$f]->id.'">'.$field[$f]->name.'</option>';
										}
									?>
								</select>
							</div>
							<div class="search_item">
								<div>booking date</div>
								<input type="date" class="check_in search_input" name="bookingdate" placeholder="YYYY-MM-DD">
							</div>

							<div class="search_item">
								<div>time slot</div>
								<!-- <input type="text" class="check_out search_input" name="bookingTime" placeholder="HH:mm"> -->
								<select class="form-control" id="bookingtime" name="bookingtime">
									<?php 
										for($t=0; $t<count($time); $t++){
											echo '<option value="'.$time[$t]->hour.'">'.$time[$t]->hour.'</option>';
										}
									?>
								</select>
							</div>
							<button class="button search_button">book<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Intro -->
	
	<!-- <div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center"><img src="<?php echo base_url(); ?>images/rating.png" alt=""> Top Rated <img src="<?php echo base_url(); ?>images/rating.png" alt=""></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items"> -->

				<!-- Intro Item -->

			<!-- <?php
				for($top=0; $top<3; $top++){
			?>
				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div> -->
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<!-- <div class="intro_item_background" style="background-image:url(<?php echo base_url(); ?>images/futsal-wallpaper-background-hd.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center"> -->
							<!-- <div class="intro_date">May 25th - June 01st</div> -->
							<!-- <div class="button intro_button"><div class="button_bcg"></div><a href="<?php echo base_url(); ?>book?id=<?php echo $field[$top]->id; ?>">Book Now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1><?php echo $field[$top]->name; ?></h1>
								<div class="intro_price"><?php echo $field[$top]->address ?></div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
				

			</div>
		</div>
	</div> -->

	<!-- Offers -->

	<div class="offers">
    <div class="cta_background" style="background-image:url(<?php echo base_url(); ?>images/footballwp.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Why Choose Us</h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo base_url(); ?>images/piggy-bank.png)"></div>
									<div class="offer_name"><a href="#">Member Discount</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo base_url(); ?>images/piggy-bank.png)"></div>
									<div class="offer_name"><a href="#">Member Discount</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo base_url(); ?>images/piggy-bank.png)"></div>
									<div class="offer_name"><a href="#">Member Discount</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo base_url(); ?>images/piggy-bank.png)"></div>
									<div class="offer_name"><a href="#">Member Discount</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script>
		var base_url = window.location.origin;

		function getfield(id){
				var srcfieldname = $("#srcfieldname");
				srcfieldname.html('');
			if(id != 'all'){
					$.ajax({
						type: "GET",
						contentType: 'application/json',
						dataType:'JSON',
						responseType:'application/json',
						url: base_url+"/asboen-foetsal/home/getfield2?id_city="+id,
						cache: false,
						success: function(response){
							if(response.length == 0){
								var optField = "<option disabled>NO FIELD</option>";
								srcfieldname.append(optField);
							}else{
								for(i=0; i<response.length; i++){
									var optField = "<option value="+response[i].id+">"+response[i].name+"</option>";
									srcfieldname.append(optField);
								}
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
							console.log(textStatus, errorThrown);
							console.warn(jqXHR.responseText)
						}
					});
			}else{
				$.ajax({
					type: "GET",
					contentType: 'application/json',
					dataType:'JSON',
					responseType:'application/json',
					url: base_url+"/asboen-foetsal/home/getallfield?",
					cache: false,
					success: function(response){
						if(response.length == 0){
							var optField = "<option disabled>NO FIELD</option>";
							srcfieldname.append(optField);
						}else{
							var optField = "<option selected='true' value='all'>ALL FIELD</option>";
							srcfieldname.append(optField);
							for(i=0; i<response.length; i++){
								var optField = "<option value="+response[i].id+">"+response[i].name+"</option>";
								srcfieldname.append(optField);
							}
						}
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus, errorThrown);
						console.warn(jqXHR.responseText)
					}
				});
			}	 
		}
	</script>
	<!-- Testimonials -->

	

