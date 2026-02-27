<?php
$products = [
    'oceanic-premium-antifouling-paint' => [
        'name' => 'Oceanic Premium Antifouling Paint',
        'category' => 'Marine Paints',
        'image' => 'assets/img/products/products4-thumb(1).png',
        'description' => 'High-performance antifouling coating engineered to protect vessel hulls against marine growth, salt attack and prolonged water exposure.',
        'features' => [
            'Strong resistance to algae, slime and barnacle adhesion',
            'Extended docking interval support and reduced drag',
            'High adhesion on suitable marine primer systems',
            'Durable finish for coastal and offshore use'
        ]
    ],
    'fibre-coat-plus' => [
        'name' => 'Oceanic Premium Antifouling Paint Fibre Coat Plus',
        'category' => 'Marine Paints',
        'image' => 'assets/img/products/products4-thumb(1).png',
        'description' => 'Reinforced antifouling system with fibre-enhanced structure for improved film integrity and better long-term marine protection.',
        'features' => [
            'Fibre reinforced coating matrix',
            'Better crack resistance in dynamic service',
            'Long-lasting underwater protection',
            'Optimized coverage for maintenance coating cycles'
        ]
    ],
    'oceanic-sea-shield-antifouling' => [
        'name' => 'Oceanic Sea Shield Antifouling',
        'category' => 'Marine Paints',
        'image' => 'assets/img/products/products4-thumb(1).png',
        'description' => 'Marine antifouling protection designed for harsh salinity and bio-fouling conditions with reliable coating endurance.',
        'features' => [
            'Marine-grade anti-fouling performance',
            'Improved hull cleanliness retention',
            'Good flow and finish during application',
            'Suitable for commercial and utility vessels'
        ]
    ],
    'thermochromic-antimicrobial-qd-enamel' => [
        'name' => 'Thermochromic + Antimicrobial QD Enamel',
        'category' => 'Industrial Coatings',
        'image' => 'assets/img/products/products4-thumb(2).png',
        'description' => 'Smart industrial enamel combining heat-responsive visual behavior with antimicrobial functionality for technical surface applications.',
        'features' => [
            'Thermochromic response for temperature indication',
            'Antimicrobial surface support',
            'Quick-dry enamel system',
            'Industrial-grade durability and cleanability'
        ]
    ],
    'self-polishing-heat-reflective-epoxy-coatings' => [
        'name' => 'Self Polishing + Heat Reflective Epoxy Coatings',
        'category' => 'Industrial Coatings',
        'image' => 'assets/img/products/products4-thumb(2).png',
        'description' => 'Epoxy coating system with self-polishing behavior and heat reflective performance to support durability and thermal load reduction.',
        'features' => [
            'Heat reflectance for reduced surface heating',
            'Self-polishing surface behavior',
            'Excellent mechanical durability',
            'Suitable for demanding industrial environments'
        ]
    ],
    'oceanic-multipurpose-primer' => [
        'name' => 'Oceanic Multipurpose Primer',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'General-purpose primer that improves substrate hold, topcoat uniformity and long-term decorative coating life.',
        'features' => [
            'Strong base layer adhesion',
            'Improved topcoat coverage',
            'Supports reduced paint consumption',
            'Suitable for interior and selected exterior usage'
        ]
    ],
    'oceanic-ultra-protek' => [
        'name' => 'Oceanic Ultra Protek',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Premium decorative paint with robust protection and smooth finish performance for modern walls.',
        'features' => [
            'High durability and washability',
            'Smooth decorative finish',
            'Good color retention',
            'Low maintenance surface care'
        ]
    ],
    'oceanic-ultra-plus' => [
        'name' => 'Oceanic Ultra Plus',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Advanced decorative emulsion designed for rich appearance, high coverage and lasting surface appeal.',
        'features' => [
            'Rich and elegant wall finish',
            'Excellent hiding power',
            'Smooth application behavior',
            'Long-lasting decorative performance'
        ]
    ],
    'shine-interior-emulsion' => [
        'name' => 'Shine Interior Emulsion',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Interior-focused emulsion crafted for clean finish quality and aesthetic consistency in residential and commercial spaces.',
        'features' => [
            'Soft sheen interior finish',
            'Good stain resistance',
            'Consistent leveling and spread',
            'Available for broad shade selections'
        ]
    ],
    'exterior-emulsion' => [
        'name' => 'Exterior Emulsion',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Weather-resistant exterior emulsion for reliable color life and improved resistance against rain, humidity and UV exposure.',
        'features' => [
            'Strong weatherability',
            'UV and rain resistance support',
            'Exterior wall durability',
            'Longer repaint cycle potential'
        ]
    ],
    'oceanic-acrylic-distemper' => [
        'name' => 'Oceanic Acrylic Distemper',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Economical acrylic distemper designed for cost-effective decorative coating with smooth appearance.',
        'features' => [
            'Budget-friendly decorative option',
            'Easy brush or roller application',
            'Uniform matte finish',
            'Suitable for routine interior repainting'
        ]
    ],
    'oceanic-base-coat-primer' => [
        'name' => 'Oceanic Base Coat Primer',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Foundation primer to enhance topcoat lock, improve substrate sealing and stabilize decorative coat performance.',
        'features' => [
            'Seals porous surfaces effectively',
            'Boosts topcoat adhesion',
            'Improves finish consistency',
            'Supports longer coating life'
        ]
    ],
    'oceanic-texture' => [
        'name' => 'Oceanic Texture',
        'category' => 'Decorative Paints',
        'image' => 'assets/img/products/products4-thumb(3).png',
        'description' => 'Texture finish system for premium decorative effects and visual depth across feature walls and facades.',
        'features' => [
            'Multiple textured design effects',
            'Enhanced visual depth and character',
            'Durable finish for feature areas',
            'Compatible with selected tint systems'
        ]
    ]
];

$selectedSlug = isset($_GET['product']) ? strtolower(trim($_GET['product'])) : 'oceanic-premium-antifouling-paint';
$product = $products[$selectedSlug] ?? $products['oceanic-premium-antifouling-paint'];

$defaultSpecs = [
    'Finish' => 'As per approved product variant',
    'Coverage' => 'Depends on surface porosity and application method',
    'Drying Time' => 'Touch dry and recoat window as per TDS',
    'Recommended Coats' => '2 coats over recommended primer/base',
    'Application Tools' => 'Brush / Roller / Spray (based on product type)'
];

$applicationSteps = [
    'Surface Preparation' => 'Clean dust, grease, salts and loose particles. Ensure dry and stable substrate before painting.',
    'Priming' => 'Apply suitable primer/base system according to substrate and product category.',
    'Topcoat Application' => 'Apply coating evenly in recommended coat thickness and interval between coats.',
    'Curing and Inspection' => 'Allow full drying/curing and inspect finish uniformity before handover or service.'
];

include 'header.php';
include 'navbar.php';
?>

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
