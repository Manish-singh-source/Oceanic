<?php
$product = [
    'name' => 'Oceanic Acrylic Distemper',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Oceanic-Acrylic-Distemper.png',
    'description' => 'Economical decorative coating for smooth matte interior finishes.',
    'details' => [
        'Oceanic Acrylic Distemper is an economical decorative coating that offers good coverage and smooth finish for interior walls.',
        'It is suitable for large residential and commercial projects where affordability and durability are important.'
    ],
    'features' => [
        'Cost effective',
        'Smooth matte finish',
        'Good coverage',
        'Easy application'
    ],
    'applications' => [
        'Residential interiors',
        'Commercial interiors',
        'Large repainting projects'
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
