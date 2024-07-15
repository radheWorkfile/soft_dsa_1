<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Apply Now</title>
	
       <!-- LINK TAG START -->
    <?php
    include('include/css.php');
    ?>
    <!-- LINK TAG END -->
</head>

<body class="custom-cursor">


	<!-- /.preloader -->
	<div class="page-wrapper">
		 <!-- NAVBAR START -->
         <?php
        include('include/header.php');
        ?>
        <!-- NAVBAR END -->
		
   <!-- MAIN-SECTION START -->
		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
		</div><!-- /.stricky-header -->
		<section class="page-header">
			<div class="page-header__bg"
				style="background-image: url(./assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="./index.php">Home</a></li>
					<li><span>Apply Now</span></li>
				</ul>
				<h2>Apply Now</h2>
			</div>
		</section>
		
		
		<section class="finloan-apply-one pt-120 pb-120">
			<div class="container">
				<form action="#" method="post" class="form-one contact-one__form">
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title">
									<p class="block-title__tagline">Calculate you loan amount</p>
									<h2 class="block-title__title">Loan Details</h2>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Loan Amount*</label>
									<input class="form-control" type="number" name="loanamount"  placeholder="Loan Amount" required>
								</div>
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Monthly Income*</label>
									<input class="form-control" type="number" name="income"  placeholder="Monthly Income" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Purpose of Loan</label>
									<select name="purposeloan" class="form-control" required>
										<option value="">Select Purpose of Loan</option>
										<option value="Business">Business</option>
										<option value="Home Purchase">Home Purchase</option>
										<option value="Car Purchase">Car Purchase</option>
										<option value="Holiday">Holiday</option>
										<option value="Wedding">Wedding</option>
										<option value="Investment">Investment</option>
										<option value="Payday Loan">Payday Loan</option>
										<option value="Startup">Startup</option>
										<option value="Other">Other</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Loan Years</label>
									<select id="loanyears" name="loanyears" class="form-control" required>
										<option value="">Select Loan Year</option>
										<option value="6 Months">6 Months</option>
										<option value="1 Year">1 Year</option>
										<option value="2 Years">2 Years</option>
										<option value="3 Years">3 Years</option>
										<option value="4 Years">4 Years</option>
										<option value="5 Years">5 Years</option>
										<option value="6 Years">6 Years</option>
										<option value="7 Years">7 Years</option>
										<option value="8 Years">8 Years</option>
										<option value="9 Years">9 Years</option>
										<option value="10 Years">10 Years</option>
										<option value="11 Years">11 Years</option>
										<option value="12 Years">12 Years</option>
										<option value="13 Years">13 Years</option>
										<option value="14 Years">14 Years</option>
										<option value="15+ Years">15+ Years</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->
					</div><!-- /.contact-one__form-box-->
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title pt-50">
									<p class="block-title__tagline">Ask for More Details</p>
									<h2 class="block-title__title">Personal Details</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Full Name*</label>
									<input class="form-control" type="text" name="yourname" placeholder="Full Name" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Email*</label>
									<input class="form-control" type="email" name="your-email" placeholder="Your Email" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Mobile Number*</label>
									<input class="form-control" type="number" name="phonenumber" placeholder="Mobile Number" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Marital Status*</label>
									<select name="maritalstatus" class="form-control" required>
										 <option value="">Select Martial Status</option>
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Co Habiting">Co Habiting</option>
										<option value="Separated">Separated</option>
										<option value="Divorced">Divorced</option>
										<option value="Civil Union">Civil Union</option>
										<option value="Widowed">Widowed</option>
										<option value="Partner">Partner</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->                            
						</div><!-- /.row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Birth Date*</label>
									<input class="form-control" type="text" name="birthdate" placeholder="Birth Date" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Taxpayer ID*</label>
									<input class="form-control" type="number" name="taxpayer" placeholder="Taxpayer ID" required>
								</div><!-- /.form-group-->
							</div><!-- /.col-md-6-->           
						</div><!-- /.row-->
					</div><!-- /.contact-one__form-box-->
					<div class="contact-one__form-box">
						<div class="row">
							<div class="col-md-12">
								<div class="block-title pt-50">
									<p class="block-title__tagline">Other Details</p>
									<h2 class="block-title__title">Other Details</h2>
								</div><!-- /.block-title-->
							</div><!-- /.col-md-12-->
						</div><!-- /.row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Property Location*</label>
									<input class="form-control" type="text" name="address" placeholder="Address" required> 
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Employer Status*</label>
									<select name="employer_status" class="form-control" required>
										 <option value="">Select Employer Status</option>
										<option value="Full Time Employed">Business</option>
										<option value="Part Time Employed">Self Employed</option>
										<option value="Self Employed">Government Job</option>
										<option value="Temporarily Employed">Private Job</option
										><option value="Student">Student</option>
										<option value="Pension">Other</option>
									</select>
									<i class="fas fa-chevron-down"></i>
								</div><!-- /.form-group-->
							</div><!-- col-md-6 -->
							<div class="col-md-12">
								<input type="submit" value="Submit" class="thm-btn">
							</div>
						</div><!-- row -->
					</div><!-- contact-one__form-box -->
				</form><!-- /.contact-one__form-->
			</div><!-- /.container-->
		</section><!-- /.contact-one-->

		 <!-- footer section -->
         <?php
        include('include/footer.php');
        ?>
       <!-- footer section end -->

	</div><!-- /.page-wrapper -->


	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

			<div class="logo-box">
				<a href="javascript:void(0)" aria-label="logo image"><img src="./assets/images/logo-light.png" width="155"
						alt="" /></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="icon-email"></i>
					<a href="mailto:admin@prsoancenter.com">admin@prsoancenter.com</a>
				</li>
				<li>
					<i class="icon-telephone"></i>
					<a href="tel:+9401409056">+9401409056</a>
				</li>
			</ul><!-- /.mobile-nav__contact -->

			<div class="mobile-nav__social">
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div><!-- /.mobile-nav__social -->

		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->


	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<i class="icon-magnifying-glass"></i>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- SCRIPT TAG START -->
    <?php
    include('include/js.php');
    ?>
    <!-- SCRIPT TAG END -->
</body>

</html>