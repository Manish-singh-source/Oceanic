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
    background: linear-gradient(
199deg, rgba(3, 27, 56, 0.96) 0%, rgba(10, 79, 122, 0.92) 56%, rgba(13, 179, 201, 0.86) 100%);
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

.video-shell {
    overflow: hidden;
    border-radius: 18px;
    box-shadow: 0 16px 36px rgba(5, 29, 56, 0.18);
    line-height: 0;
}

.video-shell video {
    width: 100%;
    border: 0;
}

.interactive-wrap {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 14px;
}

.interactive-card {
    cursor: pointer;
    border-radius: 14px;
    border: 1px solid #d5e8f8;
    background: #f7fcff;
    padding: 16px;
    transition: all .25s ease;
}

.interactive-card h4 {
    color: #063159;
    font-size: 18px;
    margin-bottom: 6px;
}

.interactive-card p {
    margin: 0;
    color: #2a5b82;
    font-size: 14px;
}

.interactive-card.active,
.interactive-card:hover {
    transform: translateY(-4px);
    border-color: #0d78b5;
    box-shadow: 0 14px 30px rgba(13, 120, 181, 0.2);
    background: linear-gradient(170deg, #0b4e7a, #0d89b3);
}

.interactive-card.active h4,
.interactive-card.active p,
.interactive-card:hover h4,
.interactive-card:hover p {
    color: #fff;
}

.interactive-result {
    margin-top: 16px;
    border: 1px dashed #9ac8e7;
    border-radius: 14px;
    padding: 16px;
    color: var(--text-deep);
    background: #f2faff;
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
    .ocean-hero { padding: 150px 0 80px; }
    .hero-wrap h1 { font-size: 38px; }
    .interactive-wrap { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .video-shell video { height: 320px; }
}

@media (max-width: 767px) {
    .hero-wrap h1 { font-size: 30px; }
    .content-card { padding: 22px; }
    .feature-grid,
    .interactive-wrap { grid-template-columns: 1fr; }
    .video-shell video { height: 220px; }
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
                <h3>Why Captains Prefer This Coating</h3>
                <div class="space16"></div>
                <div class="feature-grid">
                    <?php foreach ($product['features'] as $feature): ?>
                        <div class="feature-pill"><i class="fa-solid fa-water"></i> <?php echo htmlspecialchars($feature); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ocean-section">
        <div class="container">
            <div class="content-card">
                <h3>Live Performance Film</h3>
                <p class="mt-2">Muted autoplay demo runs continuously for a marine-use visual feel.</p>
                <div class="space16"></div>
                <div class="video-shell">
                    <video autoplay muted loop playsinline controlsList="nodownload" preload="auto"><source src="assets/Marine_Antifouling_Paint.mp4" type="video/mp4">Your browser does not support the video tag.</video>
                </div>
            </div>
        </div>
    </section>

    <section class="ocean-section">
        <div class="container">
            <div class="content-card">
                <h3>Performance Explorer</h3>
                <p class="mt-2">Cards par click karke benefits dekhiye.</p>
                <div class="space16"></div>
                <div class="interactive-wrap" id="interactiveCards">
                    <div class="interactive-card active" data-title="Bio-Fouling Resistance" data-detail="Specialized chemistry hull surface par algae, slime aur barnacle adhesion ko minimize karti hai.">
                        <h4>Bio-Shield</h4>
                        <p>Low fouling adhesion</p>
                    </div>
                    <div class="interactive-card" data-title="Fuel Efficiency" data-detail="Cleaner hull drag ko reduce karta hai, jisse vessel ki movement zyada efficient hoti hai.">
                        <h4>Drag Control</h4>
                        <p>Smoother sailing</p>
                    </div>
                    <div class="interactive-card" data-title="Coastal Durability" data-detail="Salt spray aur harsh marine weather ke against coating integrity improve hoti hai.">
                        <h4>Salt Defense</h4>
                        <p>Harsh sea-ready</p>
                    </div>
                    <div class="interactive-card" data-title="Maintenance Window" data-detail="Longer cleaning intervals maintenance planning ko simple aur cost-conscious banate hain.">
                        <h4>Long Interval</h4>
                        <p>Reduced dry-dock load</p>
                    </div>
                </div>
                <div class="interactive-result" id="interactiveResult">
                    <strong>Bio-Fouling Resistance:</strong> Specialized chemistry hull surface par algae, slime aur barnacle adhesion ko minimize karti hai.
                </div>
            </div>
        </div>
    </section>

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
    </section>

    <section class="ocean-section" id="inquiry-section" style="padding-bottom:90px;">
        <div class="container">
            <div class="content-card">
                <h3>Inquiry Form</h3>
                <div class="space12"></div>
                <form class="inquiry-form" action="#" method="post">
                    <div class="row gy-3">
                        <div class="col-md-6"><input type="text" name="name" placeholder="Full Name*" required></div>
                        <div class="col-md-6"><input type="tel" name="phone" placeholder="Phone Number*" required></div>
                        <div class="col-md-6"><input type="email" name="email" placeholder="Email Address*" required></div>
                        <div class="col-md-6">
                            <select name="product">
                                <option value="<?php echo htmlspecialchars($product['name']); ?>"><?php echo htmlspecialchars($product['name']); ?></option>
                            </select>
                        </div>
                        <div class="col-12"><textarea name="message" placeholder="Write your requirement..."></textarea></div>
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

<script>
(function () {
    var cards = document.querySelectorAll('#interactiveCards .interactive-card');
    var result = document.getElementById('interactiveResult');

    cards.forEach(function (card) {
        card.addEventListener('click', function () {
            cards.forEach(function (c) { c.classList.remove('active'); });
            card.classList.add('active');
            result.innerHTML = '<strong>' + card.dataset.title + ':</strong> ' + card.dataset.detail;
        });
    });
})();
</script>

<?php include 'footer.php'; ?>

