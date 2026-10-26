<?php
// Load data from data.php
require_once __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store Clone</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require __DIR__ . '/partials/header.php'; ?>

    <!-- 2. Announcement Ribbon -->
    <aside class="ribbon-banner">
        <span><?= htmlspecialchars($announcement['highlight']) ?></span>
        <a href="<?= htmlspecialchars($announcement['link_url']) ?>">
            <?= htmlspecialchars($announcement['link_text']) ?> <span class="icon-circle-arrow">⊕</span>
        </a>
    </aside>

    <!-- 3. Hero Section (Gradient "Store" Title + Rangoli Art) -->
    <section class="store-hero" id="store">
        <div class="hero-content">
            <div class="hero-left">
                <h1 class="store-title">Store</h1>
            </div>
            <div class="hero-center">
                <img src="images/festive-rangoli.svg" alt="Festive decorative artwork" class="rangoli-artwork">
            </div>
            <div class="hero-right">
                <h2 class="joy-headline">Spread joy with the products you love.</h2>
                <div class="hero-links">
                    <a href="javascript:void(0)" onclick="openSpecialistChat()" class="hero-link-item">
                        Connect with a Specialist <span class="arrow-external">&#x2197;</span>
                    </a>
                    <a href="#find-store" class="hero-link-item">
                        Find an Apple Store <span class="arrow-external">&#x2197;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Product Categories (Mac, iPhone, iPad, Watch, etc.) -->
    <section class="category-section">
        <div class="category-row">
            <?php foreach ($categories as $cat): ?>
                <a href="<?= htmlspecialchars($cat['url'], ENT_QUOTES, 'UTF-8') ?>" class="category-item">
                    <div class="category-thumb">
                        <img src="<?= htmlspecialchars($cat['image']) ?>" alt="<?= htmlspecialchars($cat['alt']) ?>">
                    </div>
                    <span class="category-label"><?= htmlspecialchars($cat['name']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 5. "The latest" Section -->
    <section class="latest-section" id="latest">
        <div class="section-header">
            <h2 class="section-title">
                <span class="title-accent">The latest.</span> 
                <span class="title-muted">Meet the new arrivals this season.</span>
            </h2>
        </div>
        <div class="cards-grid">
            <?php foreach ($latestProducts as $product): ?>
                <article class="product-card">
                    <div class="card-top">
                        <span class="card-badge"><?= htmlspecialchars($product['badge']) ?></span>
                        <h3 class="card-title"><?= htmlspecialchars($product['title']) ?></h3>
                        <p class="card-subtitle"><?= htmlspecialchars($product['subtitle']) ?></p>
                    </div>
                    <div class="card-image-box">
                        <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['title']) ?>">
                    </div>
                    <div class="card-bottom">
                        <span class="card-price"><?= htmlspecialchars($product['price']) ?></span>
                        <a href="<?= htmlspecialchars($product['link']) ?>" class="card-btn">Buy</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <?php foreach ($storeStorySections as $section): ?>
        <section class="store-story-section store-story-<?= htmlspecialchars($section['style'], ENT_QUOTES, 'UTF-8') ?>"
                 id="<?= htmlspecialchars($section['id'], ENT_QUOTES, 'UTF-8') ?>">
            <div class="story-section-inner">
                <header class="story-section-header">
                    <h2>
                        <span><?= htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="story-section-subtitle"><?= htmlspecialchars($section['subtitle'], ENT_QUOTES, 'UTF-8') ?></span>
                    </h2>
                </header>
                <div class="story-card-grid">
                    <?php foreach ($section['cards'] as $card): ?>
                        <article class="story-card">
                            <div class="story-card-art">
                                <img src="<?= htmlspecialchars($card['image'], ENT_QUOTES, 'UTF-8') ?>"
                                     alt=""
                                     loading="lazy">
                            </div>
                            <div class="story-card-copy">
                                <span class="story-card-eyebrow"><?= htmlspecialchars($card['eyebrow'], ENT_QUOTES, 'UTF-8') ?></span>
                                <h3><?= htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                                <p><?= htmlspecialchars($card['description'], ENT_QUOTES, 'UTF-8') ?></p>
                                <a href="<?= htmlspecialchars($card['link'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars($card['link_text'], ENT_QUOTES, 'UTF-8') ?>
                                    <span aria-hidden="true">›</span>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endforeach; ?>

    <!-- 6. Floating Specialist Avatar (Bottom Right) -->
    <div class="specialist-floating">
        <div class="specialist-bubble" onclick="openSpecialistChat()">
            Need shopping help?
        </div>
        <button class="specialist-avatar-btn" onclick="openSpecialistChat()" title="Chat with an Apple Specialist">
            <img src="images/specialist.svg" alt="Shopping specialist">
        </button>
    </div>

    <?php require __DIR__ . '/partials/quick-links.php'; ?>
    <?php require __DIR__ . '/partials/footer.php'; ?>

    <script src="js/script.js"></script>
    <script>
        function openSpecialistChat() {
            alert("👋 Hello! Welcome to the Apple Store. An Apple Specialist will be with you shortly!");
        }
    </script>
</body>
</html>