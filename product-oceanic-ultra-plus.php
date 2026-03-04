<?php
$product = [
    'name' => 'Oceanic Ultra Plus',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Oceanic-Ultra-Plus.png',
    'description' => 'Premium decorative paint for smooth interior finish and rich long-lasting color.',
    'details' => [
        'Oceanic Ultra Plus is a premium decorative paint designed to deliver smooth finish and rich color for interior walls.',
        'It enhances the appearance of living spaces while offering long-lasting durability.'
    ],
    'features' => [
        'Smooth luxurious finish',
        'High coverage',
        'Washable surface',
        'Long-lasting colors'
    ],
    'applications' => [
        'Homes',
        'Offices',
        'Hotels',
        'Interior walls'
    ],
    'speciality' => []
];

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

include 'product-detail-template.php';
?>
