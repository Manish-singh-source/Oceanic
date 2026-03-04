<?php
$product = [
    'name' => 'Oceanic Multipurpose Primer',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Oceanic-Multipurpose-Primer.png',
    'description' => 'High-quality base coating designed to prepare surfaces before topcoat application.',
    'details' => [
        'Oceanic Multipurpose Primer is a high-quality base coating designed to prepare surfaces for topcoat application.',
        'It enhances adhesion and ensures better coverage and durability of finishing paints.'
    ],
    'features' => [
        'Excellent surface sealing',
        'Strong adhesion',
        'Improves paint durability',
        'Suitable for multiple surfaces'
    ],
    'applications' => [
        'Walls',
        'Wood',
        'Metal surfaces'
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
