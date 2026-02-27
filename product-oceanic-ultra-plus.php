<?php
$product = [
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
