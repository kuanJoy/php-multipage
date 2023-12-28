<?php $topics = [
    "card1" => [
        "img" => "./assets/img/topics/top-1.svg",
        "title" => "Inspiration",
    ],
    "card2" => [
        "img" => "./assets/img/topics/top-2.svg",
        "title" => "Resource",
    ],
    "card3" => [
        "img" => "./assets/img/topics/top-3.svg",
        "title" => "Announcements",
    ],
    "card4" => [
        "img" => "./assets/img/topics/top-4.svg",
        "title" => "Entrepreneurship",
    ],
    "card5" => [
        "img" => "./assets/img/topics/top-5.svg",
        "title" => "Tutorials",
    ],
    "card6" => [
        "img" => "./assets/img/topics/top-6.svg",
        "title" => "Freelancing",
    ],
    "card7" => [
        "img" => "./assets/img/topics/top-7.svg",
        "title" => "Design Process",
    ],
    "card8" => [
        "img" => "./assets/img/topics/top-8.svg",
        "title" => "Web Design",
    ],
]


?>



<div class="topics container">
    <h3 class="topics_title">All topics</h3>
    <div class="topics_gal">
        <?php foreach ($topics as $card => $cardInfo) { ?>
            <div class="topics_card">
                <img class="topics_card-img" src="<?= $cardInfo["img"] ?>" alt="">
                <h3 class="topics_card-title"><?= $cardInfo["title"] ?></h3>
            </div>
        <?php } ?>
    </div>
</div>