<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
.product-page-hero {
    background-image: linear-gradient(120deg, rgba(4, 30, 66, 0.88), rgba(10, 69, 118, 0.82)), url('assets/img/hero/hero-hm2-bg(1).webp');
    background-size: cover;
    background-position: center;
    padding: 170px 0 90px;
}

.product-page-hero h2,
.product-page-hero ul li a {
    color: #fff;
}

.product-card {
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid #e8edf4;
    background: #fff;
    box-shadow: 0 10px 30px rgba(4, 23, 49, 0.07);
    height: 100%;
}

.product-card-thumb {
    height: 235px;
    background: linear-gradient(145deg, #edf5ff, #f9fcff);
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-card-thumb img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.product-card-body {
    padding: 22px 20px 24px;
}

.product-card-body h3 {
    font-size: 22px;
    line-height: 1.35;
    color: #072f52;
    margin: 0;
}

.learn-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: 1px solid #0c5d9b;
    color: #0c5d9b;
    font-weight: 600;
    border-radius: 999px;
    padding: 10px 16px;
}

.learn-more-btn:hover {
    background: #0c5d9b;
    color: #fff;
}

@media (max-width: 767px) {
    .product-page-hero {
        padding: 145px 0 80px;
    }
}
</style>

<div class="product-page-hero">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="aboutus_hero_title">
                    <h2><?php echo htmlspecialchars($pageTitle); ?></h2>
                    <div class="space26"></div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt=""></li>
                        <li><a href="products.php">Products</a></li>
                        <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt=""></li>
                        <li><a class="aboutus_titlefix" href="#"><?php echo htmlspecialchars($pageTitle); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="vl-our_products_area sp1">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto text-center">
                <div class="vl-about-title-area">
                    <h3 class="sub-title" data-aos="zoom-in" data-aos-duration="800"><img src="assets/img/icon/about-subtitle-icon-hm1.svg" alt="">Product List</h3>
                    <div class="space22"></div>
                    <h2 class="title text-anime-style-3" data-aos="zoom-in" data-aos-duration="900"><?php echo htmlspecialchars($pageTitle); ?></h2>
                </div>
            </div>
        </div>
        <div class="space60"></div>
        <div class="row gy-4 align-items-stretch">
            <?php foreach ($products as $item): ?>
                <div class="col-xl-4 col-lg-6">
                    <article class="product-card" data-aos="fade-up" data-aos-duration="900">
                        <div class="product-card-thumb">
                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                        </div>
                        <div class="product-card-body">
                            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                            <div class="space18"></div>
                            <a href="<?php echo htmlspecialchars($item['link']); ?>" class="learn-more-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
