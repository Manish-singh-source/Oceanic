<?php
$product = [
    'name' => 'Self Polishing + Heat Reflective Epoxy Coatings',
    'category' => 'Industrial Coatings',
    'image' => 'assets/img/products/products4-thumb(2).png',
    'description' => 'Epoxy coating system with self-polishing behavior and heat reflective performance to support durability and thermal load reduction.',
    'features' => [
        'Heat reflectance for reduced surface heating',
        'Self-polishing surface behavior',
        'Excellent mechanical durability',
        'Suitable for demanding industrial environments'
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
