<?php
/**
 * In PHP, an array is a list of items.
 * We store our products here so we can update them in one place.
 */

// Navigation items matching Apple's top bar
$navItems = [
    ['title' => 'Store', 'url' => 'index.php'],
    ['title' => 'Mac', 'url' => 'category.php?category=mac'],
    ['title' => 'iPad', 'url' => 'category.php?category=ipad'],
    ['title' => 'iPhone', 'url' => 'category.php?category=iphone'],
    ['title' => 'Watch', 'url' => 'category.php?category=watch'],
    ['title' => 'AirPods', 'url' => 'category.php?category=airpods'],
    ['title' => 'Home', 'url' => 'category.php?category=home'],
    ['title' => 'Entertainment', 'url' => 'category.php?category=entertainment'],
    ['title' => 'Accessories', 'url' => 'category.php?category=accessories'],
    ['title' => 'Support', 'url' => 'category.php?category=support']
];

// Announcement banner
$announcement = [
    'highlight' => 'Get up to 12 months of No Cost EMI§ plus up to ₹15000.00 instant cashback^ on selected products with eligible cards.',
    'link_text' => 'See offers',
    'link_url' => '#offers'
];

// 8 Product categories from the screenshot
$categories = [
    ['id' => 'mac',         'name' => 'Mac',         'url' => 'category.php?category=mac',         'image' => 'images/mac.svg',         'alt' => 'Laptop'],
    ['id' => 'iphone',      'name' => 'iPhone',      'url' => 'category.php?category=iphone',      'image' => 'images/iphone.svg',      'alt' => 'Smartphone'],
    ['id' => 'ipad',        'name' => 'iPad',        'url' => 'category.php?category=ipad',        'image' => 'images/ipad.svg',        'alt' => 'Tablet'],
    ['id' => 'watch',       'name' => 'Apple Watch', 'url' => 'category.php?category=watch',       'image' => 'images/watch.svg',       'alt' => 'Smart watch'],
    ['id' => 'home',        'name' => 'Home',        'url' => 'category.php?category=home',        'image' => 'images/home.svg',        'alt' => 'Smart speaker'],
    ['id' => 'airpods',     'name' => 'AirPods',     'url' => 'category.php?category=airpods',     'image' => 'images/airpods.svg',     'alt' => 'Wireless earbuds'],
    ['id' => 'airtag',      'name' => 'AirTag',      'url' => 'category.php?category=airtag',      'image' => 'images/airtag.svg',      'alt' => 'Item tracker'],
    ['id' => 'accessories', 'name' => 'Accessories', 'url' => 'category.php?category=accessories', 'image' => 'images/accessories.svg', 'alt' => 'Phone accessories']
];

$storeQuickLinks = [
    ['title' => 'Find a Store', 'url' => 'index.php#store'],
    ['title' => 'Order Status', 'url' => 'cart.php'],
    ['title' => 'Apple Trade In', 'url' => 'index.php#savings-and-offers'],
    ['title' => 'Ways to Buy', 'url' => 'index.php#savings-and-offers'],
    ['title' => 'Personal Setup', 'url' => 'index.php#store-difference'],
    ['title' => 'Festive Offer', 'url' => 'index.php#joy-starts-here']
];

