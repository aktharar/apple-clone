<?php
$footerGroups = [
    'Shop and Learn' => [
        ['Store', 'https://www.apple.com/in/shop/goto/store'],
        ['Mac', 'https://www.apple.com/in/mac/'],
        ['iPad', 'https://www.apple.com/in/ipad/'],
        ['iPhone', 'https://www.apple.com/in/iphone/'],
        ['Watch', 'https://www.apple.com/in/watch/'],
        ['AirPods', 'https://www.apple.com/in/airpods/'],
        ['TV & Home', 'https://www.apple.com/in/tv/'],
        ['AirTag', 'https://www.apple.com/in/airtag/'],
        ['Accessories', 'https://www.apple.com/in/shop/accessories/all'],
        ['Gift Cards', 'https://www.apple.com/in/shop/gift-cards']
    ],
    'Apple Wallet' => [
        ['Wallet', 'https://www.apple.com/in/wallet/']
    ],
    'Account' => [
        ['Manage Your Apple Account', 'https://appleid.apple.com/'],
        ['Apple Store Account', 'https://secure.store.apple.com/in/shop/account/home'],
        ['iCloud.com', 'https://www.icloud.com/']
    ],
    'Entertainment' => [
        ['Apple One', 'https://www.apple.com/in/apple-one/'],
        ['Apple TV', 'https://www.apple.com/in/apple-tv-plus/'],
        ['Apple Music', 'https://www.apple.com/in/apple-music/'],
        ['Apple Arcade', 'https://www.apple.com/in/apple-arcade/'],
        ['Apple Podcasts', 'https://www.apple.com/in/apple-podcasts/'],
        ['Apple Books', 'https://www.apple.com/in/apple-books/'],
        ['App Store', 'https://www.apple.com/in/app-store/']
    ],
    'Apple Store' => [
        ['Find a Store', 'https://www.apple.com/in/retail/'],
        ['Genius Bar', 'https://www.apple.com/in/retail/geniusbar/'],
        ['Today at Apple', 'https://www.apple.com/in/today/'],
        ['Apple Summer Camp', 'https://www.apple.com/in/today/camp/'],
        ['Ways to Buy', 'https://www.apple.com/in/shop/ways-to-buy'],
        ['Apple Trade In', 'https://www.apple.com/in/shop/trade-in'],
        ['Recycling Programme', 'https://www.apple.com/in/recycling/'],
        ['Order Status', 'https://secure.store.apple.com/in/shop/order/list'],
        ['Shopping Help', 'https://www.apple.com/in/shop/help']
    ],
    'For Business' => [
        ['Apple and Business', 'https://www.apple.com/in/business/']
    ],
    'For Education' => [
        ['Apple and Education', 'https://www.apple.com/in/education/'],
        ['Shop for Education', 'https://www.apple.com/in/education/k12/how-to-buy/'],
        ['Shop for College', 'https://www.apple.com/in/shop/browse/home/education_routing']
    ],
    'For Healthcare' => [
        ['Apple in Healthcare', 'https://www.apple.com/in/healthcare/'],
        ['Health on Apple Watch', 'https://www.apple.com/in/healthcare/apple-watch/']
    ],
    'Apple Values' => [
        ['Accessibility', 'https://www.apple.com/in/accessibility/'],
        ['Environment', 'https://www.apple.com/in/environment/'],
        ['Privacy', 'https://www.apple.com/in/privacy/'],
        ['Supply Chain', 'https://www.apple.com/in/supply-chain/']
    ],
    'About Apple' => [
        ['Newsroom', 'https://www.apple.com/in/newsroom/'],
        ['Apple Leadership', 'https://www.apple.com/in/leadership/'],
        ['Career Opportunities', 'https://www.apple.com/jobs/in/'],
        ['Investors', 'https://investor.apple.com/'],
        ['Ethics & Compliance', 'https://www.apple.com/compliance'],
        ['Events', 'https://www.apple.com/in/apple-events/'],
        ['Contact Apple', 'https://www.apple.com/in/contact/']
    ]
];

