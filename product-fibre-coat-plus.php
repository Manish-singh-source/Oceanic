<?php
$product = [
    'name' => 'Oceanic Premium Antifouling Paint - Fibre Coat Plus',
    'category' => 'Marine Paints',
    'image' => 'assets/img/products/Oceanic Premium Antifouling Paint Fibre Coat Plus.png',
    'description' => 'Advanced antifouling coating specially developed for fiberglass and FRP boats.',
    'details' => [
        'Oceanic Premium Antifouling Fibre Coat Plus is an advanced antifouling coating specially developed for fiberglass and FRP (Fibre Reinforced Plastic) boats.',
        'It offers superior adhesion and long-term protection against marine fouling and environmental degradation.',
        'The product forms a strong protective barrier that prevents marine growth while maintaining hull integrity and durability.'
    ],
    'features' => [
        'Specially formulated for fiberglass boats',
        'Excellent adhesion and durability',
        'Strong antifouling protection',
        'Enhances hull life and performance',
        'Long service interval between recoating'
    ],
    'applications' => [
        'Fibre boats',
        'Speed boats',
        'Leisure crafts',
        'Small fishing vessels'
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

$video = "assets/Oceanic Premium Antifouling Paint - Fibre Coat Plus.mp4";


include 'product-detail-template.php';
?>
