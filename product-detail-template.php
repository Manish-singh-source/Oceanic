<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
    :root {
        --ocean-1: #031b38;
        --ocean-2: #0a4f7a;
        --ocean-3: #0db3c9;
        --sand: #f4f9ff;
        --text-deep: #072746;
    }

    .ocean-page {
        background: radial-gradient(circle at 90% 5%, rgba(13, 179, 201, 0.24), transparent 40%), linear-gradient(180deg, #eef8ff 0%, #f7fbff 40%, #ffffff 100%);
        font-family: inherit;
    }

    .ocean-page h1,
    .ocean-page h2,
    .ocean-page h3,
    .ocean-page h4,
    .ocean-page p,
    .ocean-page a,
    .ocean-page span,
    .ocean-page li,
    .ocean-page input,
    .ocean-page select,
    .ocean-page textarea,
    .ocean-page button {
        font-family: inherit;
    }

    .ocean-hero {
        position: relative;
        overflow: hidden;
        padding: 170px 0 90px;
        background: linear-gradient(199deg, rgba(3, 27, 56, 0.96) 0%, rgba(10, 79, 122, 0.92) 56%, rgba(13, 179, 201, 0.86) 100%);
    }

    .hero-wrap {
        position: relative;
        z-index: 2;
    }

    .hero-wrap h1 {
        color: #fff;
        font-size: 52px;
        line-height: 1.1;
        margin-bottom: 14px;
    }

    .hero-wrap p {
        color: rgba(255, 255, 255, 0.92);
    }

    .hero-cta {
        margin-top: 20px;
    }

    .hero-product-box {
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 24px;
        backdrop-filter: blur(8px);
        padding: 20px;
    }

    .hero-product-box img {
        width: 100%;
        max-height: 260px;
        object-fit: contain;
    }

    .ocean-section {
        padding: 90px 0 0;
    }

    .content-card {
        background: #fff;
        border: 1px solid #e2edf7;
        border-radius: 20px;
        box-shadow: 0 18px 42px rgba(6, 34, 65, 0.08);
        padding: 30px;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .feature-pill {
        background: var(--sand);
        border: 1px solid #d8e9f7;
        border-radius: 12px;
        color: #15456b;
        padding: 12px;
        font-weight: 600;
        font-size: 14px;
    }

    .description-list {
        display: grid;
        gap: 10px;
    }

    .description-list p {
        margin: 0;
        color: #2a5b82;
    }

    .application-list,
    .advantage-list {
        margin: 0;
        padding-left: 20px;
        color: #2a5b82;
    }

    .application-list li + li,
    .advantage-list li + li {
        margin-top: 8px;
    }

    .spec-table {
        width: 100%;
        border-collapse: collapse;
    }

    .spec-table th,
    .spec-table td {
        padding: 12px 8px;
        border-bottom: 1px solid #eaf1f8;
        text-align: left;
        vertical-align: top;
    }

    .spec-table th {
        width: 36%;
        color: #144569;
    }

    .step-list {
        display: grid;
        gap: 12px;
    }

    .step-item {
        border-left: 4px solid #0d83ae;
        background: #f5fbff;
        padding: 12px 14px;
        border-radius: 10px;
    }

    .step-item strong {
        color: #0b3e63;
    }

    .step-item p {
        margin: 6px 0 0;
        color: #305d7e;
    }

    .inquiry-form input,
    .inquiry-form textarea,
    .inquiry-form select {
        width: 100%;
        border: 1px solid #cfdeeb;
        border-radius: 10px;
        padding: 12px 14px;
        color: #11375c;
    }

    .inquiry-form textarea {
        min-height: 140px;
    }

    @media (max-width: 991px) {
        .ocean-hero {
            padding: 150px 0 80px;
        }

        .hero-wrap h1 {
            font-size: 38px;
        }

    }

    @media (max-width: 767px) {
        .hero-wrap h1 {
            font-size: 30px;
        }

        .content-card {
            padding: 22px;
        }

        .feature-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="ocean-page">
    <section class="ocean-hero">
        <div class="container hero-wrap">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <span class="product-tag"><?php echo htmlspecialchars($product['category']); ?></span>
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                    <p><?php echo htmlspecialchars($product['description']); ?></p>
                    <div class="hero-cta">
                        <a href="#inquiry-section" class="vl-btn3">Inquiry Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-product-box">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ocean-section">
        <div class="container">
            <div class="content-card">
                <h3>Detailed Description</h3>
                <div class="space16"></div>
                <div class="description-list">
                    <?php foreach ($product['details'] as $detail): ?>
                        <p><?php echo htmlspecialchars($detail); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ocean-section">
        <div class="container">
            <div class="content-card">
                <h3>Key Features</h3>
                <div class="space16"></div>
                <div class="feature-grid">
                    <?php foreach ($product['features'] as $feature): ?>
                        <div class="feature-pill"><i class="fa-solid fa-circle-check"></i> <?php echo htmlspecialchars($feature); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ocean-section">
        <div class="container">
            <div class="content-card">
                <h3>Applications</h3>
                <div class="space12"></div>
                <ul class="application-list">
                    <?php foreach ($product['applications'] as $application): ?>
                        <li><?php echo htmlspecialchars($application); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<!-- 
    <section class="ocean-section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="content-card h-100">
                        <h3>Technical Specifications</h3>
                        <div class="space12"></div>
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
                <div class="col-lg-6">
                    <div class="content-card h-100">
                        <h3>Application Flow</h3>
                        <div class="space12"></div>
                        <div class="step-list">
                            <?php foreach ($applicationSteps as $step => $desc): ?>
                                <div class="step-item">
                                    <strong><?php echo htmlspecialchars($step); ?></strong>
                                    <p><?php echo htmlspecialchars($desc); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php if (!empty($product['speciality'])): ?>
        <section class="ocean-section">
            <div class="container">
                <div class="content-card">
                    <h3><?php echo htmlspecialchars($product['speciality']['title']); ?></h3>
                    <div class="space12"></div>
                    <?php foreach ($product['speciality']['description'] as $specialityText): ?>
                        <p><?php echo htmlspecialchars($specialityText); ?></p>
                    <?php endforeach; ?>
                    <div class="space12"></div>
                    <h4>Key Advantages</h4>
                    <div class="space8"></div>
                    <ul class="advantage-list">
                        <?php foreach ($product['speciality']['advantages'] as $advantage): ?>
                            <li><?php echo htmlspecialchars($advantage); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="ocean-section" id="inquiry-section" style="padding-bottom:90px;">
        <div class="container">
            <div class="content-card">
                <h3>Inquiry Form</h3>
                <div class="space12"></div>
                <?php if (isset($_GET['status'])): ?>
                    <div style="margin-bottom:16px;padding:12px;border-radius:6px;background:#ffffff;">
                        <?php if ($_GET['status'] === 'success'): ?>
                            <p style="margin:0;color:#0a7a26;">Thank you! Your inquiry has been sent successfully.</p>
                        <?php elseif ($_GET['status'] === 'validation_error'): ?>
                            <p style="margin:0;color:#b94a48;">Please fill all required fields with valid details.</p>
                        <?php elseif ($_GET['status'] === 'mail_error'): ?>
                            <p style="margin:0;color:#b94a48;">Unable to send email right now. Please try again later.</p>
                        <?php elseif ($_GET['status'] === 'config_error'): ?>
                            <p style="margin:0;color:#b94a48;">Email setup is incomplete. Please contact the administrator.</p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <form class="inquiry-form" action="send-product-inquiry.php" method="post">
                    <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ?? ''); ?>">
                    <div class="row gy-3">
                        <div class="col-md-6"><input type="text" name="full_name" placeholder="Full Name*" required></div>
                        <div class="col-md-6"><input type="tel" name="contact_number" placeholder="Phone Number*" required></div>
                        <div class="col-md-6"><input type="email" name="email_id" placeholder="Email Address*" required></div>
                        <div class="col-md-6">
                            <select name="product_name">
                                <option value="<?php echo htmlspecialchars($product['name']); ?>"><?php echo htmlspecialchars($product['name']); ?></option>
                            </select>
                        </div>
                        <div class="col-12"><input type="text" name="type_liter" placeholder="Required Quantity / Type*" required></div>
                        <div class="col-12"><textarea name="message" placeholder="Write your requirement..." required></textarea></div>
                        <div class="col-12">
                            <div class="btn_area3">
                                <button type="submit" class="vl-btn3">Send Inquiry</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
