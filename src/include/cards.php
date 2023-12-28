<?php
$cards = [
    "card1" => [
        "src" => "./assets/img/cards/card-1.jpg",
        "authName" => "Luca Rossi",
        "cardTag" => "design process",
        "cardTitle" => "How to Reinstall WordPress: 5 Different Methods Depending On Your Needs",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card2" => [
        "src" => "./assets/img/cards/card-2.jpg",
        "authName" => "Sofia Petrov",
        "cardTag" => "Code Crafting",
        "cardTitle" => "Web page layout 101: website anatomy every designer needs to learn",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card3" => [
        "src" => "./assets/img/cards/card-3.jpg",
        "authName" => "Matteo Schmidt",
        "cardTag" => "design process",
        "cardTitle" => "Website Downtime: Applicable Tips on How to Prevent It",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card4" => [
        "src" => "./assets/img/cards/card-4.jpg",
        "authName" => "Eriksson Andersen",
        "cardTag" => "design process",
        "cardTitle" => "6 Ways to Leverage Facebook for Marketing Success",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card5" => [
        "src" => "./assets/img/cards/card-5.jpg",
        "authName" => "Clara Fischer",
        "cardTag" => "Software Sculpting",
        "cardTitle" => "Updating WooCommerce: A Safe and In-Depth Guide",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card6" => [
        "src" => "./assets/img/cards/card-6.jpg",
        "authName" => "Emilia Novak",
        "cardTag" => "Code Crafting",
        "cardTitle" => "WP-CLI v2 – Managing WordPress From the Terminal",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card7" => [
        "src" => "./assets/img/cards/card-7.jpg",
        "authName" => "Oliver Jensen",
        "cardTag" => "design process",
        "cardTitle" => "Social Media Image Sizes and Quick Tips for WordPress Users",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card8" => [
        "src" => "./assets/img/cards/card-8.jpg",
        "authName" => "Henrik Jansen",
        "cardTag" => "Code Crafting",
        "cardTitle" => "How to Create Outstanding Long-Form Articles in WordPress",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card9" => [
        "src" => "./assets/img/cards/card-9.jpg",
        "authName" => "Freya Müller",
        "cardTag" => "Algorithmic Journey",
        "cardTitle" => "How to Use Fiverr to Reduce Business Busywork",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card10" => [
        "src" => "./assets/img/cards/card-10.jpg",
        "authName" => "Leandro Costa",
        "cardTag" => "Code Crafting",
        "cardTitle" => "Email Marketing Best Practices for Sending Better Emails",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card11" => [
        "src" => "./assets/img/cards/card-11.jpg",
        "authName" => "Alexander Vikram",
        "cardTag" => "design process",
        "cardTitle" => "Google Site Verification: 7 Ways to Verify With Search Console",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card12" => [
        "src" => "./assets/img/cards/card-12.jpg",
        "authName" => "Elena Kovač",
        "cardTag" => "Software Sculpting",
        "cardTitle" => "Twitter Marketing Strategies to Beef up Your Social Game",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card13" => [
        "src" => "./assets/img/cards/card-13.jpg",
        "authName" => "Rafael Sáenz",
        "cardTag" => "Code Crafting",
        "cardTitle" => "The Ultimate Step-by-Step Guide on Website Usability Testing",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
    "card14" => [
        "src" => "./assets/img/cards/card-14.jpg",
        "authName" => "Clara Lindström",
        "cardTag" => "Algorithmic Journey",
        "cardTitle" => "8 Ways To Leverage LinkedIn for Marketing Success",
        "cardDesc" => "User research is the reality check every project needs. Here’s our guide to why you should be doing it — and how to get started.",
    ],
];

?>
<div class="cards-gal container">
    <?php foreach ($cards as $cardNum => $cardKey) { ?>
        <div class="card">
            <img class="card_img" src="<?= $cardKey["src"] ?>" alt="">
            <h3 class="card_auth-tag">BY <span class="card_black"><?= $cardKey["authName"] ?></span> IN <span class="card_black"><?= $cardKey["cardTag"] ?></span></h3>
            <h3 class="card_title"><?= $cardKey["cardTitle"] ?></h3>
            <p class="card_desc"><?= $cardKey["cardDesc"] ?></p>
        </div>
    <?php } ?>
</div>
<button class="btn-more">Load More</button>