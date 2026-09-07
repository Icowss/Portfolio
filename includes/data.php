<?php
/**
 * data.php
 * ---------------------------------------------------------
 * All portfolio content lives here as plain PHP arrays.
 * Edit the values below to update the site — nothing else
 * in the project needs to change.
 * ---------------------------------------------------------
 */

$profile = [
    'name'      => 'Michael John M. Avenido',
    'title'     => 'IT Support Specialist & Web Developer',
    'tagline'   => 'Hands-on IT support and troubleshooting, paired with programming skills — I keep systems running and build the tools that run them.',
    'about'     => "I'm an adaptable IT professional with hands-on experience in technical "
                 . "support, system maintenance, and customer service. I'm skilled in "
                 . "troubleshooting, hardware/software installation, and data management, "
                 . "with a track record of improving operational efficiency and user "
                 . "satisfaction. Alongside support work, I also build small web systems — "
                 . "like the School Management System below — to solve real, everyday "
                 . "problems for the teams I work with.",
    'location'  => 'Satwa, Dubai, UAE',
    'email'     => 'm.avnd05@gmail.com',
    'phone'     => '+971 50 274 2998',
    'resume'    => 'assets/files/Michael_John_Avenido_Resume.pdf',
    'avatarInitials' => 'MA',
    // Set to '' to fall back to the initials circle instead of a photo.
    'photo'     => 'assets/img/profile.jpg',
];

$socials = [
    ['label' => 'GitHub',   'url' => 'https://github.com/Icowss', 'icon' => 'github'],
    ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/michael-john-avenido-114797328/', 'icon' => 'linkedin'],
    ['label' => 'Phone',    'url' => 'tel:+971502742998', 'icon' => 'phone'],
    ['label' => 'Email',    'url' => 'mailto:m.avnd05@gmail.com', 'icon' => 'mail'],
];

$skills = [
    ['name' => 'Technical Support & Customer Service',        'level' => 80],
    ['name' => 'Troubleshooting & Problem Resolution',        'level' => 85],
    ['name' => 'PC Hardware & Software Install/Upgrades',     'level' => 80],
    ['name' => 'Microsoft Office Suite',                      'level' => 85],
    ['name' => 'Drafting & AutoCAD',                          'level' => 75],
    ['name' => 'Programming (JavaScript, Python, PHP, Laravel)', 'level' => 70],
    ['name' => 'Basic Exchange Server & Email Config',        'level' => 60],
];

/**
 * Work experience, most recent first — pulled from your CV.
 */
$experience = [
    [
        'role'    => 'Service Crew',
        'company' => 'Jollibee',
        'place'   => 'Satwa, Dubai, UAE',
        'period'  => 'Oct 2025 – Present',
        'bullets' => [
            "Prepared and cooked food while following Jollibee's quality, food safety, and hygiene standards.",
            'Maintained a clean and organized kitchen by sanitizing workstations, equipment, and utensils.',
            'Worked efficiently with the kitchen team to prepare orders accurately and provide fast service in a busy environment.',
        ],
    ],
    [
        'role'    => 'Encoder / Helper',
        'company' => 'Uratex',
        'place'   => 'Plaridel, Bulacan, Philippines',
        'period'  => 'Sep 2024 – Mar 2025',
        'bullets' => [
            'Assisted in the production area by cutting foam and arranging orders for smooth, timely deliveries.',
            'Performed data encoding tasks during night shifts with 99% accuracy to support administrative reporting.',
            'Set up and troubleshot IT equipment to maintain operational efficiency.',
        ],
    ],
    [
        'role'    => 'IT Coordinator',
        'company' => 'Three Star Learning Center School of Rocka',
        'place'   => 'Plaridel, Bulacan, Philippines',
        'period'  => 'Oct 2022 – Jun 2024',
        'bullets' => [
            'Delivered day-to-day IT support, resolving 95% of technical issues on first contact to reduce downtime.',
            'Managed and updated academic databases, improving data accuracy and streamlining school operations.',
            'Maintained and upgraded IT equipment, extending device lifespan by 20% and lowering repair costs.',
            'Assisted with digital communications and online content, boosting student and parent engagement.',
        ],
    ],
    [
        'role'    => 'Freelance Computer Technician',
        'company' => 'Various Clients',
        'place'   => 'Bulacan, Philippines',
        'period'  => 'Sep 2020 – Jun 2025',
        'bullets' => [
            'Installed, configured, and repaired computer hardware/software for 100+ successful system setups and fixes.',
            'Performed preventive maintenance on PCs and peripherals, reducing recurring client issues.',
            'Delivered personalized troubleshooting support, achieving a 95% client satisfaction rate.',
        ],
    ],
    [
        'role'    => 'Service Crew',
        'company' => 'Jollibee',
        'place'   => 'Plaridel, Bulacan, Philippines',
        'period'  => 'May 2019 – Feb 2022',
        'bullets' => [
            'Provided excellent customer service that contributed to consistent positive feedback.',
            'Supported the team during peak hours, helping achieve daily sales targets.',
            'Trained and guided new staff on food safety and service procedures, improving team efficiency.',
        ],
    ],
];

$education = [
    [
        'degree' => 'Bachelor of Science in Information Technology',
        'school' => 'Bulacan State University',
        'place'  => 'Malolos, Bulacan, Philippines',
        'period' => '2018 – 2022',
    ],
    [
        'degree' => 'STEM — Senior High School',
        'school' => 'Baliuag University',
        'place'  => 'Baliwag, Bulacan, Philippines',
        'period' => '2016 – 2018',
    ],
];

$certifications = [
    'TESDA — Technical Drafting NC II',
];

/**
 * Projects. The School Management System is a real project tied to your
 * IT Coordinator role — update 'link' and 'repo' below with the actual
 * URLs once you have them (they're set to '#' for now).
 */
$projects = [
    [
        'title'       => 'School Management System',
        'description' => 'A system for managing student records, academic data, and daily '
                        . 'school operations — built and maintained while working as IT '
                        . 'Coordinator at Three Star Learning Center School of Rocka, helping '
                        . 'streamline data management and improve accuracy across the school.',
        'tags'        => ['Database Management', 'Web App', 'Academic Records'],
        'link'        => '#',
        'repo'        => '#',
        'featured'    => true,
        'placeholder' => false,
    ],
    [
        'title'       => 'Yeneh Interiors',
        'description' => 'A responsive PHP website for a freelance interior designer in Dubai — '
                        . 'built with a custom PHP templating structure, a working contact form, '
                        . 'portfolio filtering, and a light/dark single-page version with scroll-reveal animations.',
        'tags'        => ['PHP', 'Web Design', 'Responsive'],
        'link'        => 'https://icowss.github.io/yeneh-interiors/',
        'repo'        => '#',
        'featured'    => false,
        'placeholder' => false,
    ],
    [
        'title'       => 'More projects coming soon',
        'description' => "More projects are on the way — check back soon, or get in touch if you'd like to see additional work.",
        'tags'        => [],
        'link'        => '#',
        'repo'        => '#',
        'featured'    => false,
        'placeholder' => true,
    ],
];
