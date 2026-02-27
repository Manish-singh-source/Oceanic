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
            <div class="col-lg-7">
                <div class="quote-form-card">
                    <h2>Get Your Quote</h2>
                    <p>Please fill all details below.</p>
                    <form action="#" method="post">
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
                                <select id="product_name" name="product_name" required>
                                    <option value="">Select Product</option>
                                    <option>Oceanic Premium Antifouling Paint</option>
                                    <option>Oceanic Premium Antifouling Paint Fibre Coat Plus</option>
                                    <option>Oceanic Sea Shield Antifouling</option>
                                    <option>Thermochromic + Antimicrobial QD Enamel</option>
                                    <option>Self Polishing + Heat Reflective Epoxy Coatings</option>
                                    <option>Oceanic Multipurpose Primer</option>
                                    <option>Oceanic Ultra Protek</option>
                                    <option>Oceanic Ultra Plus</option>
                                    <option>Shine Interior Emulsion</option>
                                    <option>Exterior Emulsion</option>
                                    <option>Oceanic Acrylic Distemper</option>
                                    <option>Oceanic Base Coat Primer</option>
                                    <option>Oceanic Texture</option>
                                </select>
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
                                <button type="submit" class="vl-btn3">Submit Request <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
