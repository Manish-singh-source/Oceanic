<?php
$product = [
    'name' => 'Oceanic Base Coat Primer',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/oceanic-base-coat-primer.png',
    'description' => 'Strong base layer primer for better adhesion and uniform topcoat performance.',
    'details' => [
        'Oceanic Base Coat Primer is specially formulated to create a strong base layer before final paint application.',
        'It helps improve paint adhesion and ensures uniform finish.'
    ],
    'features' => [
        'Strong surface bonding',
        'Enhances topcoat performance',
        'Improves paint durability'
    ],
    'applications' => [
        'Interior walls',
        'Exterior walls',
        'New construction and repainting'
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