$megaMenus = [
    'Mac' => [
        'category' => 'mac',
        'explore' => ['MacBook Neo', 'MacBook Air', 'MacBook Pro', 'iMac', 'Mac mini', 'Mac Studio', 'Displays', 'Compare Mac', 'Switch from PC to Mac'],
        'shop' => ['Shop Mac', 'Mac Accessories', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['Mac Support', 'AppleCare', 'macOS 27', 'Apple Intelligence and Siri', 'Apps by Apple', 'Apple Creator Studio', 'Better with iPhone', 'iCloud+', 'Mac for Business', 'Education', 'Apple at Work']
    ],
    'iPad' => [
        'category' => 'ipad',
        'explore' => ['iPad Pro', 'iPad Air', 'iPad', 'iPad mini', 'Apple Pencil', 'Keyboards', 'Compare iPad'],
        'shop' => ['Shop iPad', 'iPad Accessories', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['iPad Support', 'AppleCare', 'iPadOS 27', 'Apple Intelligence and Siri', 'Apps by Apple', 'Apple Creator Studio', 'iCloud+', 'Education', 'Apple at Work']
    ],
    'iPhone' => [
        'category' => 'iphone',
        'explore' => ['iPhone Duo', 'iPhone 18 Pro', 'iPhone Air', 'iPhone 17', 'iPhone 17e', 'iPhone 16', 'Compare iPhone', 'Switch from Android'],
        'shop' => ['Shop iPhone', 'iPhone Accessories', 'Apple Trade In', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['iPhone Support', 'AppleCare', 'iOS 27', 'Apple Intelligence and Siri', 'Apps by Apple', 'iPhone Privacy', 'Better with Mac', 'iCloud+', 'Wallet, Pay', 'Apple at Work']
    ],
    'Watch' => [
        'category' => 'watch',
        'explore' => ['Apple Watch Series 12', 'Apple Watch Ultra 4', 'Apple Watch SE 3', 'Apple Watch Nike', 'Compare Watch', 'Why Apple Watch'],
        'shop' => ['Shop Apple Watch', 'Apple Watch Straps', 'Apple Watch Accessories', 'Ways to Buy', 'Personal Setup', 'Festive Offer'],
        'more' => ['Apple Watch Support', 'AppleCare', 'watchOS 27', 'Apple Watch For Your Kids', 'Apps by Apple', 'Apple Fitness+', 'Education']
    ],
    'AirPods' => [
        'category' => 'airpods',
        'explore' => ['AirPods 5', 'AirPods Pro 3', 'AirPods Max 2', 'Compare AirPods'],
        'shop' => ['Shop AirPods', 'Shop AirPods 5', 'Shop AirPods Pro 3', 'Shop AirPods Max 2', 'AirPods Accessories'],
        'more' => ['AirPods Support', 'AppleCare', 'Apple Music', 'Apple Fitness+']
    ],
    'Home' => [
        'category' => 'home',
        'explore' => ['Apple HomeView', 'Apple TV 4K', 'HomePod', 'HomePod mini 2'],
        'shop' => ['Shop Home', 'Shop Home Accessories', 'Personal Setup'],
        'more' => ['Apple TV Support', 'HomePod Support', 'AppleCare for Apple TV', 'AppleCare for HomePod', 'Apple TV app', 'Apple TV', 'Home app', 'Apple Music', 'AirPlay']
    ],
    'Entertainment' => [
        'category' => 'entertainment',
        'explore' => ['Apple TV', 'Apple Music', 'Apple Arcade', 'Apple Fitness+', 'Apple Podcasts', 'Apple Books', 'App Store'],
        'shop' => ['Explore Home', 'Apple TV 4K', 'HomePod'],
        'more' => ['Apple TV Support', 'Apple Music Support', 'Subscriptions', 'Apps by Apple']
    ],
    'Accessories' => [
        'category' => 'accessories',
        'explore' => ['Shop Accessories', 'Shop All Accessories', 'Mac', 'iPad', 'iPhone', 'Apple Watch', 'AirPods', 'Home'],
        'shop' => ['Explore Accessories', 'Made by Apple', 'Beats', 'AirTag'],
        'more' => ['Accessories Support', 'AppleCare', 'Ways to Buy']
    ],
    'Support' => [
        'category' => 'support',
        'explore' => ['iPhone', 'Mac', 'iPad', 'Watch', 'AirPods', 'Music', 'TV'],
        'shop' => ['Explore Support', 'Get Help', 'Helpful Topics', 'Community', 'Check Coverage', 'Genius Bar', 'Repair', 'Get AppleCare'],
        'more' => ['Apple Account and Password', 'Billing and Subscriptions', 'Accessibility']
    ]
];

// Original demo catalog content for each local category page.
$categoryPages = [
    'mac' => [
        'title' => 'Mac',
        'headline' => 'Find the Mac that fits your world.',
        'description' => 'Powerful laptops and desktops for work, creativity and everything in between.',
        'image' => 'images/mac.svg',
        'products' => [
            ['name' => 'MacBook Air', 'description' => 'Light, capable and ready to go wherever you do.', 'price' => 'From ₹99,900'],
            ['name' => 'MacBook Pro', 'description' => 'Serious performance for demanding projects.', 'price' => 'From ₹1,69,900'],
            ['name' => 'iMac', 'description' => 'A beautiful all-in-one desktop for your workspace.', 'price' => 'From ₹1,34,900']
        ]
    ],
    'iphone' => [
        'title' => 'iPhone',
        'headline' => 'A great iPhone for every day.',
        'description' => 'Explore distinctive designs, helpful features and cameras made for your moments.',
        'image' => 'images/phone-product.svg',
        'products' => [
            ['name' => 'iPhone Pro', 'description' => 'Advanced camera tools and powerful performance.', 'price' => 'From ₹1,19,900'],
            ['name' => 'iPhone', 'description' => 'A vibrant display and capable features for everyday use.', 'price' => 'From ₹79,900'],
            ['name' => 'iPhone essentials', 'description' => 'Find a model and finish that feels right for you.', 'price' => 'Explore available models']
        ]
    ],
    'ipad' => [
        'title' => 'iPad',
        'headline' => 'Your ideas, ready to take shape.',
        'description' => 'Meet versatile tablets for drawing, learning, creating and getting things done.',
        'image' => 'images/tablet-product.svg',
        'products' => [
            ['name' => 'iPad Pro', 'description' => 'A spacious canvas for ambitious projects.', 'price' => 'From ₹99,900'],
            ['name' => 'iPad Air', 'description' => 'A great balance of performance and portability.', 'price' => 'From ₹59,900'],
            ['name' => 'iPad mini', 'description' => 'A compact companion that goes anywhere.', 'price' => 'From ₹49,900']
        ]
    ],
    'watch' => [
        'title' => 'Apple Watch',
        'headline' => 'A little more connected to your day.',
        'description' => 'Explore watches designed to support your activity, health and everyday routines.',
        'image' => 'images/watch-product.svg',
        'products' => [
            ['name' => 'Watch Series', 'description' => 'Helpful everyday features in a versatile design.', 'price' => 'From ₹46,900'],
            ['name' => 'Watch Ultra', 'description' => 'Built for outdoor adventures and demanding days.', 'price' => 'From ₹89,900'],
            ['name' => 'Watch SE', 'description' => 'Core watch features for your daily essentials.', 'price' => 'From ₹24,900']
        ]
    ],
    'home' => [
        'title' => 'Home',
        'headline' => 'Make your home feel more like yours.',
        'description' => 'Discover simple ways to enjoy music, entertainment and connected spaces.',
        'image' => 'images/home.svg',
        'products' => [
            ['name' => 'HomePod', 'description' => 'Room-filling sound and a helpful home companion.', 'price' => 'From ₹32,900'],
            ['name' => 'HomePod mini', 'description' => 'Surprisingly rich sound in a compact design.', 'price' => 'From ₹10,900'],
            ['name' => 'Home accessories', 'description' => 'Explore useful additions for your connected home.', 'price' => 'Explore accessories']
        ]
    ],
    'airpods' => [
        'title' => 'AirPods',
        'headline' => 'Sound that goes with you.',
        'description' => 'Find wireless audio for focus, calls, music and all the moments between.',
        'image' => 'images/airpods.svg',
        'products' => [
            ['name' => 'AirPods Pro', 'description' => 'Immersive listening with a comfortable in-ear fit.', 'price' => 'From ₹24,900'],
            ['name' => 'AirPods', 'description' => 'Easy listening with a familiar open-ear design.', 'price' => 'From ₹19,900'],
            ['name' => 'Audio accessories', 'description' => 'Discover charging cases and everyday essentials.', 'price' => 'Explore accessories']
        ]
    ],
    'airtag' => [
        'title' => 'AirTag',
        'headline' => 'Keep track of the things you care about.',
        'description' => 'A small, simple way to help find everyday items through the Find My app.',
        'image' => 'images/airtag.svg',
        'products' => [
            ['name' => 'AirTag', 'description' => 'Add item tracking to keys, bags and more.', 'price' => 'From ₹3,490'],
            ['name' => 'AirTag 4-pack', 'description' => 'A convenient set for keeping track of more.', 'price' => 'From ₹11,900'],
            ['name' => 'AirTag accessories', 'description' => 'Choose a holder to keep your AirTag close.', 'price' => 'Explore accessories']
        ]
    ],
    'accessories' => [
        'title' => 'Accessories',
        'headline' => 'The details that make it yours.',
        'description' => 'Explore useful additions for your devices, workspace and everyday carry.',
        'image' => 'images/accessories.svg',
        'products' => [
            ['name' => 'Cases and protection', 'description' => 'Add a personal touch and everyday protection.', 'price' => 'Explore cases'],
            ['name' => 'Power and cables', 'description' => 'Keep your devices charged at home or on the go.', 'price' => 'Explore power'],
            ['name' => 'Audio and more', 'description' => 'Find accessories for listening, creating and working.', 'price' => 'Explore accessories']
        ]
    ],
    'entertainment' => [
        'title' => 'Entertainment',
        'headline' => 'Make more time for what you love.',
        'description' => 'Explore music, shows, games, podcasts and more across your devices.',
        'image' => 'images/home.svg',
        'products' => [
            ['name' => 'Apple TV', 'description' => 'Discover shows, films and entertainment at home.', 'price' => 'Explore Apple TV'],
            ['name' => 'Apple Music', 'description' => 'Find music, playlists and audio for every mood.', 'price' => 'Explore Apple Music'],
            ['name' => 'Apple Arcade', 'description' => 'Explore games to enjoy across your devices.', 'price' => 'Explore Apple Arcade']
        ]
    ],
    'support' => [
        'title' => 'Support',
        'headline' => 'Support for the things you use every day.',
        'description' => 'Find helpful resources for your devices, services and Apple account.',
        'image' => 'images/specialist.svg',
        'products' => [
            ['name' => 'Device support', 'description' => 'Find guidance for setting up and using your devices.', 'price' => 'Explore support'],
            ['name' => 'Repairs and coverage', 'description' => 'Learn about service, repairs and coverage options.', 'price' => 'Explore service'],
            ['name' => 'Account and billing', 'description' => 'Get help with your account, subscriptions and purchases.', 'price' => 'Get help']
        ]
    ]
];

$macLineup = [
    [
        'id' => 'macbook-neo',
        'name' => 'MacBook Neo',
        'badge' => '',
        'description' => 'A colourful, approachable Mac for everyday work, study and creativity.',
        'price' => '₹79,900',
        'monthly' => '₹6,075',
        'image' => 'images/macbook-neo.svg',
        'colors' => ['Silver', 'Blush', 'Citrus', 'Indigo'],
        'type' => 'laptop'
    ],
    [
        'id' => 'macbook-air',
        'name' => 'MacBook Air',
        'badge' => '',
        'description' => 'A thin, lightweight laptop made for work and life on the move.',
        'price' => '₹1,49,900',
        'monthly' => '₹11,658',
        'image' => 'images/macbook-air.svg',
        'colors' => ['Sky blue', 'Silver', 'Starlight', 'Midnight'],
        'type' => 'laptop'
    ],
    [
        'id' => 'macbook-pro',
        'name' => 'MacBook Pro',
        'badge' => '',
        'description' => 'A high-performance laptop for creative and professional workflows.',
        'price' => '₹2,39,900',
        'monthly' => '₹18,742',
        'image' => 'images/macbook-pro.svg',
        'colors' => ['Space black', 'Silver'],
        'type' => 'laptop'
    ],
    [
        'id' => 'imac',
        'name' => 'iMac',
        'badge' => '',
        'description' => 'A desktop computer with the display and computer together in one.',
        'price' => '₹1,74,900',
        'monthly' => '₹14,158',
        'image' => 'images/imac.svg',
        'colors' => ['Silver'],
        'type' => 'desktop'
    ],
    [
        'id' => 'mac-mini',
        'name' => 'Mac mini',
        'badge' => 'New',
        'description' => 'Compact desktop performance for a flexible workspace.',
        'price' => '₹99,900',
        'monthly' => '₹7,908',
        'image' => 'images/mac-mini.svg',
        'colors' => ['Silver'],
        'type' => 'desktop'
    ],
    [
        'id' => 'mac-studio',
        'name' => 'Mac Studio',
        'badge' => 'New',
        'description' => 'Powerful desktop performance for demanding creative work.',
        'price' => '₹2,79,900',
        'monthly' => '₹22,492',
        'image' => 'images/mac-studio.svg',
        'colors' => ['Silver'],
        'type' => 'desktop'
    ],
    [
        'id' => 'studio-display',
        'name' => 'Studio Display',
        'badge' => '',
        'description' => 'A high-resolution display designed for a detailed workspace.',
        'price' => '₹1,89,900',
        'monthly' => '₹17,229',
        'image' => 'images/studio-display.svg',
        'colors' => [],
        'type' => 'display'
    ],
    [
        'id' => 'studio-display-xdr',
        'name' => 'Studio Display XDR',
        'badge' => '',
        'description' => 'An advanced display for colour-critical creative projects.',
        'price' => '₹3,99,900',
        'monthly' => '₹36,281',
        'image' => 'images/studio-display-xdr.svg',
        'colors' => [],
        'type' => 'display'
    ]
];

$macBuyingBenefits = [
    ['title' => 'Payment options', 'description' => 'Compare available payment methods and financing options before choosing your Mac.', 'link' => 'Ways to Buy', 'url' => '#mac-payment'],
    ['title' => 'Make it your Mac', 'description' => 'Explore configurations and choose the specifications that fit your work.', 'link' => 'Explore configurations', 'url' => '#mac-lineup'],
    ['title' => 'Education pricing', 'description' => 'Eligible students and educators can explore education purchasing options.', 'link' => 'Learn about education', 'url' => '#mac-education'],
    ['title' => 'Personal Setup', 'description' => 'Get help getting started, moving files and discovering useful features.', 'link' => 'Explore setup', 'url' => '#mac-setup'],
    ['title' => 'Delivery and pickup', 'description' => 'Review delivery and pickup choices available for your location.', 'link' => 'View delivery options', 'url' => '#mac-delivery'],
    ['title' => 'Trade In', 'description' => 'Check whether an eligible device can be traded in toward a new Mac.', 'link' => 'Learn about trade-in', 'url' => '#mac-trade-in'],
    ['title' => 'Guided shopping', 'description' => 'Get one-to-one help comparing options and finding a Mac for your needs.', 'link' => 'Talk to a Specialist', 'url' => '#mac-specialist'],
    ['title' => 'Apple Store app', 'description' => 'Explore another way to browse products and manage your shopping.', 'link' => 'Explore the app', 'url' => '#mac-app']
];

$macFeatures = [
    ['eyebrow' => 'Performance and battery', 'title' => 'Ready for a full day.', 'description' => 'Choose a Mac for everyday tasks, creative projects and long work sessions.', 'image' => 'images/macbook-pro.svg'],
    ['eyebrow' => 'Apple Intelligence', 'title' => 'Useful tools, built in.', 'description' => 'Explore intelligent features for writing, creating and getting things done.', 'image' => 'images/macbook-air.svg'],
    ['eyebrow' => 'Privacy and security', 'title' => 'Your information stays yours.', 'description' => 'Mac includes privacy and security features designed to keep your data protected.', 'image' => 'images/mac.svg'],
    ['eyebrow' => 'macOS', 'title' => 'Familiar from the start.', 'description' => 'A clear, capable desktop experience with apps and tools for everyday use.', 'image' => 'images/imac.svg'],
    ['eyebrow' => 'Compatibility', 'title' => 'Your favourite apps are here.', 'description' => 'Find apps for creative work, productivity, communication and entertainment.', 'image' => 'images/mac-mini.svg'],
    ['eyebrow' => 'Built to last', 'title' => 'Made for everyday use.', 'description' => 'Explore durable designs, software updates and support throughout ownership.', 'image' => 'images/mac-studio.svg']
];

$macEcosystem = [
    ['title' => 'Mac and iPhone', 'description' => 'Share files and continue activities between devices using supported features.', 'image' => 'images/iphone.svg'],
    ['title' => 'Mac and iPad', 'description' => 'Add an iPad to your workspace for more ways to create and stay productive.', 'image' => 'images/ipad.svg'],
    ['title' => 'Mac and Apple Watch', 'description' => 'Connect your Mac experience with supported features on Apple Watch.', 'image' => 'images/watch.svg']
];

// Product cards for "The latest" section
$latestProducts = [
    [
        'badge' => 'PRE-ORDER 28 OCT',
        'title' => 'iPad mini',
        'subtitle' => 'Built for Apple Intelligence.',
        'price' => 'From ₹49,900.00‡',
        'image' => 'images/tablet-product.svg',
        'link' => '#ipad-mini'
    ],
    [
        'badge' => 'NEW',
        'title' => 'iPhone 16 Pro',
        'subtitle' => 'Hello, Apple Intelligence.',
        'price' => 'From ₹1,19,900.00‡',
        'image' => 'images/phone-product.svg',
        'link' => '#iphone-16-pro'
    ],
    [
        'badge' => 'NEW',
        'title' => 'Apple Watch Series 10',
        'subtitle' => 'Thinscredible.',
        'price' => 'From ₹46,900.00‡',
        'image' => 'images/watch-product.svg',
        'link' => '#watch-s10'
    ]
];

$storeStorySections = [
    [
        'id' => 'store-difference',
        'title' => 'The Apple Store Difference.',
        'subtitle' => 'Celebrate the season your way.',
        'style' => 'difference',
        'cards' => [
            [
                'eyebrow' => 'PERSONAL SUPPORT',
                'title' => 'A little help goes a long way.',
                'description' => 'Get friendly guidance to find the right device for your needs.',
                'image' => 'images/specialist.svg',
                'link' => 'category.php?category=iphone',
                'link_text' => 'Explore iPhone'
            ],
            [
                'eyebrow' => 'MAKE IT YOURS',
                'title' => 'Set up for what matters.',
                'description' => 'Discover devices and accessories to fit the way you work and play.',
                'image' => 'images/mac.svg',
                'link' => 'category.php?category=mac',
                'link_text' => 'Explore Mac'
            ],
            [
                'eyebrow' => 'SHOP WITH EASE',
                'title' => 'Find a buying option that works.',
                'description' => 'Browse the collection and compare products from one place.',
                'image' => 'images/accessories.svg',
                'link' => 'category.php?category=accessories',
                'link_text' => 'Browse accessories'
            ]
        ]
    ],
    [
        'id' => 'joy-starts-here',
        'title' => 'Joy starts here.',
        'subtitle' => 'Make it a season to remember.',
        'style' => 'joy',
        'cards' => [
            [
                'eyebrow' => 'A GIFT FOR EVERY DAY',
                'title' => 'Little things, big smiles.',
                'description' => 'Choose a thoughtful companion for someone special.',
                'image' => 'images/iphone.svg',
                'link' => 'category.php?category=iphone',
                'link_text' => 'Explore iPhone'
            ],
            [
                'eyebrow' => 'SHARE THE MOMENT',
                'title' => 'Make memories together.',
                'description' => 'Capture ideas, photos and everyday moments as they happen.',
                'image' => 'images/tablet-product.svg',
                'link' => 'category.php?category=ipad',
                'link_text' => 'Explore iPad'
            ],
            [
                'eyebrow' => 'A DAILY PICK-ME-UP',
                'title' => 'A little joy, wherever you go.',
                'description' => 'Find a portable way to take your favourite sounds along.',
                'image' => 'images/airpods.svg',
                'link' => 'category.php?category=airpods',
                'link_text' => 'Explore AirPods'
            ]
        ]
    ],
    [
        'id' => 'tune-in-to-joy',
        'title' => 'Tune in to joy.',
        'subtitle' => 'Discover a world of great sound.',
        'style' => 'sound',
        'cards' => [
            [
                'eyebrow' => 'PERSONAL LISTENING',
                'title' => 'Sound that moves with you.',
                'description' => 'Explore wireless audio for commutes, calls and quiet moments.',
                'image' => 'images/airpods.svg',
                'link' => 'category.php?category=airpods',
                'link_text' => 'Shop AirPods'
            ],
            [
                'eyebrow' => 'SOUND AT HOME',
                'title' => 'Bring the room to life.',
                'description' => 'Enjoy music and podcasts in the spaces you love.',
                'image' => 'images/home.svg',
                'link' => 'category.php?category=home',
                'link_text' => 'Explore Home'
            ],
            [
                'eyebrow' => 'A BETTER EVERYDAY',
                'title' => 'Your sound, your way.',
                'description' => 'Find a listening companion to suit your routine.',
                'image' => 'images/accessories.svg',
                'link' => 'category.php?category=accessories',
                'link_text' => 'Explore accessories'
            ]
        ]
    ],
    [
        'id' => 'store-accessories',
        'title' => 'Accessories.',
        'subtitle' => 'Get more attached to your devices this season.',
        'style' => 'accessories',
        'cards' => [
            [
                'eyebrow' => 'STYLE AND PROTECTION',
                'title' => 'Make your device yours.',
                'description' => 'Browse useful additions for everyday protection and personal style.',
                'image' => 'images/iphone.svg',
                'link' => 'category.php?category=accessories',
                'link_text' => 'Shop accessories'
            ],
            [
                'eyebrow' => 'POWER UP',
                'title' => 'Ready when you are.',
                'description' => 'Explore charging and power essentials for home and travel.',
                'image' => 'images/accessories.svg',
                'link' => 'category.php?category=accessories',
                'link_text' => 'Find power essentials'
            ],
            [
                'eyebrow' => 'FIND YOUR THINGS',
                'title' => 'Keep the little things close.',
                'description' => 'Discover handy extras for bags, keys and the things you carry.',
                'image' => 'images/airtag.svg',
                'link' => 'category.php?category=airtag',
                'link_text' => 'Explore AirTag'
            ]
        ]
    ],
    [
        'id' => 'apple-experience',
        'title' => 'The Apple experience.',
        'subtitle' => 'Do even more with Apple products and services.',
        'style' => 'experience',
        'cards' => [
            [
                'eyebrow' => 'CREATE',
                'title' => 'Bring your ideas to life.',
                'description' => 'Explore devices for making, building and sharing what inspires you.',
                'image' => 'images/mac.svg',
                'link' => 'category.php?category=mac',
                'link_text' => 'Explore Mac'
            ],
            [
                'eyebrow' => 'STAY IN SYNC',
                'title' => 'Your day, connected.',
                'description' => 'Find products designed to fit naturally into your everyday routine.',
                'image' => 'images/watch.svg',
                'link' => 'category.php?category=watch',
                'link_text' => 'Explore Watch'
            ],
            [
                'eyebrow' => 'ENTERTAIN',
                'title' => 'Make time for what you love.',
                'description' => 'Explore ways to enjoy shows, music and more at home.',
                'image' => 'images/home.svg',
                'link' => 'category.php?category=home',
                'link_text' => 'Explore Home'
            ]
        ]
    ],
    [
        'id' => 'savings-and-offers',
        'title' => 'Savings and offers.',
        'subtitle' => 'Exclusive deals, special stores and more.',
        'style' => 'savings',
        'cards' => [
            [
                'eyebrow' => 'PAYMENT OPTIONS',
                'title' => 'Explore flexible ways to pay.',
                'description' => 'See available payment options and offer details before you shop.',
                'image' => 'images/iphone.svg',
                'link' => 'https://www.apple.com/in/shop/ways-to-buy',
                'link_text' => 'View payment options'
            ],
            [
                'eyebrow' => 'SHOP FOR EDUCATION',
                'title' => 'A little more for learning.',
                'description' => 'Explore devices for students, educators and learning spaces.',
                'image' => 'images/tablet-product.svg',
                'link' => 'https://www.apple.com/in-edu/store',
                'link_text' => 'Explore education'
            ],
            [
                'eyebrow' => 'TRADE IN',
                'title' => 'Give a device a new chapter.',
                'description' => 'Learn about trade-in availability and eligibility for your device.',
                'image' => 'images/mac.svg',
                'link' => 'https://www.apple.com/in/shop/trade-in',
                'link_text' => 'Learn about trade-in'
            ]
        ]
    ]
];