<!-- Topbar Start 
 -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" style="height: 45px;">
        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
                <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+91 99528 90651</a>
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

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <img src="img/physioSchool_logo.png" alt="Logo" class="Logo" id="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);
                
                if ($current_page == 'index.php') {
                    echo '<a href="index.php" class="nav-item nav-link active">Home</a>';
                } else {
                    echo '<a href="index.php" class="nav-item nav-link">Home</a>';
                }

                if ($current_page == 'about.php') {
                    echo '<a href="about.php" class="nav-item nav-link active">About</a>';
                } else {
                    echo '<a href="about.php" class="nav-item nav-link">About</a>';
                }

                if ($current_page == 'service.php') {
                    echo '<a href="service.php" class="nav-item nav-link active">Services</a>';
                } else {
                    echo '<a href="service.php" class="nav-item nav-link">Services</a>';
                }

                echo '<div class="nav-item dropdown">';
                echo '<a href="#" class="nav-link dropdown-toggle';
                if (strpos($current_page, 'pages') !== false) {
                    echo ' active';
                }
                echo '" data-bs-toggle="dropdown">Pages</a>';
                echo '<div class="dropdown-menu m-0">';
                
                if ($current_page == 'appointment.php') {
                    echo '<a href="appointment.php" class="dropdown-item active">Appointment</a>';
                } else {
                    echo '<a href="appointment.php" class="dropdown-item">Appointment</a>';
                }

                if ($current_page == 'feature.php') {
                    echo '<a href="feature.php" class="dropdown-item active">Features</a>';
                } else {
                    echo '<a href="feature.php" class="dropdown-item">Features</a>';
                }

                if ($current_page == 'blog.php') {
                    echo '<a href="blog.php" class="dropdown-item active">Our Blog</a>';
                } else {
                    echo '<a href="blog.php" class="dropdown-item">Our Blog</a>';
                }

                if ($current_page == 'team.php') {
                    echo '<a href="team.php" class="dropdown-item active">Our Team</a>';
                } else {
                    echo '<a href="team.php" class="dropdown-item">Our Team</a>';
                }

                if ($current_page == 'testimonial.php') {
                    echo '<a href="testimonial.php" class="dropdown-item active">Testimonial</a>';
                } else {
                    echo '<a href="testimonial.php" class="dropdown-item">Testimonial</a>';
                }
                echo '</div>';
                echo '</div>';

                if ($current_page == 'contact.php') {
                    echo '<a href="contact.php" class="nav-item nav-link active">Contact Us</a>';
                } else {
                    echo '<a href="contact.php" class="nav-item nav-link">Contact Us</a>';
                }
                ?>
            </div>
            <a href="appointment.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a>
        </div>
    </nav>
    <style>
        .Logo{
            height:200px;
            width:175px;
        }
    </style>
        
</div>


 