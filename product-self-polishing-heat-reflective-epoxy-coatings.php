<?php
$product = [
    'name' => 'Self Polishing + Heat Reflective Epoxy Coating',
    'category' => 'Industrial Coatings',
    'image' => 'assets/img/products/products4-thumb(2).png',
    'description' => 'High-performance epoxy coating with self-polishing and heat-reflective performance.',
    'details' => [
        'Oceanic Self Polishing Heat Reflective Epoxy Coating is a high-performance industrial coating that combines self-renewing surface properties with heat reflection technology.',
        'The coating gradually polishes itself during exposure, maintaining a clean and efficient surface.',
        'It reflects heat to reduce surface temperature and improve energy efficiency.'
    ],
    'features' => [
        'Heat reflective technology',
        'Self-polishing surface',
        'Excellent chemical resistance',
        'Superior adhesion to metal and concrete',
        'Long service life'
    ],
    'applications' => [
        'Industrial plants',
        'Marine infrastructure',
        'Storage tanks',
        'Pipelines',
        'Power plants'
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
