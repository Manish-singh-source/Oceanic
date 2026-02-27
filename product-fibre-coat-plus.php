<?php
$product = [
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
