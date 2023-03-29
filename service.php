<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo/favicon.png">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
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
    <div class="inner-pg-banner servic-pg-banner">
        <div class="container">
            <div class="inner-pg-breadcrumb">
                <h2 class="head">Services</h2>
                <div>
                    <a href="index.html" class="hp-lnk">Services</a>
                    <span class="divider">/</span>
                    <a href="#" class="active-lnk">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- inneer pg banner end-->


    <!-- service-section -->

    <div class="service-pg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="service-card-pg" data-aos="fade-up">
                        <h3 class="head">DESIGN</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum doloremque consequatur mollitia
                            officiis tempore
                            amet corporis debitis odit ab quas sequi ut, itaque magni hic architecto enim, recusandae
                            maiores quis?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="service-card-pg consulting-bg" data-aos="fade-up">
                        <h3 class="head">CONSULTING</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum doloremque consequatur mollitia
                            officiis tempore
                            amet corporis debitis odit ab quas sequi ut, itaque magni hic architecto enim, recusandae
                            maiores quis?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="service-card-pg supervision-bg" data-aos="fade-up">
                        <h3 class="head">SUPERVISION</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum doloremque consequatur mollitia
                            officiis tempore
                            amet corporis debitis odit ab quas sequi ut, itaque magni hic architecto enim, recusandae
                            maiores quis?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="service-card-pg estimation-bg" data-aos="fade-up">
                        <h3 class="head">ESTIMATION</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum doloremque consequatur mollitia
                            officiis tempore
                            amet corporis debitis odit ab quas sequi ut, itaque magni hic architecto enim, recusandae
                            maiores quis?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service-section end-->


<!-- footer -->
    <?php include 'inc/footer.php'; ?>
<!-- footer end-->


    <script>
        document.querySelectorAll(".service-pg-nav-link").forEach((item) => item.classList.add("active"))
    </script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- paralalax -->
    <script src="assets/js/paralx.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- smooth scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>