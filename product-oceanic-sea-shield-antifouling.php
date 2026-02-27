<?php
$product = [
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
