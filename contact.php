<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo/favicon.png">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <!-- header -->
        <?php include 'inc/header.php'; ?>
    <!-- header end-->


    <!-- inneer pg banner -->
    <div class="inner-pg-banner contact-pg-banner">
        <div class="container">
            <div class="inner-pg-breadcrumb">
                <h2 class="head">Contact Us</h2>
                <div>
                    <a href="index.html" class="hp-lnk">Home</a>
                    <span class="divider">/</span>
                    <a href="#" class="active-lnk">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- inneer pg banner end-->


    <!-- contact detail & form section start -->

    <div class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 order-lg-1 order-md-2 order-2">
                    <div class="contact-detail-box">
                        <h4 class="mb-4">Contact Info</h4>
                        <p class="desc mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                            similique dolore accusantium.</p>
                        <div class="location-dtls mt-md-3">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                            <p class="mb-0">3390 A1 Imam Saud bin Faysal rd, - A1 Malqa Dist.</p>
                            <p class="mb-0">Unit No. 364 (First Floor Office No. 7) <br> Riyadh 133522 - 6363 
                               <br> Saudi Arabia</p>

                            </div>
                        </div>
                        <div class="location-dtls mt-md-2">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <div>
                                <a href="tel:+966114121112">+966 11 412 1112</a>
                                <a href="tel:+966555277882">+966 55 527 7882</a>
                            </div>
                        </div>
                        <div class="location-dtls mt-md-2">
                            <i class="fa-regular fa-envelope"></i>
                            <div>
                                <a href="#">info@hndz@mail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 order-lg-2 order-md-1 order-1 mb-lg-0 mb-md-5 mb-5">
                    <div class="contact-form-box">
                        <h6>Get in touch with us</h6>
                        <h3 class="head black-col mb-md-3 mb-2">Fill the form and send your query</h3>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-textarea">
                                    <textarea rows="4"></textarea>
                                </div>
                            </div>
                            <div>
                                <a href="" class="contact-form-pg">Submit Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact detail & form section end -->


    <!-- map section start -->

    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463880.77862238436!2d46.1986926630948!3d24.72452563031031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1680073285432!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- map section end -->



    <!-- footer -->
        <?php include 'inc/footer.php'; ?>
    <!-- footer end-->



    <script>
        document.getElementById("contact-pg-nav-link").classList.add("active");
    </script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- smooth scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>