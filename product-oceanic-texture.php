<?php
$product = [
    'name' => 'Oceanic Texture Coating',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/oceanic-texture.png',
    'description' => 'Decorative exterior coating for premium textured finishes and weather protection.',
    'details' => [
        'Oceanic Texture Coating is a decorative exterior coating designed to create stylish textured wall finishes while providing strong protection against weather damage.',
        'It enhances architectural beauty and provides a premium look to buildings.'
    ],
    'features' => [
        'Decorative textured finish',
        'Weather resistant',
        'Durable exterior protection',
        'Crack bridging properties'
    ],
    'applications' => [
        'Exterior feature walls',
        'Residential buildings',
        'Commercial facades'
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
