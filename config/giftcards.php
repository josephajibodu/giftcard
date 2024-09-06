<?php

return [
    [
        "name" => "Apple",
        "label" => "E-Card",
        "image" => "itunes.webp",
        "slug" => "apple",
        "rule" => [
            "type" => "Alphanumeric",
            "length" => 16,
            "regex" => "^X[A-Za-z0-9]{15}$",
            "inputmask" => "X*{15}",
            "placeholder" => "Must start with an X",
            "title" => "16 characters, starting with X"
        ],
        "order" => 1,
        "requires_image" => false
    ],
    [
        "name" => "Ebay",
        "label" => "E-Card",
        "image" => "ebay.png",
        "slug" => "ebay",
        "rule" => [
            "type" => "Numeric",
            "length" => 13,
            "regex" => "^\\d{3}-\\d{3}-\\d{3}-\\d{4}$",
            "inputmask" => "999-999-999-9999",
            "placeholder" => "XXXX-XXX-XXX-XXXX",
            "title" => "13 digits in format XXX-XXX-XXX-XXXX"
        ],
        "order" => 2,
        "requires_image" => false
    ],
    [
        "name" => "Steam",
        "label" => "E-Card",
        "image" => "steam.webp",
        "slug" => "steam",
        "rule" => [
            "type" => "Alphanumeric",
            "length" => 15,
            "regex" => "^[A-Za-z0-9]{5}-[A-Za-z0-9]{5}-[A-Za-z0-9]{5}$",
            "inputmask" => "aaaaa-aaaaa-aaaaa",
            "placeholder" => "XXXXX-XXXXX-XXXXX",
            "title" => "15 characters in format XXXXX-XXXXX-XXXXX"
        ],
        "order" => 3,
        "requires_image" => false
    ],
    [
        "name" => "Sephora",
        "label" => "E-Card",
        "image" => "sephora.png",
        "slug" => "sephora",
        "rule" => [
            "type" => "Card",
            "details" => [
                [
                    "type" => "card_number",
                    "label" => "Card Number",
                    "length" => 16,
                    "regex" => "^\\d{4}-\\d{4}-\\d{4}-\\d{4}$",
                    "inputmask" => "9999-9999-9999-9999",
                    "placeholder" => "XXXX-XXXX-XXXX-XXXX",
                    "title" => "16 digits in format XXXX-XXXX-XXXX-XXXX"
                ],
                [
                    "type" => "pin",
                    "label" => "Card PIN",
                    "length" => 8,
                    "regex" => "^[A-Za-z0-9]{8}$",
                    "inputmask" => "aaaaaaaa",
                    "placeholder" => "XXXXXXXX",
                    "title" => "8 characters"
                ]
            ]
        ],
        "order" => 4,
        "requires_image" => false
    ],
    [
        "name" => "US PSN",
        "label" => "E-Card",
        "image" => "play-station.webp",
        "slug" => "us-psn",
        "rule" => [
            "type" => "Alphanumeric",
            "length" => 12,
            "regex" => "^[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}$",
            "inputmask" => "aaaa-aaaa-aaaa",
            "placeholder" => "XXXX-XXXX-XXXX",
            "title" => "12 characters in format XXXX-XXXX-XXXX"
        ],
        "order" => 5,
        "requires_image" => false
    ],
    [
        "name" => "Amazon",
        "label" => "E-Card",
        "image" => "amazon.webp",
        "slug" => "amazon",
        "rule" => [
            "type" => "Alphanumeric",
            "length" => 15,
            "regex" => "^[A-Za-z0-9]{4}-[A-Za-z0-9]{6}-[A-Za-z0-9]{5}$",
            "inputmask" => "aaaa-aaaaaa-aaaaa",
            "placeholder" => "XXXX-XXXXXX-XXXXX",
            "title" => "15 characters in format XXXX-XXXXXX-XXXXX"
        ],
        "requires_image" => false
    ],
    [
        "name" => "Google Play",
        "label" => "E-Card",
        "image" => "google-play.png",
        "slug" => "google-play",
        "rule" => [
            "type" => "Alphanumeric",
            "length" => 16,
            "regex" => "^[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}$",
            "inputmask" => "aaaa-aaaa-aaaa-aaaa",
            "placeholder" => "XXXX-XXXX-XXXX-XXXX",
            "title" => "16 characters in format XXXX-XXXX-XXXX-XXXX"
        ],
        "requires_image" => false
    ],
    [
        "name" => "Razer Gold",
        "label" => "E-Card",
        "image" => "razer.webp",
        "slug" => "razer-gold",
        "rule" => [
            "type" => "Card",
            "details" => [
                [
                    "type" => "card_number",
                    "label" => "Card Number",
                    "length" => 19,
                    "regex" => "^\\d{4}-\\d{4}-\\d{4}-\\d{4}-\\d{3}$",
                    "inputmask" => "9999-9999-9999-9999-999",
                    "placeholder" => "XXXX-XXXX-XXXX-XXXX-XXX",
                    "title" => "19 digits in format XXXX-XXXX-XXXX-XXXX-XXX"
                ],
                [
                    "type" => "pin",
                    "label" => "Card PIN",
                    "length" => 14,
                    "regex" => "^[A-Za-z0-9]{14}$",
                    "inputmask" => "aaaaaaaaaaaaaa",
                    "placeholder" => "XXXXXXXXXXXXXX",
                    "title" => "14 characters"
                ]
            ]
        ],
        "requires_image" => false
    ],
    [
        "name" => "Macy's",
        "label" => "E-Card",
        "image" => "macys.png",
        "slug" => "macys",
        "rule" => [
            "type" => "Card",
            "details" => [
                [
                    "type" => "card_number",
                    "label" => "Card Number",
                    "length" => 15,
                    "regex" => "^\\d{4}-\\d{4}-\\d{4}-\\d{3}$",
                    "inputmask" => "9999-9999-9999-999",
                    "placeholder" => "XXXX-XXXX-XXXX-XXX",
                    "title" => "15 digits in format XXXX-XXXX-XXXX-XXX"
                ],
                [
                    "type" => "pin",
                    "label" => "Card PIN",
                    "length" => 4,
                    "regex" => "^\\d{4}$",
                    "inputmask" => "9999",
                    "placeholder" => "XXXX",
                    "title" => "4 digits"
                ]
            ]
        ],
        "requires_image" => false
    ],
    [
        "name" => "US Spotify",
        "label" => "E-Card",
        "image" => "spotify.webp",
        "slug" => "us-spotify",
        "requires_image" => false
    ],
    [
        "name" => "US Hulu",
        "label" => "E-Card",
        "image" => "hulu.webp",
        "slug" => "us-hulu",
        "requires_image" => false
    ],
    [
        "name" => "US Paramount+",
        "label" => "E-Card",
        "image" => "paramount.webp",
        "slug" => "us-paramount-plus",
        "requires_image" => false
    ],
    [
        "name" => "Visa Gift",
        "label" => "E-Card",
        "image" => "visa.webp",
        "slug" => "visa-gift",
        "requires_image" => [
            "front" => true,
            "back" => true
        ]
    ],
    [
        "name" => "Visa Vanilla",
        "label" => "E-Card",
        "image" => "vanilla.webp",
        "slug" => "visa-vanilla",
        "requires_image" => [
            "front" => true,
            "back" => true
        ]
    ],
    [
        "name" => "Nordstrom",
        "label" => "E-Card",
        "image" => "nordstorm.png",
        "slug" => "nordstrom",
        "rule" => [
            "type" => "Card",
            "details" => [
                [
                    "type" => "card_number",
                    "label" => "Card Number",
                    "length" => 16,
                    "regex" => "^\\d{4}-\\d{4}-\\d{4}-\\d{4}$",
                    "inputmask" => "9999-9999-9999-9999",
                    "placeholder" => "XXXX-XXXX-XXXX-XXXX",
                    "title" => "16 digits in format XXXX-XXXX-XXXX-XXXX"
                ],
                [
                    "type" => "access_number",
                    "label" => "Access Number",
                    "length" => 8,
                    "regex" => "^[A-Za-z0-9]{8}$",
                    "inputmask" => "aaaaaaaa",
                    "placeholder" => "XXXXXXXX",
                    "title" => "8 characters"
                ]
            ]
        ],
        "requires_image" => false
    ],
    [
        "name" => "XBOX",
        "label" => "E-Card",
        "image" => "xbox.png",
        "slug" => "xbox",
        "rule" => [
            "type" => "Alphanumeric",
            "length" => 25,
            "regex" => "^[A-Za-z0-9]{5}-[A-Za-z0-9]{5}-[A-Za-z0-9]{5}-[A-Za-z0-9]{5}-[A-Za-z0-9]{5}$",
            "inputmask" => "aaaaa-aaaaa-aaaaa-aaaaa-aaaaa",
            "placeholder" => "XXXXX-XXXXX-XXXXX-XXXXX-XXXXX",
            "title" => "25 characters in format XXXXX-XXXXX-XXXXX-XXXXX-XXXXX"
        ],
        "requires_image" => false
    ],
    [
        "name" => "Airbnb",
        "label" => "E-Card",
        "image" => "airbnb.webp",
        "slug" => "airbnb",
        "requires_image" => [
            "front" => true,
            "back" => false
        ]
    ]
];