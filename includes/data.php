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
                 . "troubleshooting, hardware/software installation, data management, and "
                 . "basic networking, with a track record of improving operational "
                 . "efficiency and user satisfaction. Alongside support work, I also build "
                 . "small web systems — like the School Management System below — to solve "
                 . "real, everyday problems for the teams I work with.",
    'location'  => 'Satwa, Dubai, UAE',
    'email'     => 'm.avnd05@gmail.com',
    'phone'     => '+971 50 970 6167',
    'resume'    => 'assets/files/Michael_John_Avenido_Resume.pdf',
    'avatarInitials' => 'MA',
    // Set to '' to fall back to the initials circle instead of a photo.
    'photo'     => 'assets/img/profile.jpg',
];

$socials = [
    ['label' => 'GitHub',   'url' => 'https://github.com/Icowss', 'icon' => 'github'],
    ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/michael-john-avenido-114797328/', 'icon' => 'linkedin'],
    ['label' => 'Phone',    'url' => 'tel:+971509706167', 'icon' => 'phone'],
    ['label' => 'Email',    'url' => 'mailto:m.avnd05@gmail.com', 'icon' => 'mail'],
];

$skills = [
    ['name' => 'Technical Support & Customer Service',        'level' => 80],
    ['name' => 'Troubleshooting & Problem Resolution',        'level' => 85],
    ['name' => 'PC Hardware & Software Install/Upgrades',     'level' => 80],
    ['name' => 'Microsoft Office Suite',                      'level' => 85],
    ['name' => 'Drafting & AutoCAD',                          'level' => 75],
    ['name' => 'Programming (JavaScript, React, Python, PHP, Laravel)', 'level' => 70],
    ['name' => 'Basic Exchange Server & Email Config',        'level' => 60],
    ['name' => 'Basic Networking',                            'level' => 65],
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
        'role'    => 'IT Coordinator',
        'company' => 'Three Star Learning Center School of Rocka',
        'place'   => 'Plaridel, Bulacan, Philippines',
        'period'  => 'Sep 2024 – Jun 2025',
        'bullets' => [
            'Delivered day-to-day IT support, resolving 95% of technical issues on first contact to reduce downtime.',
            'Managed and updated academic databases, improving data accuracy and streamlining school operations.',
            'Maintained and upgraded IT equipment, extending device lifespan by 20% and lowering repair costs.',
            'Assisted with digital communications and online content, boosting student and parent engagement.',
        ],
    ],
    [
        'role'    => 'IT Administrator',
        'company' => 'Uratex',
        'place'   => 'Plaridel, Bulacan, Philippines',
        'period'  => 'Oct 2022 – Aug 2024',
        'bullets' => [
            'Administered day-to-day IT operations for the production facility, including user accounts, workstation setup, and network connectivity.',
            'Maintained and troubleshot IT equipment and systems, keeping downtime low during production and administrative shifts.',
            'Managed data encoding and reporting systems during night shifts with 99% accuracy to support administrative operations.',
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
