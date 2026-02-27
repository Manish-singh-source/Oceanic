<?php
$product = [
    'name' => 'Oceanic Premium Antifouling Paint',
    'category' => 'Marine Paints',
    'image' => 'assets/img/products/Oceanic Premium Antifouling Paint.png',
    'description' => 'High-performance antifouling coating engineered to protect vessel hulls against marine growth, salt attack and prolonged water exposure.',
    'features' => [
        'Strong resistance to algae, slime and barnacle adhesion',
        'Extended docking interval support and reduced drag',
        'High adhesion on suitable marine primer systems',
        'Durable finish for coastal and offshore use'
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
