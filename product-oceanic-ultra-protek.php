<?php
$product = [
    'name' => 'Oceanic Ultra Protek Ultima',
    'category' => 'Decorative Paints',
    'image' => 'assets/img/products/Oceanic-Ultra-Protek.png',
    'description' => 'Durable exterior coating for long-term weather protection, color retention and 10 years warranty support.',
    'details' => [
        'Oceanic Ultra Protek Ultima is a durable exterior coating designed to protect buildings from harsh weather conditions such as rain, sunlight, and pollution.',
        'It provides excellent color retention and long-lasting protection backed by a 10 years warranty.',
        'Recommended for exterior walls that require dependable weather resistance and long service life.'
    ],
    'features' => [
        'Weather resistant',
        'UV protection',
        'Long-lasting finish',
        'Crack resistance',
        '10 years warranty'
    ],
    'applications' => [
        'Exterior walls',
        'Residential buildings',
        'Commercial structures'
    ],
    'speciality' => [
        'title' => 'Warranty Advantage',
        'description' => [
            'Ultra Protek Ultima is developed for exterior protection where long-term finish retention and weather durability are key requirements.',
            'The product comes with 10 years warranty support when applied using the recommended primer and application process.'
        ],
        'advantages' => [
            'Long-term exterior protection',
            'Improved weather resistance',
            'Extended color retention',
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


