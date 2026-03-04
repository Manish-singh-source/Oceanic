<?php
$product = [
    'name' => 'Oceanic Shine Interior Emulsion',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Shine-Interior-Emulsion.png',
    'description' => 'High-quality interior paint with elegant sheen, durability, and washability.',
    'details' => [
        'Oceanic Shine Interior Emulsion is a high-quality interior paint that delivers a bright and elegant finish for modern interiors.',
        'It offers excellent coverage and a soft sheen effect.'
    ],
    'features' => [
        'Smooth and shiny finish',
        'Good stain resistance',
        'Easy to apply',
        'Durable interior coating'
    ],
    'applications' => [
        'Living rooms',
        'Bedrooms',
        'Offices'
    ],
    'speciality' => [
        'title' => 'Oceanic 100% Washable Interior Emulsion',
        'description' => [
            'Oceanic 100% Washable Interior Emulsion is a premium interior wall coating developed for modern homes and commercial interiors where cleanliness, durability, and aesthetics are important.',
            'The advanced washable technology allows stains, dirt, and marks to be cleaned easily from painted walls without damaging the paint film.',
            'The coating maintains smooth finish and color even after repeated washing, making it ideal for high-traffic interior spaces.'
        ],
        'advantages' => [
            '100% washable paint technology',
            'High stain resistance',
            'Long-lasting smooth finish',
            'Easy maintenance and cleaning',
            'Superior color retention'
        ]
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
