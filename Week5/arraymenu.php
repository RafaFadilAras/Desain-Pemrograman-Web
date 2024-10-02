<?php
// $menu = array (
//     "Home" => "#home",
//     "About us" => array (
//         "Our Team" => "#team",
//         "Our Story" => "#story",
//         "Mission $ Vision" => "mission"
//     ),
//     "Services" => array (
//         "Web Development" => "#web",
//         "Mobile Development" => "#mobile",
//         "SEO Optimization" => "#seo"
//     ),
//     "Contact" => "#contact"
// );

// function displayMenu($menu) {
//     echo "<ul>";
//     foreach ($menu as $key => $value) {
//         if (is_array($value)) {
//             echo "<li>$key";
//             displayMenu($value);
//             echo "</li>";
//         } else {
//             echo "<li><a href='$value'>$key</a></li>";
//         }
//     }
//     echo "</ul>";
// }

// displayMenu($menu);

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);


?>