<?php
$product = [
    'name' => 'Oceanic Exterior Emulsion',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Exterior-Emulsion.png',
    'description' => 'Exterior wall coating with superior weather protection and color stability.',
    'details' => [
        'Oceanic Exterior Emulsion provides superior protection for external walls against weather damage and environmental pollution.',
        'It offers excellent adhesion and long-lasting color stability.'
    ],
    'features' => [
        'Weather resistant',
        'Strong adhesion',
        'Anti-peeling formula',
        'Long color life'
    ],
    'applications' => [
        'Exterior walls',
        'Residential facades',
        'Commercial exteriors'
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
