<nav class="navbar navbar-expand-xl navbar-dark sticky-header">
    <div class="container d-flex align-items-center justify-content-lg-between position-relative">
        <a href="index-2.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
            <img src="<?= $logo_png_right_white ?>" alt="logo" class="img-fluid logo-white" />
            <img src="<?= $logo_png_right_black ?>" alt="logo" class="img-fluid logo-color" />
        </a>

        <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
            <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                aria-controls="offcanvasWithBackdrop"></span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php $url_root ?>home" role="button">
                        Home
                    </a>

                </li>
                <li><a href="<?php $url_root ?>services" class="nav-link">Services</a></li>
                <li><a href="<?php $url_root ?>about-us" class="nav-link">About Us</a></li>
                <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Company</a>
                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                        <div class="dropdown-grid rounded-custom width-full">
                            <div class="dropdown-grid-item">
                                <h6 class="drop-heading">Useful Links</h6>
                                <a href="about-us.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                    <div class="drop-title">About Us</div>
                                </a>
                                <a href="contact-us.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-address-book"></i></span>
                                    <div class="drop-title">Contact Us</div>
                                </a>
                                <a href="services.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-code-branch"></i></span>
                                    <div class="drop-title">Services</div>
                                </a>
                                <a href="service-single.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-server"></i></span>
                                    <div class="drop-title">Services Single</div>
                                </a>
                                <a href="blog.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-th-large"></i></span>
                                    <div class="drop-title">Our Latest News</div>
                                </a>
                                <a href="blog-single.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-bars"></i></span>
                                    <div class="drop-title">News Details</div>
                                </a>
                                <a href="career.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-graduation-cap"></i></span>
                                    <div class="drop-title">Career</div>
                                </a>
                                <a href="career-single.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-user-graduate"></i></span>
                                    <div class="drop-title">Career Single</div>
                                </a>
                                <a href="integrations.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-rocket-launch"></i></span>
                                    <div class="drop-title">Integrations</div>
                                </a>
                                <a href="integration-single.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                    <div class="drop-title">Integration Single</div>
                                </a>
                            </div>
                            <div class="dropdown-grid-item radius-right-side bg-light">
                                <h6 class="drop-heading">Utility Pages</h6>
                                <a href="style-guide.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-code-branch"></i></span>
                                    <div class="drop-title">Style Guide</div>
                                </a>
                                <a href="support.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-life-ring"></i></span>
                                    <div class="drop-title">Help Center</div>
                                </a>
                                <a href="support-single.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-headset"></i></span>
                                    <div class="drop-title">Help Details</div>
                                </a>
                                <a href="request-demo.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-laptop-code"></i></span>
                                    <div class="drop-title">Request for Demo</div>
                                </a>
                                <a href="login.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-sign-in"></i></span>
                                    <div class="drop-title">User Login</div>
                                </a>
                                <a href="register.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-user-plus"></i></span>
                                    <div class="drop-title">User SignUp</div>
                                </a>
                                <a href="password-reset.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-trash-undo"></i></span>
                                    <div class="drop-title">Recovery Account</div>
                                </a>
                                <a href="404.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-exclamation-triangle"></i></span>
                                    <div class="drop-title">404 Page</div>
                                </a>
                                <a href="coming-soon.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-clock"></i></span>
                                    <div class="drop-title">Coming Soon</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
            <?php 
            if (isset($_SESSION['logged_in'])) {
                if ($_SESSION['logged_in']== true) {
            ?>
            <a href="<?php $url_root ?>logout"
                class="btn btn-link text-decoration-none me-2"><?= $_SESSION['username']; ?></a>
            <?php
                }
            }else{
            ?>
            <a href="<?php $url_root ?>login" class="btn btn-link text-decoration-none me-2">Sign In</a>
            <a href="<?php $url_root ?>register" class="btn btn-primary">Get Started</a>
            <?php
            }
            ?>
        </div>
        <!--offcanvas menu start-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
            <div class="offcanvas-header d-flex align-items-center mt-4">
                <a href="<?php $url_root ?>" class="d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="<?= $logo_png_right_black ?>" alt="logo" class="img-fluid ps-2" />
                </a>
                <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="far fa-close"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="<?php $url_root ?>" role="button" ">
                            Home
                        </a>
                    </li>
                    <li><a href=" <?php $url_root ?>services" class="nav-link">Services</a>
                    </li>
                    <li><a href="<?php $url_root ?>about-us" class="nav-link">About Us</a></li>
                    <li><a href="<?php $url_root ?>pricing" class="nav-link">Pricing</a></li>

                </ul>
                <div class="action-btns mt-4 ps-3">
                    <?php 
                    if (isset($_SESSION['logged_in'])) {
                        if ($_SESSION['logged_in']== true) {
                     ?>
                    <a href="<?php $url_root ?>logout"
                        class="btn btn-link text-decoration-none me-2"><?= $_SESSION['username']; ?></a>
                    <?php
                    }
                    }else{
                    ?>
                    <a href="<?php $url_root ?>login" class="btn btn-outline-primary me-2">Sign In</a>
                    <a href="<?php $url_root ?>register" class="btn btn-primary">Get Started</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--offcanvas menu end-->
    </div>
</nav>