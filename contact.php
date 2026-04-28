<?php include 'header.php'; ?>
<style>
    .contact_inner-box {
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .contact_inner-content {
        flex-grow: 1;
    }

    /* Extra Small Devices (phones) */
    @media (max-width: 575px) {}

    /* Small Devices (phones landscape / small tablets) */
    @media (min-width: 576px) and (max-width: 767px) {
        .contactinner_from {
            position: relative;
            width: 100%;
            top: 0;
        }

        .contact3-info-form {
            margin-top: 40px;
        }

        .mb-20_brk {
            margin-bottom: 20px;
        }
    }

    /* Medium Devices (tablets) */
    @media (min-width: 768px) and (max-width: 991px) {}

    /* Large Devices (laptops) */
    @media (min-width: 992px) and (max-width: 1199px) {}

    /* Extra Large Devices (desktops) */
    @media (min-width: 1200px) and (max-width: 1399px) {}

    /* XXL Devices (large screens / TVs) */
    @media (min-width: 1400px) {}
</style>
<?php include 'navbar.php'; ?>


<!--===== HERO AREA STARTS =======-->
<div class="vl-hero2-area aboutus_hero parallaxie" style="background-image:linear-gradient(rgba(0, 34, 68, 0.55), rgba(0, 34, 68, 0.55)), url(https://productsandsolutions.pttgcgroup.com/images/uploads/products/banner-65781a6f8ca09.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="aboutus_hero_title">
                    <h2>Contact Us </h2>
                    <div class="space26"></div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt=""></li>
                        <li><a class="aboutus_titlefix" href="contact.php">Contact Us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->
<!--===== CONTACT DETAILS AREA STRAT =======-->
<div class="vl-contact_inner-box sp1">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 mb-3">
                <div class="contact_inner-box mb-20_brk">
                    <div class="contact_inner_logo">
                        <img src="assets/img/contact/contact_innerbox-icon(1).svg" alt="">
                    </div>
                    <div class="space28"></div>
                    <div class="contact_inner-content">
                        <h3>Office Number</h3>
                        <div class="space20"></div>
                        <ul>
                            <li class="number_tags"><a href="tel:+917900104615">+91 79001 04615</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 mb-3">
                <div class="contact_inner-box">
                    <div class="contact_inner_logo">
                        <img src="assets/img/contact/contact_innerbox-icon(2).svg" alt="">
                    </div>
                    <div class="space28"></div>
                    <div class="contact_inner-content">
                        <h3>Our Location</h3>
                        <div class="space20"></div>
                        <ul>
                            <li class="number_tags"><a>J-11 Gurudev Industrial Compound <br> Sonale - 421302</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 mb-3">
                <div class="contact_inner-box">
                    <div class="contact_inner_logo">
                        <img src="assets/img/contact/contact_innerbox-icon(3).svg" alt="">
                    </div>
                    <div class="space28"></div>
                    <div class="contact_inner-content">
                        <h3>Our Email</h3>
                        <div class="space20"></div>
                        <ul>
                            <li class="number_tags"><a href="mailto:vkpaints78@gmail.com">vkpaints78@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CONTACT DETAILS AREA END =======-->




<!-- MAPS -->
<div class="vl-contact_inner-map-area sp1">
    <div class="vl-contact_inner-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3765.8500706234086!2d73.09040088!3d19.28888515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7977c60c4295d%3A0x150cf942842fe676!2sVINTAGE%20INDIA!5e0!3m2!1sen!2sin!4v1777357014655!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="vl-contact_inner-from">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6"></div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <form id="contactForm" class="contact3-info-form contactinner_from xs-mt20" action="send-contact.php" method="post">
                            <h2 class="contactinr_fromtitle">Contact Info</h2>
                            <?php if (isset($_GET['status'])): ?>
                                <div style="margin-bottom:16px;padding:12px;border-radius:6px;background:#f5f5f5;">
                                    <?php if ($_GET['status'] === 'success'): ?>
                                        <p style="margin:0;color:#0a7a26;">Thank you! Your message has been sent successfully.</p>
                                    <?php elseif ($_GET['status'] === 'validation_error'): ?>
                                        <p style="margin:0;color:#b94a48;">Please fill all required fields with valid details.</p>
                                    <?php elseif ($_GET['status'] === 'mail_error'): ?>
                                        <p style="margin:0;color:#b94a48;">Unable to send email right now. Please try again later.</p>
                                    <?php elseif ($_GET['status'] === 'config_error'): ?>
                                        <p style="margin:0;color:#b94a48;">Email setup is incomplete. Please contact the administrator.</p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="space32"></div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-20_brk">
                                    <h3 class="contact3-from-title">First Name*</h3>
                                    <div class="space16"></div>
                                    <input type="text" name="first_name" placeholder="First Name" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <h3 class="contact3-from-title">Phone Number*</h3>
                                    <div class="space16"></div>
                                    <input type="text" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="space32"></div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-20_brk">
                                    <h3 class="contact3-from-title">Email Address*</h3>
                                    <div class="space16"></div>
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <h3 class="contact3-from-title">Subject*</h3>
                                    <div class="space16"></div>
                                    <input type="text" name="subject" required>
                                </div>
                                <div class="space22"></div>
                                <div class="col-xl-12">
                                    <h3 class="contact3-from-title">Message*</h3>
                                    <div class="space16"></div>
                                    <textarea name="message" id="message" placeholder="Type your message..." required></textarea>
                                </div>
                                <div class="space32"></div>
                                <div class="btn_area3">
                                    <button id="contactSubmitBtn" type="submit" class="vl-btn3">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MAPS -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactForm');
        var submitBtn = document.getElementById('contactSubmitBtn');

        if (!form || !submitBtn) {
            return;
        }

        form.addEventListener('submit', function() {
            if (submitBtn.disabled) {
                return false;
            }

            submitBtn.disabled = true;
            submitBtn.textContent = 'Loading...';
            submitBtn.style.opacity = '0.7';
            submitBtn.style.cursor = 'not-allowed';
        });
    });
</script>










<?php include 'footer.php'; ?>
