<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
.product-detail-hero {
    background-image: linear-gradient(120deg, rgba(4, 30, 66, 0.9), rgba(9, 80, 125, 0.82)), url('assets/img/hero/hero-hm2-bg(1).webp');
    background-size: cover;
    background-position: center;
    padding: 170px 0 90px;
}

.product-detail-hero h2,
.product-detail-hero ul li a {
    color: #fff;
}

.product-main-card {
    border: 1px solid #e9edf4;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 16px 35px rgba(7, 21, 49, 0.08);
    overflow: hidden;
}

.product-main-image {
    background: linear-gradient(145deg, #f2f8ff, #f9fbff);
    padding: 30px;
    height: 100%;
}

.product-main-image img {
    width: 100%;
    max-height: 380px;
    object-fit: contain;
}

.product-main-content {
    padding: 34px 30px;
}

.product-tag {
    display: inline-flex;
    background: #ebf5ff;
    border: 1px solid #bfdfff;
    color: #0c4f88;
    font-size: 14px;
    font-weight: 600;
    border-radius: 999px;
    padding: 8px 14px;
}

.product-main-content h3 {
    font-size: 34px;
    line-height: 1.25;
    color: #042142;
}

.product-main-content p {
    color: #2f4f70;
}

.feature-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.feature-list li {
    display: flex;
    gap: 10px;
    color: #1f4366;
}

.feature-list li + li {
    margin-top: 10px;
}

.feature-list i {
    color: #0d5f9c;
    margin-top: 5px;
}

.video-card,
.spec-card,
.method-card,
.download-card,
.inquiry-card {
    border: 1px solid #e8edf4;
    border-radius: 18px;
    padding: 28px 24px;
    background: #fff;
    box-shadow: 0 12px 30px rgba(6, 18, 42, 0.05);
}

.video-frame {
    border-radius: 12px;
    overflow: hidden;
    line-height: 0;
}

.video-frame iframe {
    width: 100%;
    height: 420px;
    border: 0;
}

.spec-table {
    width: 100%;
    border-collapse: collapse;
}

.spec-table th,
.spec-table td {
    border-bottom: 1px solid #edf1f5;
    padding: 14px 8px;
    text-align: left;
    vertical-align: top;
}

.spec-table th {
    width: 34%;
    color: #123a60;
    font-weight: 600;
}

.method-step {
    border: 1px solid #ebf0f5;
    border-radius: 12px;
    padding: 16px;
    height: 100%;
}

.method-step h4 {
    font-size: 18px;
    color: #0d395f;
}

.method-step p {
    margin: 0;
    color: #2a4d70;
}

.download-row {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
}

.download-row a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: 1px solid #b6d5f0;
    color: #0c538a;
    font-weight: 600;
    border-radius: 10px;
    padding: 11px 14px;
}

.download-row a:hover {
    background: #0c538a;
    color: #fff;
    border-color: #0c538a;
}

.inquiry-card form input,
.inquiry-card form textarea,
.inquiry-card form select {
    width: 100%;
    border: 1px solid #d8e0ea;
    border-radius: 10px;
    padding: 12px 14px;
    font-size: 15px;
    color: #1f3a56;
}

.inquiry-card form textarea {
    min-height: 150px;
}

@media (max-width: 991px) {
    .product-detail-hero {
        padding: 145px 0 80px;
    }

    .product-main-content h3 {
        font-size: 30px;
    }

    .video-frame iframe {
        height: 280px;
    }
}

@media (max-width: 767px) {
    .product-main-content h3 {
        font-size: 24px;
    }

    .video-frame iframe {
        height: 220px;
    }
}
</style>

<div class="product-detail-hero">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="aboutus_hero_title">
                    <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                    <div class="space26"></div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt=""></li>
                        <li><a href="products.php">Products</a></li>
                        <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt=""></li>
                        <li><a class="aboutus_titlefix" href="#"><?php echo htmlspecialchars($product['name']); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sp1">
    <div class="container">
        <div class="product-main-card">
            <div class="row g-0">
                <div class="col-xl-5 col-lg-5">
                    <div class="product-main-image">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="product-main-content">
                        <span class="product-tag"><?php echo htmlspecialchars($product['category']); ?></span>
                        <div class="space16"></div>
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <div class="space16"></div>
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <div class="space24"></div>
                        <h4>Features</h4>
                        <div class="space12"></div>
                        <ul class="feature-list">
                            <?php foreach ($product['features'] as $feature): ?>
                                <li><i class="fa-solid fa-circle-check"></i><span><?php echo htmlspecialchars($feature); ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sp1">
    <div class="container">
        <div class="video-card">
            <h3>Product Video</h3>
            <div class="space18"></div>
            <div class="video-frame">
                <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" title="Oceanic Product Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section class="sp1">
    <div class="container">
        <div class="row align-items-stretch gy-4">
            <div class="col-xl-6 col-lg-6">
                <div class="spec-card h-100">
                    <h3>Technical Specifications</h3>
                    <div class="space16"></div>
                    <table class="spec-table">
                        <tbody>
                            <?php foreach ($defaultSpecs as $label => $value): ?>
                                <tr>
                                    <th><?php echo htmlspecialchars($label); ?></th>
                                    <td><?php echo htmlspecialchars($value); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="method-card h-100">
                    <h3>Application Method</h3>
                    <div class="space16"></div>
                    <div class="row gy-3">
                        <?php foreach ($applicationSteps as $step => $desc): ?>
                            <div class="col-xl-12">
                                <div class="method-step">
                                    <h4><?php echo htmlspecialchars($step); ?></h4>
                                    <div class="space8"></div>
                                    <p><?php echo htmlspecialchars($desc); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sp1">
    <div class="container">
        <div class="download-card">
            <h3>Download TDS / Brochure</h3>
            <div class="space16"></div>
            <div class="download-row">
                <a href="assets/V-K-Paints-Industries-Product-Catalogue.pdf" target="_blank"><i class="fa-solid fa-file-arrow-down"></i>Download TDS (PDF)</a>
                <a href="assets/V-K-Paints-Industries-Product-Catalogue.pdf" target="_blank"><i class="fa-solid fa-book"></i>Download Brochure (PDF)</a>
            </div>
        </div>
    </div>
</section>

<section class="sp1">
    <div class="container">
        <div class="inquiry-card">
            <h3>Inquiry Form</h3>
            <div class="space16"></div>
            <form action="#" method="post">
                <div class="row gy-3">
                    <div class="col-xl-6 col-lg-6">
                        <input type="text" name="name" placeholder="Full Name*" required>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <input type="tel" name="phone" placeholder="Phone Number*" required>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <input type="email" name="email" placeholder="Email Address*" required>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <select name="product">
                            <option value="<?php echo htmlspecialchars($product['name']); ?>"><?php echo htmlspecialchars($product['name']); ?></option>
                        </select>
                    </div>
                    <div class="col-xl-12">
                        <textarea name="message" placeholder="Write your requirement..."></textarea>
                    </div>
                    <div class="col-xl-12">
                        <div class="btn_area3">
                            <button type="submit" class="vl-btn3">Send Inquiry</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
