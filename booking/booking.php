

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ROYAL OAK: BOOKING</title>

	<link rel="icon" type="img/png" href="images/icons/logo-removebg.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@200;300;700&family=Inconsolata:wght@300;400;600;700;800&family=
    Poppins:wght@100;200;300;400;600;700&family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/471c4e19ff.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="" href="css/booking.css">
	<link rel="stylesheet" type="text/css" href="css/contact_btn.css">


</head>
<body>

	<!-- header section begin -->
	<header>
        <div class="nav-position" style="position: sticky; top: 0;">
            <div>
                <img class="logoimg" src="images/icons/logo-removebg.png" alt="logo" ></img>
            </div>

            <div class="nav" style="background: linear-gradient(to right, #00093c, #2d0b00) ; height: 76.5px;">
                <ul>
                    <div class="topnav">
					<li><a class="active" href="../Register/Home.html"> HOME </a></li>
                        <li><a href="about.html"> ABOUT </a></li>
                        <li><a href="../dining/dining.html"> DINING </a></li>
                        <li><a href="../events/events.html"> EVENTS </a></li>
                        <li><a href="booking.php"> BOOK NOW </a></li>
                        <li><a href="../contact/contact.html">CONTACT</a></li>
                    </div>
                    
                    <div id="log_sign"> 
                        <li class="log">
                            <button class="login-button">
							<a href="../Register/login.html" style="text-decoration: none;">Login
                                </a>
                            </button>
                        </li>
                        <li class="sign">
                            <button class="signup">
							<a href="../Register/Register.html">
                                    Sign Up
                                </a>
                            </button>
                        </li>
                    </div> 
                </ul>
            </div>
        </div>
    </header>
    <!----Header End-->

	<br><br><br><br><br>

	<div id="progress_bar_main_container">
		<div id="progress_bar_2nd_container">
			<div id="progress_bar_3rd_container">

				<span class="steps active">
					<label class="labels" for="progress1" style="padding-top: 10px;">
						Check Availability
					</label>

					<button class="btns" id="progress1">1</button>
				</span>

				<span class="steps">
					<label class="labels" for="progress2" style="padding-top:18px;">
						Reservation
					</label>

					<button class="btns" id="progress2">2</button>
				</span>

				<span class="steps">
					<label class="labels" for="progress3">
						Guest information & payment
					</label>

					<button class="btns" id="progress3">3</button>
				</span>

				<span class="steps">
					<label class="labels" for="progress4" style="padding-top:10px;">
						Review & Confirmation
					</label>

					<button class="btns" id="progress4">4</button>
				</span>
			</div>
		</div>

		<div id="progress_bar">
				<div class="bar"></div>
			</div>
	</div>
	
	<hr style="margin-top: 90px; border:none; height: 0;">
	
	<br><br>

	<div id="container_for_all_booking_parts">
		<div id="container_for_all_booking_parts_2nd">
			<br><br>

		 <!------------------------------ check - availability  ---------------------------------------->

			<div id="check_availability">
				<!------- form ----------->
			  <form action="php/checking.php" method="POST" id="form1">
				<div id="check_availability_section1">

					<span>
						<h3>CHECK IN</h3>
						<br>
						
							<input type="date" name="check_in" pattern="0-9"  style="width:140px;
								height: 25px;
								text-align: center;
								border-width: 2px;">
						
					</span>
					<span>
						<hr id="hr1_for_check_availability_section1">
					</span>
					<span>
						<h3>CHECK OUT</h3>
						<br>
						
							<input type="date" name="check_out" pattern="0-9"  style="width:140px; 
								height: 25px;
								text-align: center;
								border-width: 2px;">	
					</span>
				</div>

				<br>

				<div id="check_availability_section2">
					<span>
						<br>
						<h3>GUEST & ROOMS</h3>
						<br>
					</span>
					<span>
						
							<select name="adults"  style="width:140px; 
								height: 25px;
								text-align: center;
								margin-right: 12px;
								border-width: 2px;">
								<option value="">Adults</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>

								
							<select name="childrens"  style="width:140px; 
								height: 25px;
								text-align: center;
								margin-left: 12px;
								border-width: 2px;">
								<option value="">Childrens</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
						
					</span>
					  <div style="display: flex; flex-direction: row;">
						<span>
							<input type="submit" value="Next" id="next_button_for_check_availability" class="btn_for_submit_and_next" name="checking_submit"> 
						</span>
						<!--
						<button class="btn_for_submit_and_next" onclick="display_reservtion('a')">Next
						</button>
					-->
					
					  </div>
				  </form>
				</div>
				
			</div>
			
		 
		
		 <!-------------------------------------- reservation -------------------------------------------->

			<div id="reservation">
				<div id="container_for_all_reservation_parts">

					<div id="accommodation_main">

						<!-------------- ROOMS ------------------>

						<h3 class="reservation_heading">AVAILABLE ROOMS & SUITES</h3>

						<br>
						<div id="rooms_header">
							<hr class="reservation_hr reservation_hr1" id="hr1_for_rooms_header">
							<h3 class="accmmodation_type_heading">ROOMS</h3>
							<hr class="reservation_hr reservation_hr2" id="hr2_for_rooms_header">
						</div>
						<br>
						<!------- form ----------->
						<form action="php/reservation.php" method="POST" id="form2">
						 <div id="room_types_container">

							<div id="room_type1" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_room_type1" src="images/accommodations/room1.jpg" alt="Image for room type 1">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Room Type 1" required>
									BOOK
								</button>
								<h5 class="room_name">ROOM TYPE1</h5>
								<ul class="uls_of_booking" id="list_for_room_type1">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 250.00</li>
								</ul>
							</div>
							<div id="room_type2" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_room_type2" src="images/accommodations/room2.jpg" alt="Image for room type 2">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Room Type 2" required>
									BOOK
								</button>
								<h5 class="room_name">ROOM TYPE2</h5>
								<ul class="uls_of_booking" id="list_for_room_type2">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 275.00</li>
								</ul>
							</div>
							<div id="room_type3" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_room_type3" src="images/accommodations/room3.jpg" alt="Image for room type 3">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Room Type 3" required>
									BOOK
								</button>
								<h5 class="room_name">ROOM TYPE3</h5>
								<ul class="uls_of_booking" id="list_for_room_type3">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 290.00</li>
								</ul>
							</div>
						 </div>

						 <!---------------SUITES ----------------------->

						 <br><br>
						 <div id="suites_header">
							<hr class="reservation_hr reservation_hr1" id="hr1_for_suites_header">
							<h3 class="accmmodation_type_heading">SUITES</h3>
							<hr class="reservation_hr reservation_hr2" id="hr2_for_suites_header">
						 </div>
						 <br>
						 <div id="suite_types_container">
							<div id="suite_type1" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_suite_type1" src="images/suites/suite1.jpg" alt="Image for suite type 1">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Suite Type 1" required>
									BOOK
								</button>
								<h5 class="suite_name">SUITE TYPE1</h5>
								<ul class="uls_of_booking" id="list_for_suite_type1">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 350.00</li>
								</ul>
							</div>
							<div id="suite_type2" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_suite_type2" src="images/suites/suite2.jpg" alt="Image for suite type 2">
								</div class="accommodation_img_div">
								<button type="submit" class="booking_btn" name="reservation_type" value="Suite Type 2" required>
									BOOK
								</button>
								<h5 class="suite_name">SUITE TYPE2</h5>
								<ul class="uls_of_booking" id="list_for_suite_type2">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 375.00</li>
								</ul>
							</div>
							<div id="suite_type3" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_suite_type3" src="images/suites/suite3.jpg" alt="Image for suite type 3">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Suite Type 3" required>
									BOOK
								</button>
								<h5 class="suite_name">SUITE TYPE3</h5>
								<ul class="uls_of_booking" id="list_for_suite_type3">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 390.00</li>
								</ul>
							</div>
						 </div>

						 <!------------------- EVENTS ----------------------->

						 <br><br><br>
						 <h3 class="reservation_heading">AVAILABLE EVENT HALLS</h3>

						 <!-------------- MEETING HALLS ------------------>

						 <br>
						 <div id="meeting_header">
							<hr class="reservation_hr reservation_hr1" id="hr1_for_meeting_header">
							<h3 class="accmmodation_type_heading">MEETING HALLS</h3>
							<hr class="reservation_hr reservation_hr2" id="hr2_for_meeting_header">
						 </div>
						 <br>
						 <div id="meeting_types_container">
							<div id="meeting_type1" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_meeting_type2" src="images/meeting/meeting1.jpg" alt="Image for meeting type 1">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Meeting Type 1" required>
									BOOK
								</button>
								<h5 class="meeting_name">MEETING TYPE1</h5>
								<ul class="uls_of_booking" id="list_for_meeting_type1">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 250.00</li>
								</ul>
							</div>
							<div id="meeting_type2" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_meeting_type2" src="images/meeting/meeting2.jpg" alt="Image for meeting type 2">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Meeting Type 2" required>
									BOOK
								</button>
								<h5 class="meeting_name">MEETING TYPE2</h5>
								<ul class="uls_of_booking" id="list_for_meeting_type2">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 275.00</li>
								</ul>
							</div>
							<div id="meeting_type3" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_meeting_type3" src="images/meeting/meeting3.jpg" alt="Image for meeting type 3">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Meeting Type 3" required>
									BOOK
								</button>
								<h5 class="meeting_name">MEETING TYPE3</h5>
								<ul class="uls_of_booking" id="list_for_meeting_type3">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 290.00</li>
								</ul>
							</div>
						 </div>
						 <br>

						 <!--------------- WEDDINGS ----------------------->

						 <br>
						 <div id="wedding_header">
							<hr class="reservation_hr reservation_hr1" id="hr1_for_wedding_header">
							<h3 class="accmmodation_type_heading">WEDDING</h3>
							<hr class="reservation_hr reservation_hr2" id="hr2_for_wedding_header">
						 </div>
						 <br>
						 <div id="wedding_types_container">
							<div id="wedding_type1" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_wedding_type1" src="images/halls/wedding1.jpg" alt="Image for wedding type 1">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Wedding Type 1" required>
									BOOK
								</button>
								<h5 class="wedding_name">WEDDING TYPE1</h5>
								<ul class="uls_of_booking" id="list_for_wedding_type1">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 350.00</li>
								</ul>
							</div>
							<div id="wedding_type2" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_wedding_type2" src="images/halls/wedding2.jpg" alt="Image for wedding type 2">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Wedding Type 2" required>
									BOOK
								</button>
								<h5 class="wedding_name">WEDDING TYPE2</h5>
								<ul class="uls_of_booking" id="list_for_wedding_type2">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 375.00</li>
								</ul>
							</div>
							<div id="wedding_type3" class="type">
								<div class="accommodation_img_div">
									<img class="accommodation_img" id="image_for_wedding_type3" src="images/halls/wedding3.jpg" alt="Image for wedding type 3">
								</div>
								<button type="submit" class="booking_btn" name="reservation_type" value="Wedding Type 3" required>
									BOOK
								</button>
								<h5 class="wedding_name">WEDDING TYPE3</h5>
								<ul class="uls_of_booking" id="list_for_room_type3">
									<li>Lorem ipsum dolor sit amet, consectetuer</li>
									<li>Aenean commodo ligula eget dolor.</li>
									<li>Price: Aenean massa. Cum : USD 390.00</li>
								</ul>
							</div>
						 </div>
						</form>

					</div>
				</div>
			</div>

			

		 <!----------------------- guest info & payment --------------------------------->

			<div id="guest_info_and_payment">
				<div id="container_for_all_guest_info_and_payment_parts">
					<!--
						<h3 class="step3_heading">RESERVATION DETAILS</h3>
						<br>

						<div id="reservation_details_div">

							<br><br>
						-->
						<!---------- PHP CODE PART ----------->
						<!--
							<br><br>
						</div>
					-->
					<br><br>
					<h3 class="step3_heading">GUEST INFORMATION</h3>

					<div id="guest_info_div">

						<br>
						<!------- form ----------->
						<form action="php/guest_info.php" method="POST" id="guest_info_form" id="form3">

							<br><br>
							<!--- title for name --->
							
							<!--- first name --->
							<label for="f_name">First Name:</label>
							<input type="text" id="f_name" class="align" name="first_name" placeholder="First-Name" pattern="[A-Za-z -.]+" title="Input Your First Name Here" >
							<br><br>
							<!--- last name --->
							<label for="l_name">Last Name:</label>
							<input type="text" id="l_name" class="align" name="last_name" pattern="[A-Za-z -.]+" title="Input Your Last Name Here" placeholder="Lasst-Name" >
							<br><br>
							<!--- address --->
							<label for="address">Address:</label>
							<input type="text" id="address" class="align" name="address" title="Input Your Address header" pattern="[A-Za-z ,.0-9/-()]+" >
							<br><br>
							<!--- city --->
							<label for="city">City:</label>
							<input type="text" id="city" class="align" name="city" title="Input Your City Here"
							pattern="[A-Za-z ,-0-9]+" >
							<br><br>
							<!--- postal code --->
							<label for="postel_code">Postal Code:</label>
							<input type="text" id="postel_code" class="align" name="postal_code" title="Input Your Postal Code Here" pattern="[A-Za-z 0-9-/.,]+" required>
							<br><br>
							<!--- country --->
							<label for="country">Country:</label>
							<input type="text" id="country" class="align" name="country" title="Input Your Country Here" pattern="[A-Za-z]+" >
							<br><br>
							<!--- e-mail --->
							<label for="email">Email:</label>
							<input type="email" id="email" class="align" name="email" title="Input Your Email Here" >
							<br><br>
							<!--- mobile --->
							<label for="mobile">Mobile:</label>
							<input type="tel" id="mobile" class="align" name="mobile" title="Input Your Mobile Here" pattern="^\+?[0-9]{10}$" >

							<!--
								<h5>BE A MEMBER</h5>
								<p>All we need from you is a Password</p>
								<p style="font-size: 12px; 
										  padding-top: 0px;
										  padding-bottom: 20px;"><b>EASY CHECK IN + MEMBER DISCOUNT</b></p>
								-->
								<!------ password ------>
								<!--
								<label for="pwd">Password:</label>
								<input type="Password" id="pwd" class="align" name="password" title="Password must contain at least characters, including uppercase and lowercase letters, numbers and special characters(!@#$&*-_+)" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$&*-_+]).{8}$" placeholder="********" >
								<br>
								-->
								<!----- confirm password ----->
								<!--
								<label for="pwd2" class="label_for_pwd2">
									<span>
										Confirm<br>
									</span>
									<span id="span_for_pwd2">
										Password:
									</span>
								</label>
								<input type="Password" id="pwd2" class="align"  name="confirm_password" placeholder="********" >
								<br><br><br><br>

							-->

							<div style="display: flex; flex-direction: row; justify-content: center; margin-top: 50px;">
								<input type="submit" name="guest_details" value="Next" id="next_button_for_guest_detail" required>
							</div>
							<br><br>

						</form>

						<br><br>
					</div>

				<!-------------- PAYMENT DETAILS ------------->

					<h3 class="step3_heading">PAYMENT DETAILS</h3>

					<br>

					<div id="payment_div">
						<br><br>

						<div>
							<p class="para_align">Select a payment method.</p>
							
							<div id="payment_method">
								<img class="payment_images" src="images/payment/visa.png" alt="visa card">
								<img class="payment_images" src="images/payment/american-express.png" alt="american express">
								<img class="payment_images" src="images/payment/card.png" alt="master card">
							</div>

							<div id="payment_form_div">
								<!------- form ----------->
								<form action="php/payment.php" method="POST" style="padding-top:25px" id="form4">

									<label for="crd_name" id="align_name_icons">
										<img  src="images/icons/person.png" class="payment_icons">
									</label>
									<input type="text" name="holder_name" id="crd_name" placeholder=" ">

									<br>

						<!----- js part pattern type will be change according to selected card type of user ------->		
									<label for="card_number" id="align_numbr_icons">
										<img src="images/icons/credit-card.png" class="payment_icons" style="width:20px;">
									</label>
									<input type="text" name="card_number" id="card_number" placeholder="Card Number" pattern="^\d{15,16}$">

									<div id="expire_and_cvv">
										<div>
											<label for="expire">
												<p style="display: inline; font-size: 12px;">CARD EXPIRY:</p>
											</label>
											<br>
											<input type="month" id="expire" name="expire_date" placeholder="mm/yyyy" size="13">
										</div>

										<div>
											<label for="cvv">
												<p style="display: inline; font-size: 12px;">CVV:</p>
											</label>
											<br>
											<div id="div_for_lock_cvv">
												<img src="images/icons/credit-card.png" id="lock_for_cvv">
											</div>
											<input type="text" id="cvv" name="cvv" placeholder="***" pattern="^[0-9]{3}$" size="13">
										</div>
									</div>
									<br>

									<div style=" text-align: center;">

										<input type="checkbox" name="agreed" style="position: relative; left: -5px;" id="check_box">

											<label for="check_box" style="top: -2px; font-size: 10px; color: black; display: inline; position: relative;">
												I have read and agree to the Royal Oak
												<a href="#"> terms and conditions</a>
												<br>
												&emsp;and the 
												<a href="#">privacy policy</a>.
											</label for="">
									</div>

									<div id="div_pay_btn">
										<input type="submit" name="payment" value="Proceed to Pay" id="pay_btn" required>
									</div>

									<br><br>
								</form>
								
							</div>
							
						</div>
					</div>

				</div>
			</div>

		 <!----------------------  review & confirm --------------------------------------->

		 	<div id="review_and_confirm">
		 		<div id="container_for_all_review_and_confirm_parts">

		 			<h3 id="header_for_review">REVIEW & CONFIRM</h3>
		 			<br>

		 			<!--
			 			<div id="success_msg_div">
			 				<br> -->
			 				
			 				<!------ PHP   CODE GOES HERE ----------->
			 				 <!--
			 				<br>
			 			</div>
			 			<br>
					-->

		 			<div id="reservation_details_reviewing_div">
		 				<!--
			 				<div style="position: relative;">
			 					<p class="save_txt"> RESERVATION DETAILS:</p>
			 					<button onclick="print_content('details_of_reservation')" class="save_btn">SAVE</button>
			 				</div>

			 				<div id="details_of_reservation" class="view_details">
			 					<br>
								-->
			 					<!----------  PHP CODE GOES HERE ----------->
			 					<!--
			 					<br>
			 				</div>
			 				<br>
		 				-->

		 				<div id="payment_details_reviewing_div">
		 					<div>
		 						<p class="save_txt"> PAYMENT DETAILS:</p>
		 						<button onclick="print_content('details_of_payment')" class="save_btn">SAVE</button>
		 					</div>

		 					<div id="details_of_payment" class="view_details">
							    <br>

							    <div class="for_centering_div">
							        <img src="images/icons/logo.png" alt="logo" id="printing_logo">
							        <h5>THE ROYAL OAK</h5>
							    </div>
							    <div style="padding-left: 190px; padding-top: 30px;">

								    <?php
									    require 'php/config.php';

									    $paymentQuery = "SELECT * FROM payment_details";
									    $paymentResult = $connection->query($paymentQuery);

									    if ($paymentResult->num_rows > 0) 
									    {
									        $paymentRow = $paymentResult->fetch_assoc();

									        echo "<h3>Payment Details:</h3>";
									        echo "<p>Holder Name: " . $paymentRow['holder_name'] . "</p>";
									        echo "<p>Card Number: " . $paymentRow['card_number'] . "</p>";
									        echo "<p>Card Expiry: " . $paymentRow['card_expiry'] . "</p>";
									        echo "<p>CVV: " . $paymentRow['cvv'] . "</p>";
									        //echo "<p>Amount: $300.00 </p>";
									    } 

									    else 
									    {
									        echo "No payment details found.";
									    }

									    $connection->close();
								    ?>
								   </div>
							    
							    <br>
							</div>

		 					<br><br>
		 				</div>

		 			</div>

		 			<div id="Confirm_Reservation_div" class="for_centering_div">
		 				<form action="#" method="">
			 				<button type="submit" id="Confirm_Reservation">
			 					Confirm Reservation
			 				</button>
			 			</form>
			 			<form action="php/display.php" method="">
			 				<button type="submit" id="Confirm_Reservation">
			 					View Details
			 				</button>
			 			</form>
		 			</div>
		 			<br><br>

		 		</div>
		 			
		 	</div>
		 	<br><br>
		 </div>

			<br><br><br>
	</div>
	
	<!---------- contact button begin-------------->

	<div id="div_for_moving_btn">
		<a href="#contact.html">
			<img id="contact_img" src="images/icons/phone.png" alt="contact icon">
		</a>

		<div id="back_to_top">
		    <img src="images/icons/top-w.png" alt="top" id="to_top_img" onmouseenter="changeImage(true)" onmouseleave="changeImage(false)" onclick="topFunction()">

		</div>
	</div>

	<br><br><br><br>

	<script type="text/javascript" src="js/save.js"></script>
	<!----------------------- change to top img----------------------->
	<script type="text/javascript">

	    function changeImage(ans) 
	     {
	        let topImg = document.getElementById('to_top_img');
	        
	        if (ans) 
	         {
	            topImg.src = "images/icons/top-b.png";
	         } 
	        else 
	         {
	            topImg.src = "images/icons/top-w.png";
	         }
	     }
	</script>

	<!-------------------------- scroll top functions------------------------->
	<script>
	     var mybutton = document.getElementById("back_to_top");

	     window.onscroll = function() {scrollFunction()};

	     function scrollFunction() {
		       if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) 
		        {
		      		mybutton.style.display = "block";
		     	} 
		     	else 
		     	 {
		      		mybutton.style.display = "none";
		    	 }
	      }

	      function topFunction() {
		       document.body.scrollTop = 0; //appl
		       document.documentElement.scrollTop = 0; //others
	      }
   </script>

	


	<!---Footer-->
    <footer>

        <div class="row" >
            <div class="col">
                <img src="images/icons/logo.png" style="width: 70px;height: 70px; " class="logoFooter">
                <br><br>
                <p><i>"Your ideal location for <br> memorable occasions."</i></p>
            </div>
            <div class="col">
                    <h3>Office</h3>
                    <p>THE ROYAL OAK</p>
                    <br>
                    <p>21, HIKKADUWA RD</p>
                    <br>
                    <p>COLOMBO 07</p>
                    <p class="email-id">royaloak@gmail.com</p>
                    <h4>+94 112 458 974</h4>
            </div>
            <div class="col">
                    <h3>Links</h3>
                    <ul>
					<li><a class="active" href="../Register/Home.html"> HOME </a></li>
                        <li><a href="about.html"> ABOUT </a></li>
                        <li><a href="../dining/dining.html"> DINING </a></li>
                        <li><a href="../events/events.html"> EVENTS </a></li>
                        <li><a href="booking.php"> BOOK NOW </a></li>
                        <li><a href="../contact/contact.html">CONTACT</a></li>
                    <li><a href="../events/Terms&Cond.html">TERMS & CONDITIONS</a></li>
                    </ul>
            </div>
            <div class="col">
                    <h3>Follow us on Social Media</h3>
                    <div class="social-icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-x-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
            </div>
        </div>
    </footer>
    <!---Footer End-->

</body>
</html>