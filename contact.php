<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Sentinex Need India Organization</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="fine/bglogo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <div class="preloader"></div><!-- /.preloader -->

    <?php include "include/header.php" ?>

    <section class="inner-banner" style="background-image: url(fine/contactbanner.png);">
        <div class="container">
            <div class="title pull-left">
                <!-- <h2>Contact Page</h2> -->
            </div><!-- /.title pull-left -->
            <div class="breadcumb pull-right">
                <!-- <a href="index.php">Home</a>
            <span class="sep">/</span>
            <span class="page-name">Contact Page</span> -->
            </div><!-- /.breadcumb pull-right -->
        </div><!-- /.contianer -->
    </section><!-- /.inner-banner -->

    <section class="contact-info-style-two sec-pad pb0">

        <div class="sec-title text-center">
            <div class="line"></div><!-- /.line -->
            <h2>How We Can <span>Help</span></h2>
            <p>At Sentinex Need India we provide top-level protection through comprehensive security services,
                including armed and unarmed guards, event security, and mobile patrols. <br> Additionally, we
                support economic growth by offering market-based skill training, micro-finance, and financial
                inclusion programs. Our customized solutions are designed to meet the unique needs of each client,
                empowering communities and businesses to thrive while ensuring safety and sustainable development
                across India.</p>
        </div><!-- /.sec-title -->
        <!-- <div class="map-box">
                <img src="fine/ex.png" alt="">

                </div> -->



        <section id="contact-form" class="contact-form-style-two gray-bg sec-pad">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="line"></div><!-- /.line -->
                    <h2>Ready To Request a <span>Quote?</span></h2>
                    <p>Ready to secure your future? At Sentinex Need India, we offer top-level protection and
                        tailored
                        solutions to meet your needs. Request a quote today and take the first step towards a safer,
                        more
                        prosperous tomorrow.</p>
                </div><!-- /.sec-title -->
                <div class="contact-form-style-two-content">
                    <form action="contactFormBackend.php" method="post" class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <i class="fa fa-user"></i>
                                <input type="text" placeholder="Name*" name="name" required />

                            </div>
                            <div class="form-box">
                                <i class="fa fa-phone-square"></i>
                                <input type="text" placeholder="Contact No.*" name="contact" required
                                    pattern="^\+?[1-9]\d{1,14}$"
                                    title="Please enter a valid phone number. It should start with a '+' followed by the country code and then the number, or just the number without a '+'." />

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <i class="fa fa-envelope"></i>
                                <input type="email" id="email" placeholder="Email*" name="email" required
                                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                                    title="Please enter a valid email address." />
                            </div><!-- /.form-box -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">


                                <select class="selectpicker" name="services" required>
                                    <option value="">Service Type</option>
                                    <option value="Private Security">Private Security</option>
                                    <option value="Transport Security">Transport Security</option>
                                    <option value="Home Security">Home Security</option>

                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                        <!-- <div class="col-md-6">
                        <div class="form-box">
                            <i class="fa fa-user"></i>
                            <select class="selectpicker" name="services" required>
                                <option value="">Service Type</option>
                                <option value="Private Security">Private Security</option>
                                <option value="Transport Security">Transport Security</option>
                                <option value="Home Security">Home Security</option>

                            </select>
                        </div> 
                    </div> -->
                        <div class="col-md-12">
                            <div class="form-box">
                                <i class="fa fa-pencil-square"></i>
                                <textarea placeholder="Your Words" name="message" required></textarea>
                            </div><!-- /.form-box -->
                            <!-- <button class="thm-btn" type="submit">Submit</button> -->
                            <button class="thm-btn" type="submit" name="submit_form">Submit</button>
                        </div><!-- /.col-md-12 -->
                    </form>
                </div><!-- /.contact-form-style-one-content -->
            </div><!-- /.container -->
        </section><!-- /.contact-form-style-two -->

        <section class="social-branding">
            <div class="container">
                <ul class="social list-inline">
                    <li><a href="https://www.facebook.com/people/Sentinexneed-Indiaorganization/pfbid0ssgJna5pukQHdwg1snuTHgW9cebA4H5CEHFPWPeT9xoF879GgZPkCydmb8SKU3xXl/"
                            class="fa fa-facebook"></a></li><!--
            -->
                    <li><a href="https://x.com/sentinexneedInd" class="fa fa-twitter"></a></li><!--
            -->
                    <li><a href="https://www.instagram.com/sentinexneedindia12?igsh=MWRtYmxpb3IxbTNzOA=="
                            class="fa fa-instagram"></a></li><!--
            -->
                    <li><a href="https://in.pinterest.com/indiaorganisation/" class="fa fa-pinterest"></a></li><!--
            -->
                    <!-- <li><a href="#" class="fa fa-skype"></a></li> -->
                </ul><!-- /.social list-inline -->
            </div><!-- /.container -->
        </section><!-- /.social-branding -->

        <?php include "include/footer.php" ?>