<?php
$product = [
    'name' => 'Oceanic Ultra Protek',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Oceanic-Ultra-Protek.png',
    'description' => 'Durable exterior coating for long-term weather protection and color retention.',
    'details' => [
        'Oceanic Ultra Protek is a durable exterior coating designed to protect buildings from harsh weather conditions such as rain, sunlight, and pollution.',
        'It provides excellent color retention and long-lasting protection.'
    ],
    'features' => [
        'Weather resistant',
        'UV protection',
        'Long-lasting finish',
        'Crack resistance'
    ],
    'applications' => [
        'Exterior walls',
        'Residential buildings',
        'Commercial structures'
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
