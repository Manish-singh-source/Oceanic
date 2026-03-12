<?php
$product = [
    'name' => 'Oceanic Ultra Plus Apex',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Oceanic-Ultra-Plus.png',
    'description' => 'Premium interior decorative paint with smooth finish, rich long-lasting color and 5 years warranty support.',
    'details' => [
        'Oceanic Ultra Plus Apex is a premium decorative paint designed to deliver smooth finish and rich color for interior walls.',
        'It enhances the appearance of living spaces while offering long-lasting durability backed by a 5 years warranty.',
        'Recommended for premium residential and commercial interiors where finish quality and coverage consistency are important.'
    ],
    'features' => [
        'Smooth luxurious finish',
        'High coverage',
        'Washable surface',
        'Long-lasting colors',
        '5 years warranty'
    ],
    'applications' => [
        'Homes',
        'Offices',
        'Hotels',
        'Interior walls'
    ],
    'speciality' => [
        'title' => 'Warranty Advantage',
        'description' => [
            'Ultra Plus Apex is positioned as a premium decorative solution for interiors that require elegant finish and dependable life.',
            'The product comes with 5 years warranty support when applied as per the recommended system and surface preparation process.'
        ],
        'advantages' => [
            'Premium interior appearance',
            'Reliable coating life',
            'Better finish retention',
            'Warranty-backed offering'
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



