<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home </title>

    <!-- ADDING LINK TAG -->
    <?php
          include('include/css.php')
    ?>
</head>

<body class="custom-cursor">

 
    <!-- /.preloader -->
    <div class="page-wrapper">
       <!-- NAVBAR START -->
       <?php
       include('include/header.php')
       ?>
      <!-- NAVBAR END -->

        <!-- /.main-menu -->
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="slider-one">
            <div class="thm-owl__carousel thm-owl__carousel--custom-nav owl-carousel owl-theme owl-dot-style-one" data-owl-nav-prev=".slider-one__carousel__btn__left" data-owl-nav-next=".slider-one__carousel__btn__right" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": 6000,
		"autoplayTimeout": 7000,
		"smartSpeed": 500,
		"nav": false,
		"dots": false,
		"margin": 0
	}'>
                <div class="item">
                    <div class="slider-one__item">
                        <div class="slider-one__lines">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.slider-one__lines -->
                        <div class="slider-one__image" style="background-image: url('<?php echo base_url();?>media/assets/images/backgrounds/slider-1-1.png');">
                        </div>
                        <!-- /.slider-one__image -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <p class="slider-one__tagline">
                                        <i class="fa fa-chart-pie"></i>
                                        Simple & Secure Payment
                                    </p>
                                    <!-- /.slider-one__tagline -->
                                    <h2 class="slider-one__title">We provide you
                                        a financial <span>power</span></h2><!-- /.slider-one__title -->
                                    <p class="slider-one__text"></p><!-- /.slider-one__text -->
                                    <div class="slider-one__btns">
                                        <a href="#" class="thm-btn">Apply For Loan</a>
                                    </div><!-- /.slider-one__btns -->
                                </div><!-- /.col-lg-7 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.slider-one__item -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="slider-one__item">
                        <div class="slider-one__lines">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.slider-one__lines -->
                        <div class="slider-one__image" style="background-image: url('<?php echo base_url();?>media/assets/images/backgrounds/slider-1-2.png');">
                        </div>
                        <!-- /.slider-one__image -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <p class="slider-one__tagline">
                                        <i class="fa fa-chart-pie"></i>
                                        Simple & Secure Payment
                                    </p>
                                    <!-- /.slider-one__tagline -->
                                    <h2 class="slider-one__title">We provide you
                                        a financial <span>power</span></h2><!-- /.slider-one__title -->
                                    <p class="slider-one__text"></p><!-- /.slider-one__text -->
                                    <div class="slider-one__btns">
                                        <a href="#l" class="thm-btn">Apply For Loan</a>
                                    </div><!-- /.slider-one__btns -->
                                </div><!-- /.col-lg-7 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.slider-one__item -->
                </div><!-- /.item -->
            </div><!-- /.owl-carousel -->
            <div class="slider-one__carousel__btn">
                <button class="slider-one__carousel__btn__left">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button class="slider-one__carousel__btn__right">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div><!-- /.slider-one__carousel__btns -->
            <div class="slider-one__box wow fadeInRight" data-wow-duration="1500ms">
                <div class="slider-one__box__icon">
                    <i class="icon-successful"></i>
                </div><!-- /.slider-one__box__icon -->
                <div class="slider-one__box__content">
                    <p class="slider-one__box__tagline">Checkout our</p><!-- /.slider-one__box__tagline -->
                    <h3 class="slider-one__box__title">88% Success Rates</h3><!-- /.slider-one__box__title -->
                </div><!-- /.slider-one__box__content -->
            </div><!-- /.slider-one__box -->
        </section><!-- /.slider-one -->
        <section class="about-four pt-120 pb-120">
            <div class="about-four__shape"></div><!-- /.about-four__shape -->
            <div class="container">
                <div class="row row-gutter-y-50">
                    <div class="col-lg-6">
                        <div class="about-four__content">
                            <div class="block-title text-left">
                                <p class="block-title__tagline">About Company</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">Personal loans to fulfill your dreams</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <div class="about-four__box">
                                <div class="about-four__box__icon">
                                    <i class="icon-loan"></i>
                                </div><!-- /.about-four__box__icon -->
                                <div class="about-four__box__content">
                                    <h3 class="about-four__box__title">We’re in this business since 1987 and we provide the best
                                        services.</h3><!-- /.about-four__box__title -->
                                </div><!-- /.about-four__box__content -->
                            </div><!-- /.about-four__box -->
                            <p class="about-four__text"></p>
                            <!-- /.about-four__text -->
                            <!-- <div class="row row-gutter-y-20">
                                <div class="col-md-6">
                                    <div class="about-four__feature">
                                        <div class="about-four__feature__content">
                                            <div class="about-four__feature__icon">
                                                <i class="icon-confirmation"></i>
                                            </div>
                                            <h3 class="about-four__feature__title">Direct card payment</h3>
                                           
                                        </div>
                                        <div class="about-four__feature__text">Lorem ipsum dolor sit ame ed consectetur nod.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-four__feature">
                                        <div class="about-four__feature__content">
                                            <div class="about-four__feature__icon">
                                                <i class="icon-confirmation"></i>
                                            </div>
                                            <h3 class="about-four__feature__title">Direct card payment</h3>
                                           
                                        </div>
                                        <div class="about-four__feature__text">Lorem ipsum dolor sit ame ed consectetur nod.
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="about-four__btns">
                                <a href="#" class="thm-btn thm-btn--dark-hover">Discover More</a><!-- /.thm-btn -->
                            </div><!-- /.about-four__btns -->
                        </div><!-- /.about-four__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-four__image">
                            <div class="../about-four__image__bg"></div><!-- /.about-four__image__bg -->
                            <div class="about-four__image__shape"></div><!-- /.about-four__image__shape -->
                            <img src="<?php echo base_url();?>media/assets/images/resources/about-4-1.png" alt="">
                            <div class="about-four__image__caption">
                                <h3 class="about-four__image__caption__year">25<i>+</i></h3>
                                <p class="about-four__image__caption__text">Years
                                    Experience</p><!-- /.about-four__image__caption__text -->
                            </div><!-- /.about-four__image__caption -->
                            <div class="about-four__image__floated">Finance</div><!-- /.team-details__floated -->
                        </div><!-- /.about-four__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-four -->
        <section class="service-two mb--120">
            <div class="service-two__shape"></div><!-- /.service-two__shape -->
            <div class="container">
                <div class="row row-gutter-y-30">
                    <div class="col-lg-4 col-md-12">
                        <div class="service-card-two">
                            <div class="service-card-two__shape"></div><!-- /.service-card-two__shape -->
                            <div class="service-card-two__icon">
                                <i class="icon-smartphone"></i>
                            </div><!-- /.service-card-two__icon -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title">
                                    <a href="#">Safe and Secure
                                        Payments</a>
                                </h3><!-- /.service-card-two__title -->
                                <p class="service-card-two__text"></p><!-- /.service-card-two__text -->
                                <a href="javascript:void(0)" class="service-card-two__link">More Detail</a>
                                <!-- /.service-card-two__link -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.col-lg-4 col-md-12 -->
                    <div class="col-lg-4 col-md-12">
                        <div class="service-card-two">
                            <div class="service-card-two__shape"></div><!-- /.service-card-two__shape -->
                            <div class="service-card-two__icon">
                                <i class="icon-operation"></i>
                            </div><!-- /.service-card-two__icon -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title">
                                    <a href="javascript:void(0)">Quick Payment
                                        Process</a>
                                </h3><!-- /.service-card-two__title -->
                                <p class="service-card-two__text"></p><!-- /.service-card-two__text -->
                                <a href="javascript:void(0)" class="service-card-two__link">More Detail</a>
                                <!-- /.service-card-two__link -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.col-lg-4 col-md-12 -->
                    <div class="col-lg-4 col-md-12">
                        <div class="service-card-two">
                            <div class="service-card-two__shape"></div><!-- /.service-card-two__shape -->
                            <div class="service-card-two__icon">
                                <i class="icon-payment-gateway"></i>
                            </div><!-- /.service-card-two__icon -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title">
                                    <a href="javascript:void(0)">No Prepayment
                                        Charges</a>
                                </h3><!-- /.service-card-two__title -->
                                <p class="service-card-two__text"></p><!-- /.service-card-two__text -->
                                <a href="javascript:void(0)" class="service-card-two__link">More Detail</a>
                                <!-- /.service-card-two__link -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div><!-- /.col-lg-4 col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->
        <section class="video-one video-one--home pt-240 pb-120" style="background-image: url('<?php echo base_url();?>media/assets/images/backgrounds/video-bg-1-1.jpg');">
            <div class="video-one__shape"></div><!-- /.video-one__shape -->
            <div class="container">
                <div class="row row-gutter-y-50">
                    <div class="col-lg-6">
                        <div class="video-one__content">
                            <a href="javascript:void(0)" class="video-popup video-one__btn">
                                <i class="fa fa-play"></i>
                                <span class="ripple"></span>
                            </a><!-- /.video-popup -->
                            <h3 class="video-one__title">Hundreds of customers <br> trust our company</h3>
                        </div><!-- /.video-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled video-one__list">
                            <li>
                                <i class="icon-tick"></i>
                                Expert & Certified
                            </li>
                            <li>
                                <i class="icon-tick"></i>
                                Quality Services
                            </li>
                            <li>
                                <i class="icon-tick"></i>
                                Quick Loan Order
                            </li>
                            <li>
                                <i class="icon-tick"></i>
                                Status Monitor
                            </li>
                            <li>
                                <i class="icon-tick"></i>
                                Status Monitor
                            </li>
                            <li>
                                <i class="icon-tick"></i>
                                Easy to Use
                            </li>
                        </ul><!-- /.list-unstyled video-one__list -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.video-one -->
        <div class="client-carousel @@extraClassName">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 30,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 30,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo base_url();?>media/assets/images/resources/brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="service-one pt-120 pb-140">
            <img src="<?php echo base_url();?>media/assets/images/shapes/service-h-1.png" class="service-one__icon-1" alt="">
            <img src="<?php echo base_url();?>media/assets/images/shapes/service-h-2.png" class="service-one__icon-2" alt="">
            <img src="<?php echo base_url();?>media/assets/images/shapes/service-h-3.png" class="service-one__icon-3" alt="">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tagline">What We’re Offering</p><!-- /.block-title__tagline -->
                    <h2 class="block-title__title">We provide best services <br> for your loans </h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row row-gutter-y-50">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="service-card">
                            <div class="service-card__image">
                                <img src="<?php echo base_url();?>media/assets/images/services/services-1-1.png" alt="Auto Car Loan">
                                <a href="javascript:void(0)"></a>
                            </div><!-- /.service-card__image -->
                            <div class="service-card__content">
                                <div class="service-card__content__inner">
                                    <div class="service-card__icon">
                                        <i class="icon-car"></i>
                                    </div><!-- /.service-card__icon -->
                                    <h3 class="service-card__title">
                                        <a href="javascript:void(0)">Auto Car Loan</a>
                                    </h3><!-- /.service-card__title -->
                                    <p class="service-card__text">Car Loan provide low interest many variations of passages of lorem ipsum have
                                        some.</p><!-- /.service-card__text -->
                                    <a href="javascript:void(0)" class="service-card__link">
                                        <i class="fa fa-angle-right"></i>
                                    </a><!-- /.service-card__link -->
                                </div><!-- /.service-card__content__inner -->
                            </div><!-- /.service-card__content -->
                        </div><!-- /.service-card -->
                    </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="service-card">
                            <div class="service-card__image">
                                <img src="<?php echo base_url();?>media/assets/images/services/services-1-2.png" alt="Wedding Loan">
                                <a href="javascript:void(0)"></a>
                            </div><!-- /.service-card__image -->
                            <div class="service-card__content">
                                <div class="service-card__content__inner">
                                    <div class="service-card__icon">
                                        <i class="icon-diamond"></i>
                                    </div><!-- /.service-card__icon -->
                                    <h3 class="service-card__title">
                                        <a href="javascript:void(0)">Wedding Loan</a>
                                    </h3><!-- /.service-card__title -->
                                    <p class="service-card__text">Car Loan provide low interest many variations of passages of lorem ipsum have
                                        some.</p><!-- /.service-card__text -->
                                    <a href="javascript:void(0)" class="service-card__link">
                                        <i class="fa fa-angle-right"></i>
                                    </a><!-- /.service-card__link -->
                                </div><!-- /.service-card__content__inner -->
                            </div><!-- /.service-card__content -->
                        </div><!-- /.service-card -->
                    </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="service-card">
                            <div class="service-card__image">
                                <img src="<?php echo base_url();?>media/assets/images/services/services-1-3.png" alt="Property Loan">
                                <a href="javascript:void(0)"></a>
                            </div><!-- /.service-card__image -->
                            <div class="service-card__content">
                                <div class="service-card__content__inner">
                                    <div class="service-card__icon">
                                        <i class="icon-house"></i>
                                    </div><!-- /.service-card__icon -->
                                    <h3 class="service-card__title">
                                        <a href="javascript:void(0)">Property Loan</a>
                                    </h3><!-- /.service-card__title -->
                                    <p class="service-card__text">Car Loan provide low interest many variations of passages of lorem ipsum have
                                        some.</p><!-- /.service-card__text -->
                                    <a href="javascript:void(0)" class="service-card__link">
                                        <i class="fa fa-angle-right"></i>
                                    </a><!-- /.service-card__link -->
                                </div><!-- /.service-card__content__inner -->
                            </div><!-- /.service-card__content -->
                        </div><!-- /.service-card -->
                    </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-grid pt-120 pb-120 -->
        <section class="loan-calculator loan-calculator--has-bg pt-120">
            <div class="container">
                <div class="loan-calculator__top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block-title text-left">
                                <p class="block-title__tagline">calculate your rate</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">How much do you need loan for you?</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <p class="loan-calculator__top__text"></p><!-- /.loan-calculator__top__text -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.loan-calculator__top -->

                <div class="loan-calculator__box">
                    <div class="row row-gutter-x-0">
                        <div class="col-lg-6">
                            <form class="loan-calculator__form" action="javascript:void(0)" id="loan-calculator" data-interest-rate="15">
                                <div class="input-box__top">
                                    <span>$1000</span>
                                    <span>$40000</span>
                                </div>
                                <div class="input-box">
                                    <div class="range-slider-count" id="range-slider-count"></div>
                                    <input type="hidden" value="" id="min-value-rangeslider-count">
                                    <input type="hidden" value="" id="max-value-rangeslider-count">
                                </div><!-- /.input-box -->
                                <div class="input-box__top">
                                    <span>1 Month</span>
                                    <span>12 Months</span>
                                </div><!-- /.input-box__top -->
                                <div class="input-box">
                                    <div class="range-slider-month" id="range-slider-month"></div>
                                    <input type="hidden" value="" id="min-value-rangeslider-month">
                                    <input type="hidden" value="" id="max-value-rangeslider-month">
                                </div><!-- /.input-box -->
                                <p>
                                    <span>Pay Monthly</span>
                                    <b>$<i id="loan-monthly-pay"></i></b>
                                </p>
                                <p>
                                    <span>Term of Use</span>
                                    <b><i id="loan-month"></i> Months</b>
                                </p>
                                <p>
                                    <span>Total Pay Back</span>
                                    <b>$<i id="loan-total"></i></b>
                                </p>
                                <a href="javascript:void(0)" class="thm-btn thm-btn--dark-hover">Apply For Loan</a>

                                <div class="loan-calculator__form__terms">*These calculators are provided only as general
                                    self-help
                                    Planning
                                    Tools. Results depend on other factors.</div><!-- /.loan-calculator__terms -->
                            </form><!-- /.about-one__from -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="loan-calculator__image">
                                <img src="<?php echo base_url();?>media/assets/images/resources/loan-calculator-1-1.png" alt="">
                                <div class="loan-calculator__image__caption wow fadeInUp" data-wow-duration="1500ms">
                                    <div class="loan-calculator__image__caption__inner">
                                        <h3 class="loan-calculator__image__title">98<span>%</span></h3>
                                        <!-- /.loan-calculator__image__title -->
                                        <p class="loan-calculator__image__text">Satisfied Customers</p>
                                    </div><!-- /.loan-calculator__image__caption__inner -->
                                </div><!-- /.loan-calculator__image__caption -->
                            </div><!-- /.loan-calculator__image -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.loan-calculator__box -->
            </div><!-- /.container -->
        </section><!-- /.loan-calculator -->
        <section class="testimonials-one pt-120 mb--40">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tagline">our testimonials</p><!-- /.block-title__tagline -->
                    <h2 class="block-title__title">What they’re talking about <br> our company</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row row-gutter-y-30">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="testimonial-card">
                            <div class="testimonial-card__info">
                                <div class="testimonial-card__image">
                                    <img src="<?php echo base_url();?>media/assets/images/resources/testi-1-1.png" alt="Delia Riley">
                                </div><!-- /.testimonial-card__image -->
                                <div class="testimonial-card__meta">
                                    <div class="testimonial-card__stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonial-card__stars -->
                                    <h3 class="testimonial-card__name">Delia Riley</h3><!-- /.testimonial-card__name -->
                                    <p class="testimonial-card__designation">Finance Manager</p><!-- /.testimonial-card__designation -->
                                </div><!-- /.testimonial-card__meta -->
                            </div><!-- /.testimonial-card__info -->
                            <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                            <div class="testimonial-card__text">
                                <p>I loved the customer service you guys provided me. That was very nice and patient with questions I had. I
                                    would really like definitely come back here. Thank you for yours service.</p>
                            </div><!-- /.testimonial-card__text -->
                        </div><!-- /.testimonial-card -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="testimonial-card">
                            <div class="testimonial-card__info">
                                <div class="testimonial-card__image">
                                    <img src="<?php echo base_url();?>media/assets/images/resources/testi-1-2.png" alt="Essie Perez">
                                </div><!-- /.testimonial-card__image -->
                                <div class="testimonial-card__meta">
                                    <div class="testimonial-card__stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonial-card__stars -->
                                    <h3 class="testimonial-card__name">Essie Perez</h3><!-- /.testimonial-card__name -->
                                    <p class="testimonial-card__designation">Finance Manager</p><!-- /.testimonial-card__designation -->
                                </div><!-- /.testimonial-card__meta -->
                            </div><!-- /.testimonial-card__info -->
                            <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                            <div class="testimonial-card__text">
                                <p>I loved the customer service you guys provided me. That was very nice and patient with questions I had. I
                                    would really like definitely come back here. Thank you for yours service.</p>
                            </div><!-- /.testimonial-card__text -->
                        </div><!-- /.testimonial-card -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="testimonial-card">
                            <div class="testimonial-card__info">
                                <div class="testimonial-card__image">
                                    <img src="<?php echo base_url();?>media/assets/images/resources/testi-1-3.png" alt="Dustin Dunn">
                                </div><!-- /.testimonial-card__image -->
                                <div class="testimonial-card__meta">
                                    <div class="testimonial-card__stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonial-card__stars -->
                                    <h3 class="testimonial-card__name">Dustin Dunn</h3><!-- /.testimonial-card__name -->
                                    <p class="testimonial-card__designation">Finance Manager</p><!-- /.testimonial-card__designation -->
                                </div><!-- /.testimonial-card__meta -->
                            </div><!-- /.testimonial-card__info -->
                            <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                            <div class="testimonial-card__text">
                                <p>I loved the customer service you guys provided me. That was very nice and patient with questions I had. I
                                    would really like definitely come back here. Thank you for yours service.</p>
                            </div><!-- /.testimonial-card__text -->
                        </div><!-- /.testimonial-card -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->
        <section class="fact-one pt-140 pb-100">
            <div class="container">
                <div class="row row-gutter-y-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-one__item">
                            <div class="fact-one__count">
                                <span class="count-box">
                                    <span class="count-text" data-stop="90" data-speed="1500"></span>
                                </span>%
                            </div><!-- /.fact-one__count -->
                            <h3 class="fact-one__title">Loans Approve</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-one__item">
                            <div class="fact-one__count">$<span class="count-box">
                                    <span class="count-text" data-stop="90" data-speed="1500"></span>
                                </span>k</div><!-- /.fact-one__count -->
                            <h3 class="fact-one__title">Daily Payments</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-one__item">
                            <div class="fact-one__count"><span class="count-box">
                                    <span class="count-text" data-stop="90" data-speed="1500"></span>
                                </span>k</div><!-- /.fact-one__count -->
                            <h3 class="fact-one__title">Happy Customers</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-one__item">
                            <div class="fact-one__count"><span class="count-box">
                                    <span class="count-text" data-stop="290" data-speed="1500"></span>
                                </span><!-- /.count-box -->
                            </div><!-- /.fact-one__count -->
                            <h3 class="fact-one__title">Expert People</h3><!-- /.fact-one__title -->
                        </div><!-- /.fact-one__item -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.fact-one -->
        <section class="benefit-one pt-120">
            <div class="benefit-one__shape-1 wow fadeInLeft" data-wow-delay="000ms" data-wow-duration="1500ms" style="background-image: url('<?php echo base_url();?>media/assets/images/backgrounds/benefit-bg-1-1.jpg');">
            </div><!-- /.benefit-one__shape-1 -->
            <div class="benefit-one__shape-2"></div><!-- /.benefit-one__shape-2 -->
            <div class="container">
                <div class="row row-gutter-y-60">
                    <div class="col-lg-6">
                        <div class="benefit-one__image wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                            <img src="<?php echo base_url();?>media/assets/images/resources/benefit-1-1.png" alt="">
                            <div class="benefit-one__image__caption">
                                <h3 class="benefit-one__image__title">99.9%</h3><!-- /.benefit-one__image__title -->
                                <p class="benefit-one__image__text">Success Rates Guarantee</p>
                                <!-- /.benefit-one__image__text -->
                            </div><!-- /.benefit-one__image__caption -->
                        </div><!-- /.benefit-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="benefit-one__content">
                            <div class="block-title text-left">
                                <p class="block-title__tagline">our benefits</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">Why you should choose our company</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="benefit-one__text"></p><!-- /.benefit-one__text -->
                            <div class="benefit-one__box">
                                <div class="benefit-one__box__icon">
                                    <i class="icon-bank"></i>
                                </div><!-- /.benefit-one__box__icon -->
                                <div class="benefit-one__box__content">
                                    <h3 class="benefit-one__box__title">Lowest bank fees</h3><!-- /.benefit-one__box__title -->
                                    <p class="benefit-one__box__text"></p><!-- /.benefit-one__box__text -->
                                </div><!-- /.benefit-one__box__content -->
                            </div><!-- /.benefit-one__box -->
                            <div class="benefit-one__box">
                                <div class="benefit-one__box__icon">
                                    <i class="icon-payment"></i>
                                </div><!-- /.benefit-one__box__icon -->
                                <div class="benefit-one__box__content">
                                    <h3 class="benefit-one__box__title">Up to 20.000$ limit</h3>
                                    <!-- /.benefit-one__box__title -->
                                    <p class="benefit-one__box__text"></p><!-- /.benefit-one__box__text -->
                                </div><!-- /.benefit-one__box__content -->
                            </div><!-- /.benefit-one__box -->
                            <div class="benefit-one__box">
                                <div class="benefit-one__box__icon">
                                    <i class="icon-smartphone-1"></i>
                                </div><!-- /.benefit-one__box__icon -->
                                <div class="benefit-one__box__content">
                                    <h3 class="benefit-one__box__title">Easy in 3 steps</h3><!-- /.benefit-one__box__title -->
                                    <p class="benefit-one__box__text"></p><!-- /.benefit-one__box__text -->
                                </div><!-- /.benefit-one__box__content -->
                            </div><!-- /.benefit-one__box -->
                        </div><!-- /.benefit-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.benefit-one -->
        <section class="blog-one pt-120 pb-120">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tagline">What We’re Offering</p><!-- /.block-title__tagline -->
                    <h2 class="block-title__title">Our latest news updates <br> & articles</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row row-gutter-y-30">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <div class="blog-card__date"><span>05</span> Mar</div><!-- /.blog-card__date -->
                                <img src="<?php echo base_url();?>media/assets/images/blog/blog-1-1.png" alt="Which growth strategies you should adopt">
                                <a href="javascript:void(0)"></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="javascript:void(0)"><i class="far fa-user-circle"></i> by Admin</a>
                                    <a href="javascript:void(0)"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3 class="blog-card__title"><a href="javascript:void(0)">Which growth strategies you should adopt</a></h3>
                                <p class="blog-card__text">Duis aute irure dolor lipsum simply free text the local markets.</p>
                                <a href="javascript:void(0)" class="blog-card__link">Read More</a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <div class="blog-card__date"><span>05</span> Mar</div><!-- /.blog-card__date -->
                                <img src="<?php echo base_url();?>media/assets/images/blog/blog-1-2.png" alt="Which growth strategies you should adopt">
                                <a href="javascript:void(0)"></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="javascript:void(0)"><i class="far fa-user-circle"></i> by Admin</a>
                                    <a href="javascript:void(0)"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3 class="blog-card__title"><a href="javascript:void(0)">Which growth strategies you should adopt</a></h3>
                                <p class="blog-card__text"></p>
                                <a href="javascript:void(0)" class="blog-card__link">Read More</a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <div class="blog-card__date"><span>05</span> Mar</div><!-- /.blog-card__date -->
                                <img src="<?php echo base_url();?>media/assets/images/blog/blog-1-3.png" alt="Which growth strategies you should adopt">
                                <a href="javascript:void(0)"></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="javascript:void(0)"><i class="far fa-user-circle"></i> by Admin</a>
                                    <a href="javascript:void(0)"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3 class="blog-card__title"><a href="javascript:void(0)">Which growth strategies you should adopt</a></h3>
                                <p class="blog-card__text"></p>
                                <a href="javascript:void(0)" class="blog-card__link">Read More</a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-4 col-md-12 col-sm-12 -->
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section><!-- /.blog-one -->
        <section class="call-to-action-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="000ms" data-wow-duration="1500ms">
                        <div class="call-to-action-two__image">
                            <img src="<?php echo base_url();?>media/assets/images/backgrounds/cta-2-1-bg.png" alt="">
                        </div><!-- /.call-to-action-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="call-to-action-two__content">
                            <ul class="list-unstyled call-to-action-two__list">
                                <li>Simple</li>
                                <li>Transparent</li>
                                <li>Secure</li>
                            </ul><!-- /.call-to-action-two__list -->
                            <h3 class="call-to-action-two__title">Get quick business loans</h3>
                            <!-- /.call-to-action-two__title -->
                            <a href="javascript:void(0)" class="thm-btn">Apply For Loan</a><!-- /.thm-btn -->
                            <span class="call-to-action-two__arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.49 76.07">
                                    <path d="M153.74,101.43l1.56-.21c1-.12,2.49-.38,4.44-.53s4.28-.35,7-.49l4.29-.07c1.51,0,3.1.05,4.75.13,3.31.18,6.89.43,10.65,1a116,116,0,0,1,11.73,2.27,123,123,0,0,1,12.26,3.66,120.32,120.32,0,0,1,23.84,11.47,113.33,113.33,0,0,1,10.53,7.41c1.61,1.33,3.21,2.62,4.7,4s2.93,2.69,4.31,4,2.62,2.73,3.87,4,2.34,2.67,3.39,4,2.06,2.55,2.93,3.8,1.74,2.41,2.48,3.54l2,3.21c.61,1,1.12,2,1.6,2.8s.9,1.61,1.22,2.29l.84,1.73c.45.93.68,1.43.68,1.43a.95.95,0,0,1-1.62,1l0,0s-.33-.44-.93-1.27-1.43-2.06-2.59-3.57l-1.87-2.52c-.71-.89-1.47-1.86-2.28-2.9-1.63-2.06-3.55-4.32-5.68-6.75-1.07-1.21-2.24-2.41-3.4-3.71s-2.44-2.56-3.79-3.82c-2.61-2.62-5.53-5.2-8.62-7.8-.77-.65-1.58-1.26-2.38-1.91s-1.61-1.28-2.45-1.88l-2.52-1.88L232.07,122a126.44,126.44,0,0,0-11-6.71,117.91,117.91,0,0,0-11.65-5.54,106.37,106.37,0,0,0-11.85-4c-1-.29-2-.54-2.93-.77l-2.88-.69c-1.93-.37-3.8-.79-5.65-1-3.68-.63-7.2-.93-10.45-1.16-1.63-.09-3.19-.1-4.67-.15l-4.22.06-3.7.21c-1.14.07-2.18.22-3.12.31-1.87.17-3.37.44-4.38.6l-1.56.24a.94.94,0,0,1-1.08-.78,1,1,0,0,1,.79-1.09h0" transform="translate(-152.92 -100.13)" />
                                    <path d="M280.58,151.16c-.13,1-.19,1.94-.26,2.9s-.06,1.92-.07,2.89a50.5,50.5,0,0,0,.37,5.77c.12,1,.27,1.91.44,2.86s.38,1.89.6,2.83c.47,1.86,1,3.7,1.65,5.51a1.71,1.71,0,0,1-2.18,2.18l-.26-.09-2.46-.85c-.82-.28-1.64-.55-2.45-.85s-1.64-.57-2.44-.87l-2.44-.89c-1.61-.6-3.21-1.27-4.78-2a33,33,0,0,1-4.62-2.58,1.07,1.07,0,0,1-.25-1.44,1,1,0,0,1,.8-.48h0a21.85,21.85,0,0,1,2.7.26c.88.13,1.76.3,2.62.51a37.62,37.62,0,0,1,5.08,1.54q2.48.93,4.89,2c1.61.73,3.19,1.52,4.75,2.35l-2.44,2.09c-.18-1-.33-2-.47-3s-.23-2-.34-3-.17-2-.25-3-.13-2-.18-3-.07-2-.09-3l0-3c0-1-.06-2,0-3l0-3v0a1,1,0,0,1,1.08-.91,1,1,0,0,1,1,1s0,0,0,.08" transform="translate(-152.92 -100.13)" />
                                </svg></span>
                            <!-- /.call-to-action-two__arrow -->
                        </div><!-- /.call-to-action-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <!-- FOOTER START -->
        <?php
        include('include/footer.php');
        ?>
        <!-- FOOTER END -->
        

    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="./index.php" aria-label="logo image"><img src="<?php echo base_url();?>media/assets/images/prs-logo (1).png" width="155" alt="footer-logo" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-email"></i>
                    <a href="mailto:admin@prsoncenter.com">admin@prsoancenter.com</a>
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
   

    <!-- INCLUDE SCRIPT TAG -->
    <?php
    include('include/js.php');
    ?>

 
</body>
</html>