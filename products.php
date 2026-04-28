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

    .category-card {
        border-radius: 18px;
        overflow: hidden;
        border: 1px solid #e7ecf3;
        background: #fff;
        box-shadow: 0 10px 30px rgba(4, 23, 49, 0.08);
        height: 100%;
    }

    .category-card-thumb {
        /* height: 220px; */
        background: linear-gradient(145deg, #edf5ff, #f9fcff);
        display: flex;
        align-items: center;
        justify-content: center;
        /* padding: 20px; */
    }

    .category-card-thumb img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .category-card-body {
        padding: 26px 22px 24px;
    }

    .category-card-body h3 {
        font-size: 30px;
        color: #03294d;
        margin: 0;
    }

    .category-card-body p {
        margin: 0;
        color: #315474;
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

        .category-card-body h3 {
            font-size: 24px;
        }
    }

    /* Extra Small Devices (phones) */
    @media (max-width: 575px) {
        .category-card-thumb {
            height: 215px;
            background: linear-gradient(145deg, #edf5ff, #f9fcff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
    }

    /* Small Devices (phones landscape / small tablets) */
    @media (min-width: 576px) and (max-width: 767px) {
        .category-card-thumb {
            height: 315px;
            background: linear-gradient(145deg, #edf5ff, #f9fcff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
    }

    /* Medium Devices (tablets) */
    @media (min-width: 768px) and (max-width: 991px) {
        .category-card-thumb {
            height: 210px;
            background: linear-gradient(145deg, #edf5ff, #f9fcff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
    }

    /* Large Devices (laptops) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .category-card-thumb {
            /* height: 275px; */
            background: linear-gradient(145deg, #edf5ff, #f9fcff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
    }

    /* Extra Large Devices (desktops) */
    @media (min-width: 1200px) and (max-width: 1399px) {}

    /* XXL Devices (large screens / TVs) */
    @media (min-width: 1400px) {}
</style>

<div class="product-page-hero">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="aboutus_hero_title">
                    <h2>Product Categories</h2>
                    <div class="space26"></div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt=""></li>
                        <li><a class="aboutus_titlefix" href="products.php">Products</a></li>
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
                    <h3 class="sub-title" data-aos="zoom-in" data-aos-duration="800"><img src="assets/img/icon/about-subtitle-icon-hm1.svg" alt="">Oceanic Products</h3>
                    <div class="space22"></div>
                    <h2 class="title text-anime-style-3" data-aos="zoom-in" data-aos-duration="900">Choose Category</h2>
                </div>
            </div>
        </div>
        <div class="space60"></div>

        <div class="row gy-4 align-items-stretch">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <article class="category-card" data-aos="fade-up" data-aos-duration="850">
                    <div class="category-card-thumb">
                        <img src="assets/img/products/products4-thumb(1).png" alt="Marine Paints">
                    </div>
                    <div class="category-card-body">
                        <h3>Marine Paints</h3>
                        <div class="space14"></div>
                        <p>Antifouling and marine protection systems.</p>
                        <div class="space20"></div>
                        <a href="marine-paints.php" class="learn-more-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6">
                <article class="category-card" data-aos="fade-up" data-aos-duration="950">
                    <div class="category-card-thumb">
                        <img src="assets/img/products/products4-thumb(2).png" alt="Industrial Coatings">
                    </div>
                    <div class="category-card-body">
                        <h3>Industrial Coatings</h3>
                        <div class="space14"></div>
                        <p>Performance coatings for demanding environments.</p>
                        <div class="space20"></div>
                        <a href="industrial-coatings.php" class="learn-more-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6">
                <article class="category-card" data-aos="fade-up" data-aos-duration="1050">
                    <div class="category-card-thumb">
                        <img src="assets/img/products/products4-thumb(3).png" alt="Decorative Paints">
                    </div>
                    <div class="category-card-body">
                        <h3>Decorative Paints</h3>
                        <div class="space14"></div>
                        <p>Interior and exterior decorative finish range.</p>
                        <div class="space20"></div>
                        <a href="decorative-paints.php" class="learn-more-btn">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>