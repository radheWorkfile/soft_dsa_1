<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page </title>
   
  <!-- LINK TAG START-->
  <?php
  include('include/css.php');
  ?>
  <!-- LINK TAG END-->
    
</head>

<body class="custom-cursor">
    <div class="page-wrapper">
        <!-- NAVBAR START -->
        <?php
        include('include/header.php');
        ?>
        <!-- NAVBAR END -->

        <!-- /.main-menu -->
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('<?php echo base_url();?>media/assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
           
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="./index.php">Home</a></li>
                    <li><span>Contact</span></li>
                </ul>
                <h2>Contact us</h2>
            </div>
        </section>

        <section class="contact-one pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <p class="block-title__tagline">contact</p><!-- /.block-title__tagline -->
                                <h2 class="block-title__title">Feel free to get
                                    in touch</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="contact-one__text">There are many variations of passages of lorem ipsum available the
                                majority have alteration in some form by injected humour.</p><!-- /.contact-one__text -->
                            <div class="contact-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.contact-one__social -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <form action="#" class="form-one contact-form-validated">
                            <div class="row row-gutter-y-20 row-gutter-x-20">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Full name" name="name">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email address" name="email">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Phone number" name="phone">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <button type="submit" class="thm-btn">Send a Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-info-one__item">
                            <div class="contact-info-one__icon">
                                <i class="icon-telephone"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__text">Have any question?</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="tel:+9401409056">+9401409056</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-info-one__item">
                            <div class="contact-info-one__icon">
                                <i class="icon-email"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__text">Write us email</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="mailto:admin@prsoancenter.com">admin@prsoancenter.com</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-info-one__item">
                            <div class="contact-info-one__icon">
                                <i class="icon-pin"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p class="contact-info-one__text">Visit anytime</p><!-- /.contact-info-one__text -->
                                <a class="contact-info-one__link" href="#">PAURIPOTA ,DHANSIRI BAZAR UDALGURI, ASSAM</a>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__item -->
                    </div><!-- /.col-md-4 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <div class="google-map__default">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__default" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->

       <!-- FOOTER START -->
       <?php
       include('include/footer.php');
       ?>
       <!-- FOOTER END -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="<?php echo base_url();?>media/assets/images/logo-light.png" width="155" alt="" /></a>
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