$legalLinks = [
    ['Privacy Policy', 'https://www.apple.com/in/privacy/privacy-policy'],
    ['Terms of Use', 'https://www.apple.com/legal/internet-services/terms/site.html'],
    ['Sales Policy', 'https://www.apple.com/in/legal/sales-support'],
    ['Legal', 'https://www.apple.com/in/legal'],
    ['Site Map', 'https://www.apple.com/in/shop/browse/sitemap']
];

$footnotes = [
    ['◊', 'No Cost EMI may be available on selected products, cards and payment terms for a limited time. Eligibility, order minimums and issuer conditions apply.'],
    ['∆', 'Instant cashback may be available on eligible purchases made with qualifying cards. Minimum spend, card limits and issuer terms apply.'],
    ['±', 'Displayed product prices are maximum retail prices and include applicable taxes.'],
    ['†', 'Special-edition products may be offered for a limited time and while supplies last. Availability, quantity limits and replacement terms may apply.'],
    ['‡', 'Trade-in availability and estimated values depend on the device, its condition and location. Eligibility and other restrictions apply.'],
    ['※', 'New-subscriber offers may have a limited redemption period and renew automatically unless cancelled. Eligibility and offer terms apply.'],
    ['≠', 'Subscriptions and third-party services may require separate plans. Features and availability vary by country, region and device.'],
    ['∞', 'Education pricing is available to eligible students, families, educators and staff. Eligibility requirements and terms apply.'],
    ['1.', 'Health and wellness feature performance can vary by person, device and conditions. Product features are not a substitute for professional medical advice.'],
    ['2.', 'Some accessories are sold separately; availability may vary by product and region.'],
    ['3.', 'AI features support select devices, languages and regions. Requirements, availability and usage limits may apply and can change over time.']
];
?>
<footer class="store-footer" id="footer">
    <div class="footer-inner">
        <nav class="footer-breadcrumb" aria-label="Breadcrumb">
            <a href="https://www.apple.com/in/" target="_blank" rel="noopener noreferrer" aria-label="Apple home">Apple</a>
            <span aria-hidden="true">›</span>
            <span>Apple Store Online</span>
        </nav>

        <nav class="footer-directory" aria-label="Footer navigation">
            <?php foreach ($footerGroups as $groupName => $links): ?>
                <section class="footer-column">
                    <h2><?= htmlspecialchars($groupName, ENT_QUOTES, 'UTF-8') ?></h2>
                    <ul>
                        <?php foreach ($links as [$label, $url]): ?>
                            <li>
                                <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                    <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            <?php endforeach; ?>
        </nav>

        <p class="footer-more-ways">
            More ways to shop: <a href="https://www.apple.com/in/retail" target="_blank" rel="noopener noreferrer">find a store</a>
            or <a href="https://locate.apple.com/" target="_blank" rel="noopener noreferrer">another retailer</a> nearby,
            or call <a href="tel:0008000401966">000800 040 1966</a>.
        </p>

        <section class="footer-footnotes" aria-labelledby="footer-footnotes-title">
            <h2 id="footer-footnotes-title">Footnotes</h2>
            <ol>
                <?php foreach ($footnotes as [$marker, $copy]): ?>
                    <li><span class="footnote-marker"><?= htmlspecialchars($marker, ENT_QUOTES, 'UTF-8') ?></span> <?= htmlspecialchars($copy, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ol>
            <p class="footer-location-note">
                Delivery options and availability may vary by location. Choose your region to see local information.
            </p>
        </section>

        <div class="footer-bottom">
            <p class="copyright">Copyright © <?= date('Y') ?> Apple Store Clone. All rights reserved.</p>
            <nav class="footer-legal-links" aria-label="Legal links">
                <?php foreach ($legalLinks as [$label, $url]): ?>
                    <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                        <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                <?php endforeach; ?>
                <a href="https://www.apple.com/choose-your-country" target="_blank" rel="noopener noreferrer">India</a>
            </nav>
        </div>

        <p class="footer-disclaimer">
            This independent educational project is not affiliated with or endorsed by Apple Inc.
            External links lead to third-party websites.
        </p>
    </div>
</footer>
