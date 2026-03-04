<?php
$product = [
    'name' => 'Thermochromic + Antimicrobial QD Enamel',
    'category' => 'Industrial Coatings',
    'image' => 'assets/img/products/products4-thumb(2).png',
    'description' => 'Technology-enabled industrial enamel with thermo-indication and antimicrobial protection.',
    'details' => [
        'Oceanic Thermochromic + Antimicrobial Quick Dry Enamel is a technologically advanced coating designed for industrial surfaces that require both temperature-responsive properties and antimicrobial protection.',
        'The coating changes color based on temperature variation (thermochromic effect), making it ideal for monitoring heat exposure.',
        'Its antimicrobial formulation helps inhibit the growth of bacteria, fungi, and harmful microbes on coated surfaces.'
    ],
    'features' => [
        'Thermochromic temperature indication',
        'Antimicrobial protection',
        'Quick drying formulation',
        'High durability and chemical resistance',
        'Smooth glossy finish'
    ],
    'applications' => [
        'Industrial machinery',
        'Medical equipment',
        'Food processing facilities',
        'Public infrastructure'
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
