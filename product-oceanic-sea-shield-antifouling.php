<?php
$product = [
    'name' => 'Oceanic Sea Shield Antifouling',
    'category' => 'Marine Paints',
    'image' => 'assets/img/products/products4-thumb(1).png',
    'description' => 'Durable marine coating engineered for reliable antifouling protection in harsh conditions.',
    'details' => [
        'Oceanic Sea Shield Antifouling is a durable marine coating engineered for reliable protection in harsh marine conditions.',
        'It provides an effective defense against algae, barnacles, and other marine fouling organisms.',
        'Its balanced formulation ensures strong adhesion and steady release of antifouling agents, helping maintain smooth hull surfaces and improving vessel efficiency.'
    ],
    'features' => [
        'Reliable antifouling protection',
        'Smooth hull finish',
        'Resistant to saltwater corrosion',
        'Long-lasting performance',
        'Cost-effective solution for marine vessels'
    ],
    'applications' => [
        'Fishing vessels',
        'Small cargo boats',
        'Coastal marine equipment'
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
