<?php
$product = [
    'name' => 'Oceanic Premium Antifouling Paint',
    'category' => 'Marine Paints',
    'image' => 'assets/img/products/Oceanic Premium Antifouling Paint.png',
    'description' => 'High-performance marine coating for hull protection against marine growth and saltwater corrosion.',
    'details' => [
        'Oceanic Premium Antifouling Paint is a high-performance marine coating designed to protect vessel hulls from the accumulation of marine organisms such as algae, barnacles, slime, and mollusks.',
        'This advanced formulation creates a protective layer that minimizes biofouling and improves vessel efficiency.',
        'By preventing marine growth, the coating helps reduce drag in water, leading to better fuel efficiency and lower maintenance costs while resisting harsh marine environments.'
    ],
    'features' => [
        'Prevents marine organism growth',
        'Improves vessel speed and fuel efficiency',
        'Excellent saltwater resistance',
        'Long-lasting underwater protection',
        'Suitable for wooden, steel, and fiberglass hulls'
    ],
    'applications' => [
        'Fishing boats',
        'Cargo vessels',
        'Yachts',
        'Marine structures and pontoons'
    ],
    'speciality' => [
        'title' => 'Oceanic Strong Biocide Antifouling Technology',
        'description' => [
            'Oceanic Antifouling Coatings are formulated with high-efficiency biocidal technology designed to provide superior protection against aggressive marine fouling.',
            'The strong biocide system actively prevents the attachment and growth of organisms such as barnacles, algae, slime, and marine bacteria on submerged surfaces.',
            'This technology ensures long-term hull protection and helps improve fuel efficiency, vessel speed, and operational performance in harsh marine environments.'
        ],
        'advantages' => [
            'Advanced strong biocide antifouling system',
            'Superior protection against barnacles, algae, and slime',
            'Reduces hull drag and improves fuel efficiency',
            'Long service life in marine environments',
            'Ideal for fishing vessels, cargo boats, and marine equipment'
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

$video = "assets/Oceanic Premium Antifouling Paint.mp4";


include 'product-detail-template.php';
?>
