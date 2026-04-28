<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
.quote-hero {
    background-image: linear-gradient(rgba(0, 34, 68, 0.7), rgba(0, 34, 68, 0.7)), url('assets/img/hero/hero-9-thumb2.png');
    background-size: cover;
    background-position: center;
    padding: 130px 0 90px;
}

.quote-hero h1 {
    color: #fff;
    font-size: 46px;
    line-height: 1.2;
    margin-bottom: 16px;
}

.quote-hero p,
.quote-hero ul li a {
    color: #fff;
}

.quote-hero ul {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
}

.quote-form-section {
    padding: 100px 0;
}

.quote-image-wrap {
    height: 100%;
    border-radius: 16px;
    overflow: hidden;
}

.quote-image-wrap img {
    width: 100%;
    height: 100%;
    min-height: 620px;
    object-fit: cover;
}

.quote-form-card {
    background: #f5f8fb;
    border-radius: 16px;
    padding: 36px;
}

.quote-form-card h2 {
    font-size: 34px;
    margin-bottom: 8px;
}

.quote-form-card p {
    margin-bottom: 26px;
}

.quote-form-card label {
    font-size: 16px;
    font-weight: 600;
    color: #0a2540;
    margin-bottom: 10px;
    display: block;
}

.quote-form-card input,
.quote-form-card select,
.quote-form-card textarea {
    width: 100%;
    border: 1px solid #d7e2ee;
    border-radius: 8px;
    padding: 13px 16px;
    margin-bottom: 20px;
    background: #fff;
}

.quote-form-card input,
.quote-form-card select {
    height: 52px;
    box-sizing: border-box;
    font-size: 16px;
}

.quote-form-card select {
    padding-top: 0;
    padding-bottom: 0;
}

.quote-form-card .nice-select {
    width: 100%;
    height: 52px;
    line-height: 50px;
    border: 1px solid #d7e2ee;
    border-radius: 8px;
    padding: 0 40px 0 16px;
    margin-bottom: 20px;
    background: #fff;
}

.quote-form-card .nice-select .current {
    display: block;
    line-height: 50px;
    font-size: 16px;
    color: #0a2540;
}

.quote-form-card .nice-select:after {
    right: 16px;
}

.quote-form-card textarea {
    min-height: 140px;
    resize: vertical;
}

@media (max-width: 991px) {
    .quote-hero {
        padding: 100px 0 70px;
    }

    .quote-hero h1 {
        font-size: 34px;
    }

    .quote-form-section {
        padding: 70px 0;
    }

    .quote-image-wrap {
        margin-bottom: 30px;
    }

    .quote-image-wrap img {
        min-height: 300px;
    }
}
</style>

<div class="quote-hero">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h1>Request A Quote</h1>
                <p>Share your requirement and our team will get back with the right paint solution.</p>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt="Arrow"></li>
                    <li><a href="request-quote.php">Request A Quote</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="quote-form-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-5">
                <div class="quote-image-wrap">
                    <img src="assets/img/hero/hero-9-thumb3.png" alt="Oceanic Paint Solutions">
                </div>
            </div>
            <div class="col-lg-7 mt-4 mt-md-0">
                <div class="quote-form-card">
                    <h2>Get Your Quote</h2>
                    <p>Please fill all details below.</p>
                    <?php if (isset($_GET['status'])): ?>
                        <div style="margin-bottom:16px;padding:12px;border-radius:6px;background:#ffffff;">
                            <?php if ($_GET['status'] === 'success'): ?>
                                <p style="margin:0;color:#0a7a26;">Thank you! Your quote request has been sent successfully.</p>
                            <?php elseif ($_GET['status'] === 'validation_error'): ?>
                                <p style="margin:0;color:#b94a48;">Please fill all required fields with valid details.</p>
                            <?php elseif ($_GET['status'] === 'mail_error'): ?>
                                <p style="margin:0;color:#b94a48;">Unable to send email right now. Please try again later.</p>
                            <?php elseif ($_GET['status'] === 'config_error'): ?>
                                <p style="margin:0;color:#b94a48;">Email setup is incomplete. Please contact the administrator.</p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <form id="quoteForm" action="send-request-quote.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="full_name">Full Name</label>
                                <input type="text" id="full_name" name="full_name" placeholder="Enter Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email_id">Email Id</label>
                                <input type="email" id="email_id" name="email_id" placeholder="Enter Email Id" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact_number">Contact Number</label>
                                <input type="tel" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="product_name">Product</label>
                                <input type="text" id="product_name" name="product_name" placeholder="Enter Product Name" required>
                            </div>
                            <div class="col-12">
                                <label for="type_liter">Type / Liter</label>
                                <input type="text" id="type_liter" name="type_liter" placeholder="Enter Type / Liter" required>
                            </div>
                            <div class="col-12">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Write your message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button id="quoteSubmitBtn" type="submit" class="vl-btn3">Submit Request <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('quoteForm');
    var submitBtn = document.getElementById('quoteSubmitBtn');

    if (!form || !submitBtn) {
        return;
    }

    form.addEventListener('submit', function () {
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




