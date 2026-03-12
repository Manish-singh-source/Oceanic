<?php
$defaultSeoTitle = 'Oceanic Paints | Marine, Industrial & Decorative Coatings';
$defaultSeoDescription = 'Oceanic provides marine paints, industrial coatings, and decorative paint solutions with durable protection and quality finish.';

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$currentPage = basename($requestPath ?: ($_SERVER['PHP_SELF'] ?? 'index.php'));

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? '';
$canonicalPath = $requestPath ?: ('/' . ltrim($currentPage, '/'));
$canonicalUrl = $host !== '' ? $scheme . '://' . $host . $canonicalPath : $canonicalPath;
$defaultOgImage = $host !== '' ? $scheme . '://' . $host . '/assets/img/logo/oceanic.png' : 'assets/img/logo/oceanic.png';

$seoByPage = [
    'index.php' => [
        'title' => 'Oceanic Paints | Marine, Industrial & Decorative Coatings',
        'description' => 'Leading paint manufacturer for marine paints, industrial coatings, and decorative paints. Explore durable, high-performance solutions from Oceanic.'
    ],
    'about-us.php' => [
        'title' => 'About Oceanic Paints | Company Profile',
        'description' => 'Learn about Oceanic and our expertise in marine paints, industrial coatings, and decorative paint systems built for dependable performance.'
    ],
    'products.php' => [
        'title' => 'Products | Oceanic Paints',
        'description' => 'Browse Oceanic product categories including marine paints, industrial coatings, and decorative paint solutions for commercial and residential use.'
    ],
    'contact.php' => [
        'title' => 'Contact Oceanic Paints',
        'description' => 'Contact Oceanic for product enquiries, technical support, and business requirements for marine, industrial, and decorative paint solutions.'
    ],
    'request-quote.php' => [
        'title' => 'Request A Quote | Oceanic Paints',
        'description' => 'Request a quote for Oceanic marine paints, industrial coatings, and decorative paints. Share your requirements and our team will respond quickly.'
    ],
    'color-catalogue.php' => [
        'title' => 'Color Catalogue | Oceanic Paints',
        'description' => 'Explore the Oceanic color catalogue and discover shades for decorative and protective paint applications.'
    ]
];

$seoTitle = $defaultSeoTitle;
$seoDescription = $defaultSeoDescription;

if (isset($product['name']) && is_string($product['name']) && $product['name'] !== '') {
    $seoTitle = $product['name'] . ' | Oceanic Paints';
    if (isset($product['description']) && is_string($product['description']) && $product['description'] !== '') {
        $seoDescription = $product['description'];
    } else {
        $category = isset($product['category']) && is_string($product['category']) ? $product['category'] : 'Paint Solutions';
        $seoDescription = $product['name'] . ' by Oceanic in ' . $category . '. Explore product features, applications, and enquiry options.';
    }
} elseif (isset($pageTitle) && is_string($pageTitle) && $pageTitle !== '') {
    $seoTitle = $pageTitle . ' | Oceanic Paints';
    $seoDescription = 'Explore Oceanic ' . strtolower($pageTitle) . ' with trusted performance, durability, and professional finish quality.';
} elseif (isset($seoByPage[$currentPage])) {
    $seoTitle = $seoByPage[$currentPage]['title'];
    $seoDescription = $seoByPage[$currentPage]['description'];
}

if (isset($seo_title) && is_string($seo_title) && trim($seo_title) !== '') {
    $seoTitle = trim($seo_title);
}
if (isset($seo_description) && is_string($seo_description) && trim($seo_description) !== '') {
    $seoDescription = trim($seo_description);
}

$safeSeoTitle = htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8');
$safeSeoDescription = htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8');
$safeCanonicalUrl = htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8');
$safeOgImage = htmlspecialchars($defaultOgImage, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $safeSeoTitle; ?></title>
     <meta name="description" content="<?php echo $safeSeoDescription; ?>">
     <meta name="robots" content="index, follow">
     <link rel="canonical" href="<?php echo $safeCanonicalUrl; ?>">

     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Oceanic Paints">
     <meta property="og:title" content="<?php echo $safeSeoTitle; ?>">
     <meta property="og:description" content="<?php echo $safeSeoDescription; ?>">
     <meta property="og:url" content="<?php echo $safeCanonicalUrl; ?>">
     <meta property="og:image" content="<?php echo $safeOgImage; ?>">

     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:title" content="<?php echo $safeSeoTitle; ?>">
     <meta name="twitter:description" content="<?php echo $safeSeoDescription; ?>">
     <meta name="twitter:image" content="<?php echo $safeOgImage; ?>">

     <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="assets/img/logo/fav.png" type="image/x-icon">

    <!--===== FONT AWESOME CSS =====-->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">

    <!--===== ABOUT US CSS =====-->
    <link rel="stylesheet" href="assets/css/about-us.css">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
        <!--=====  JS SCRIPT LINK =======-->
    <script src="assets/js/plugins/jquery-3-7-1.min.js"></script>
