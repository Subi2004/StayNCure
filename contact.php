<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>StayNCure</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        Spinner End -->


         <!-- Topbar Start 
         <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+919952890651</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>lithishshiva@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/profile.php?id=61561008083910" class="btn btn-light btn-square border rounded-circle nav-fill me-3" _blank><i class="fab fa-facebook-f"> </i></a>
                        <a href="https://www.instagram.com/stayncurephysioschool/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href=" https://www.youtube.com/@stayncurephysioschool" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-youtube"> </i></a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <?php
        include "head.php";
?>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style mb-4">
                        <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
                    </div>
                    <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 align-items-center">
                <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
    <h2 class="display-5 text-white mb-2">Get in Touch</h2>
    <p class="mb-4 text-white">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-dark fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
    <form action="connect1.php" method="post">
        <div class="row g-3">
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-transparent border border-white" id="name" placeholder="Your Name" name="name" required>
                    <label for="name">Your Name</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="email" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email" name="email" required>
                    <label for="email">Your Email</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="tel" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone" name="phone" required>
                    <label for="phone">Your Phone</label>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="form-floating">
                    <input type="text" class="form-control bg-transparent border border-white" id="project" placeholder="Query" name="query" required>
                    <label for="project">Your Query</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject" name="subject" required>
                    <label for="subject">Subject</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="message" name="message" style="height: 160px" required></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-light text-primary w-100 py-3">Send Message</button>
            </div>
        </div>
    </form>
</div>

                    <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-transparent rounded">
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Addresses</h4>
                                <p class="mb-0 text-white">Anbalaya campus, Thirupathi Nagar, Sellamanthadi, near G.T.N college, Dindigul-624005</p>
                            </div>
                            <div class="d-flex flex-column align-items-center text-center mb-4">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Mobile</h4>
                                <p class="mb-0 text-white">+91 99528 90651</p>
                                <!--<p class="mb-0 text-white">+012 345 67890</p>-->
                            </div>
                           
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                                <h4 class="text-dark">Email</h4>
                                <p class="mb-0 text-white">lithishshiva@gmail.com</p>
                                <!--<p class="mb-0 text-white">info@example.com</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" 
                            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.3287703925366!2d77.99361037479922!3d10.395440989731085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa010b409fc827%3A0xadc25caa98bd7d9!2sGTN%20College%20Admin%20block!5e0!3m2!1sen!2sin!4v1718617755416!5m2!1sen!2sin" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php 
        include "footer.php";?>
        
    </body>

</html>