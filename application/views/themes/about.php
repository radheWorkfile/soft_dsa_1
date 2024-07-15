<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us </title>
   
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
      
        <!-- /.main-menu -->
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url('<?php echo base_url();?>./media/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
            
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="./index.php">Home</a></li>
                    <li><span>About</span></li>
                </ul>
                <h2>About Us</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="about-two pt-120 pb-120">
            <div class="container">
                <div class="row row-gutter-y-50">
                    <div class="col-lg-6">
                        <div class="about-two__image">
                            <img src="<?php echo base_url();?>media/assets/images/resources/about-2-1.png" alt="">
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <p class="block-title__tagline">About Company</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">Get to know about our company</h2>
                                <!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="about-two__text">There are many variations of passages of lorem ipsum available
                                the
                                majority have suffered alteration in some form by injected humour. Duis aute irure dolor
                                lipsum
                                is simply free text available.</p><!-- /.about-two__text -->
                            <ul class="list-unstyled ml-0 about-two__list">
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i>
                                    Nsectetur cing elit.
                                </li>
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i>
                                    Suspe ndisse suscipit sagittis leo.
                                </li>
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i>
                                    Entum estibulum digni posuere.
                                </li>
                                <li>
                                    <i class="fa fa-arrow-circle-right"></i>
                                    Donec tristique ante dictum rhoncus.
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->
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
                                    <path
                                        d="M153.74,101.43l1.56-.21c1-.12,2.49-.38,4.44-.53s4.28-.35,7-.49l4.29-.07c1.51,0,3.1.05,4.75.13,3.31.18,6.89.43,10.65,1a116,116,0,0,1,11.73,2.27,123,123,0,0,1,12.26,3.66,120.32,120.32,0,0,1,23.84,11.47,113.33,113.33,0,0,1,10.53,7.41c1.61,1.33,3.21,2.62,4.7,4s2.93,2.69,4.31,4,2.62,2.73,3.87,4,2.34,2.67,3.39,4,2.06,2.55,2.93,3.8,1.74,2.41,2.48,3.54l2,3.21c.61,1,1.12,2,1.6,2.8s.9,1.61,1.22,2.29l.84,1.73c.45.93.68,1.43.68,1.43a.95.95,0,0,1-1.62,1l0,0s-.33-.44-.93-1.27-1.43-2.06-2.59-3.57l-1.87-2.52c-.71-.89-1.47-1.86-2.28-2.9-1.63-2.06-3.55-4.32-5.68-6.75-1.07-1.21-2.24-2.41-3.4-3.71s-2.44-2.56-3.79-3.82c-2.61-2.62-5.53-5.2-8.62-7.8-.77-.65-1.58-1.26-2.38-1.91s-1.61-1.28-2.45-1.88l-2.52-1.88L232.07,122a126.44,126.44,0,0,0-11-6.71,117.91,117.91,0,0,0-11.65-5.54,106.37,106.37,0,0,0-11.85-4c-1-.29-2-.54-2.93-.77l-2.88-.69c-1.93-.37-3.8-.79-5.65-1-3.68-.63-7.2-.93-10.45-1.16-1.63-.09-3.19-.1-4.67-.15l-4.22.06-3.7.21c-1.14.07-2.18.22-3.12.31-1.87.17-3.37.44-4.38.6l-1.56.24a.94.94,0,0,1-1.08-.78,1,1,0,0,1,.79-1.09h0"
                                        transform="translate(-152.92 -100.13)" />
                                    <path
                                        d="M280.58,151.16c-.13,1-.19,1.94-.26,2.9s-.06,1.92-.07,2.89a50.5,50.5,0,0,0,.37,5.77c.12,1,.27,1.91.44,2.86s.38,1.89.6,2.83c.47,1.86,1,3.7,1.65,5.51a1.71,1.71,0,0,1-2.18,2.18l-.26-.09-2.46-.85c-.82-.28-1.64-.55-2.45-.85s-1.64-.57-2.44-.87l-2.44-.89c-1.61-.6-3.21-1.27-4.78-2a33,33,0,0,1-4.62-2.58,1.07,1.07,0,0,1-.25-1.44,1,1,0,0,1,.8-.48h0a21.85,21.85,0,0,1,2.7.26c.88.13,1.76.3,2.62.51a37.62,37.62,0,0,1,5.08,1.54q2.48.93,4.89,2c1.61.73,3.19,1.52,4.75,2.35l-2.44,2.09c-.18-1-.33-2-.47-3s-.23-2-.34-3-.17-2-.25-3-.13-2-.18-3-.07-2-.09-3l0-3c0-1-.06-2,0-3l0-3v0a1,1,0,0,1,1.08-.91,1,1,0,0,1,1,1s0,0,0,.08"
                                        transform="translate(-152.92 -100.13)" />
                                </svg></span>
                            <!-- /.call-to-action-two__arrow -->
                        </div><!-- /.call-to-action-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <section class="testimonials-one pt-120 mb--40">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tagline">our testimonials</p><!-- /.block-title__tagline -->
                    <h2 class="block-title__title">What they’re talking about <br> our company</h2>
                    <!-- /.block-title__title -->
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
                                    <p class="testimonial-card__designation">Finance Manager</p>
                                    <!-- /.testimonial-card__designation -->
                                </div><!-- /.testimonial-card__meta -->
                            </div><!-- /.testimonial-card__info -->
                            <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                            <div class="testimonial-card__text">
                                <p>I loved the customer service you guys provided me. That was very nice and patient
                                    with questions I had. I
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
                                    <p class="testimonial-card__designation">Finance Manager</p>
                                    <!-- /.testimonial-card__designation -->
                                </div><!-- /.testimonial-card__meta -->
                            </div><!-- /.testimonial-card__info -->
                            <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                            <div class="testimonial-card__text">
                                <p>I loved the customer service you guys provided me. That was very nice and patient
                                    with questions I had. I
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
                                    <p class="testimonial-card__designation">Finance Manager</p>
                                    <!-- /.testimonial-card__designation -->
                                </div><!-- /.testimonial-card__meta -->
                            </div><!-- /.testimonial-card__info -->
                            <span class="testimonial-card__line"></span><!-- /.testimonial-card__line -->
                            <div class="testimonial-card__text">
                                <p>I loved the customer service you guys provided me. That was very nice and patient
                                    with questions I had. I
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
        <section class="team-about pt-120 pb-120">
            <div class="container">
                <div class="block-title text-center">
                    <p class="block-title__tagline">professional team</p><!-- /.block-title__tagline -->
                    <h2 class="block-title__title">Meet the highly qualified <br> team members</h2>
                    <!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row row-gutter-y-30">
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="000ms">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url();?>media/assets/images/team/team-1-1.jpg" alt="Connor Estrada">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__content__inner">
                                    <h3 class="team-card__title"><a href="javascript:void(0)">Connor Estrada</a></h3>
                                    <p class="team-card__designation">ADVISOR</p>
                                </div><!-- /.team-card__content__inner -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="100ms">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="<?php echo base_url();?>media/assets/images/team/team-1-2.jpg" alt="Darrell Powell">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__content__inner">
                                    <h3 class="team-card__title"><a href="javascript:void(0)">Darrell Powell</a></h3>
                                    <p class="team-card__designation">ADVISOR</p>
                                </div><!-- /.team-card__content__inner -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                    <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="200ms">
                        <div class="team-card">
                            <div class="team-card__image">
                                <img src="../assets/images/team/team-1-3.jpg" alt="Carolyn Love">
                                <div class="team-card__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div><!-- /.team-card__social -->
                            </div><!-- /.team-card__image -->
                            <div class="team-card__content">
                                <div class="team-card__content__inner">
                                    <h3 class="team-card__title"><a href="javascript:void(0)">Carolyn Love</a></h3>
                                    <p class="team-card__designation">ADVISOR</p>
                                </div><!-- /.team-card__content__inner -->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-about -->
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
                <a href="javascript:void(0)" aria-label="logo image"><img src="../assets/images/logo-light.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-email"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@finlon.com</a>
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