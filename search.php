<?php

function renderComponent($componentPath, $variables = [])
{
    if (file_exists($componentPath)) {
        extract($variables); // Estrai le variabili come locali
        include $componentPath;
    } else {
        echo "Componente non trovato!";
    }
}

$swiperInEvidenzia = [
    "ID" => "inEvidenzia",
    'breakpoints' => [
        576 => ['slidesPerView' => 2, 'spaceBetween' => 21],
        991 => ['slidesPerView' => 4, 'spaceBetween' => 21],
        1199 => ['slidesPerView' => 5, 'spaceBetween' => 21],
    ]
];


$prodotti =
    [
        [
            'giorni_spedizione' => '2/3 giorni',
            'titolo' => 'Terriccio COMPO Sana universale 10L aaaaa aaaaaaaaaa aaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaa aaaaa aaaaaaa',
            'prezzo_prodotto' => 10.99,
            'prezzo_offerta' => null
        ],
        [
            'giorni_spedizione' => '1/2 giorni',
            'titolo' => 'Concime granulare universale 5Kg',
            'prezzo_prodotto' => 14.99,
            'prezzo_offerta' => 9.99,
        ],
        [
            'giorni_spedizione' => '4/5 giorni',
            'titolo' => 'Guanti da giardinaggio resistenti',
            'prezzo_prodotto' => 7.99,
            'prezzo_offerta' => 5.49,
        ],
        [
            'giorni_spedizione' => '3/4 giorni',
            'titolo' => 'Vaso da fiori in ceramica 20cm',
            'prezzo_prodotto' => 12.49,
            'prezzo_offerta' => 8.99,
        ],
        [
            'giorni_spedizione' => '2/3 giorni',
            'titolo' => 'Innaffiatoio in metallo 5L',
            'prezzo_prodotto' => 19.99,
            'prezzo_offerta' => 14.99,
        ],
        [
            'giorni_spedizione' => '1/2 giorni',
            'titolo' => 'Set di utensili da giardinaggio 10 pezzi',
            'prezzo_prodotto' => 24.99,
            'prezzo_offerta' => 19.99,
        ],
        [
            'giorni_spedizione' => '2/3 giorni',
            'titolo' => 'Semi di erba per prato 1Kg',
            'prezzo_prodotto' => 8.99,
            'prezzo_offerta' => 6.99,
        ],
        [
            'giorni_spedizione' => '3/5 giorni',
            'titolo' => 'Annaffiatoio automatico per piante',
            'prezzo_prodotto' => 15.99,
            'prezzo_offerta' => 12.99,
        ],
        [
            'giorni_spedizione' => '4/5 giorni',
            'titolo' => 'Tubo per irrigazione 15m',
            'prezzo_prodotto' => 20.99,
            'prezzo_offerta' => 16.99,
        ],
        [
            'giorni_spedizione' => '2/3 giorni',
            'titolo' => 'Sottovasi in plastica 5 pezzi',
            'prezzo_prodotto' => 6.49,
            'prezzo_offerta' => 4.99,
        ],
        [
            'giorni_spedizione' => '1/2 giorni',
            'titolo' => 'Pala da giardinaggio in acciaio',
            'prezzo_prodotto' => 11.99,
            'prezzo_offerta' => 8.99,
        ],
        [
            'giorni_spedizione' => '3/4 giorni',
            'titolo' => 'Concime liquido universale 1L',
            'prezzo_prodotto' => 9.99,
            'prezzo_offerta' => 7.49,
        ],
        [
            'giorni_spedizione' => '5/6 giorni',
            'titolo' => 'Kit di irrigazione a goccia',
            'prezzo_prodotto' => 29.99,
            'prezzo_offerta' => 24.99,
        ],
        [
            'giorni_spedizione' => '2/3 giorni',
            'titolo' => 'Fioriera in legno per balcone',
            'prezzo_prodotto' => 34.99,
            'prezzo_offerta' => 27.99,
        ],
        [
            'giorni_spedizione' => '1/3 giorni',
            'titolo' => 'Sacco per compostaggio da 120L',
            'prezzo_prodotto' => 25.99,
            'prezzo_offerta' => 19.99,
        ],
        [
            'giorni_spedizione' => '3/5 giorni',
            'titolo' => 'Telo pacciamatura 10m x 1m',
            'prezzo_prodotto' => 17.99,
            'prezzo_offerta' => 13.99,
        ],
        [
            'giorni_spedizione' => '2/4 giorni',
            'titolo' => 'Trapiantatore in acciaio inox',
            'prezzo_prodotto' => 10.99,
            'prezzo_offerta' => 8.49,
        ],
        [
            'giorni_spedizione' => '3/5 giorni',
            'titolo' => 'Zappetta per giardino ergonomica',
            'prezzo_prodotto' => 14.49,
            'prezzo_offerta' => 11.49,
        ],
        [
            'giorni_spedizione' => '2/3 giorni',
            'titolo' => 'Tagliaerba manuale a spinta',
            'prezzo_prodotto' => 99.99,
            'prezzo_offerta' => 79.99,
        ],
        [
            'giorni_spedizione' => '1/2 giorni',
            'titolo' => 'Rete protettiva per piante 5x5m',
            'prezzo_prodotto' => 22.99,
            'prezzo_offerta' => 17.99,
        ],
    ];


$banner =
    [
        [
            'img' => './assets/img/bannerImg1.png',
            'titolo' => 'Dal rubinetto di casa acqua fresca e pura con Grohe Blue Home',
            'descrizione' => 'He unaffected sympathize discovered at no am conviction principles. Girl ham very how yet hill four show. Meet lain on he only size. Branched learning so subjects mistress do appetite jennings be in. Esteems up lasting no village morning do offices. Settled wishing ability musical may another set age. Diminution my apartments he attachment is entreaties announcing estimating. And total least her two whose great has which. Neat pain form eat sent sex good week. Led instrument sentiments she simplicity.'
        ],
        [
            'img' => './assets/img/bannerImg2.png',
            'titolo' => 'Vivi l’esperienza della cottura perfetta con il nuovo forno Smart',
            'descrizione' => 'Tecnologia avanzata per una cottura precisa e uniforme. Cucina come uno chef direttamente a casa tua.'
        ],
        [
            'img' => './assets/img/bannerImg3.png',
            'titolo' => 'Rilassati con il comfort del divano modulare Sogno',
            'descrizione' => 'Un design moderno e versatile per adattarsi a qualsiasi spazio. Comfort e stile in un unico prodotto.'
        ],
        [
            'img' => './assets/img/bannerImg4.png',
            'titolo' => 'Risparmia energia con le nuove lampadine a LED SmartLight',
            'descrizione' => 'Illumina la tua casa risparmiando fino al 90% di energia. Scegli tra diverse tonalità di luce per ogni ambiente.'
        ],
        [
            'img' => './assets/img/bannerImg5.png',
            'titolo' => 'Goditi l’intrattenimento senza limiti con la Smart TV UltraHD',
            'descrizione' => 'Qualità d’immagine eccezionale e accesso a tutte le tue app preferite. Porta il cinema direttamente a casa tua.'
        ]
    ];



//Rileva i prodotti per pagina (di default 8)
$prodotti_per_pagina = 15;

$pagina_corrente = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
// indice di partenza per array_slice()
$indice_inizio = ($pagina_corrente - 1) * $prodotti_per_pagina;
// Estrarrei gli 8 prodotti per la pagina corrente
$prodotti_paginati = array_slice($prodotti, $indice_inizio, $prodotti_per_pagina);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <base href="http://127.0.0.1/agriden/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link href="./assets/css/global.css" rel="stylesheet" type="text/css" />
    <?php
    if (file_exists("./components/navbar/navbar.php")) {
        echo '<link href="./components/navbar/navbar.css" rel="stylesheet" type="text/css" />';
        echo '<link href="./components/navbar/modal/login/login.css" rel="stylesheet" type="text/css" />';
        echo '<link href="./components/navbar/modal/leftMenu/leftMenu.css" rel="stylesheet" type="text/css" />';
    }
    if (file_exists("./components/footer/footer.php")) {
        echo '<link href="./components/footer/footer.css" rel="stylesheet" type="text/css" />';
    }
    if (file_exists("./components/multipleCards/multipleCards.php")) {
        echo '<link href="./components/multipleCards/multipleCards.css" rel="stylesheet" type="text/css" />';
    }

    if (file_exists("./components/gridCards/gridCards.php")) {
        echo '<link href="./components/gridCards/gridCards.css" rel="stylesheet" type="text/css" />';
    }
    if (file_exists("./components/footerBanner/footerBanner.php")) {
        echo '<link href="./components/footerBanner/footerBanner.css" rel="stylesheet" type="text/css" />';
    }
    if (file_exists("./components/articoliBanner/articoliBanner.php")) {
        echo '<link href="./components/articoliBanner/articoliBanner.css" rel="stylesheet" type="text/css" />';
    }
    ?>

    <link href="./assets/css/home/search.css" rel="stylesheet" type="text/css" />


</head>


<?php include('./components/navbar/navbar.php'); ?>

<section class="title mt-2">
    <div class="container ">
        <div class="bg-primary text-white ps-2 border-radius-10">
            <h1 class="text-16  lg-text-21 p-lg-3">Coltivazione e cura delle piante</h1>
        </div>
    </div>
</section>

<section class="breadcrumb pt-2 mb-1">
    <div class="container">
        <span class="text-12"><b>Home</b> > Giardino <span class="orange pointer">Torna indietro</span></span>
    </div>
</section>

<section class="filtro pb-2">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class=" col-12 col-lg-2">
                <button
                    class="btn-filtro bg-primary w-100  border-radius-100 text-white text-14-4 py-1 d-flex justify-content-center ">
                    Filtro Ricerca <span class="icon icon-RightArrow-green ms-2"></span>
                </button>
            </div>
            <div class="col-12 col-lg-10">
                <div class="choose-filtro py-2">
                    <div class="swiper-container px-4 px-lg-3">
                        <div class="swiper filtri  px-lg-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide pointer bg-eggshell border-radius-100 text-12 lg-text-14 py-1">
                                    Per la
                                    semina
                                </div>
                                <div class="swiper-slide pointer bg-eggshell border-radius-100 text-12 lg-text-14 py-1">
                                    <span>Contro i
                                        parassiti</span>
                                </div>
                                <div class="swiper-slide pointer bg-eggshell border-radius-100 text-12 lg-text-14 py-1">
                                    Per la
                                    semina
                                </div>
                                <div class="swiper-slide pointer bg-eggshell border-radius-100 text-12 lg-text-14 py-1">
                                    Per la
                                    semina
                                </div>
                                <div class="swiper-slide pointer bg-eggshell border-radius-100 text-12 lg-text-14 py-1">
                                    Per la
                                    semina
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="head-cards bg-evidence pt-3">
    <div class="container">
        <div class="title  ms-5 pb-2 d-flex flex-column flex-lg-row align-items-end mb-2">
            <div class="d-block d-flex flex-row align-items-center gap-2"><span class="icon icon-fiori-orange fiore d-inline-flex"></span><b class="text-16 lg-text-24 pe-1 d-block d-inline">Prezzo Vincente!</b></div>
            <span class="text-12 lg-text-21 medium p-0">Una selezione dei migliori articoli in offerta per giardino ed esterni</span>
        </div>
        <?php
        renderComponent('./components/multipleCards/multipleCards.php', [
            'swiperConfig' => $swiperInEvidenzia,
            'prodotti' => $prodotti
        ]);
        ?>
    </div>
</section>


<div class="grid-area py-3">
    <div class="container">
        <div class="grid-products">
            <?php foreach ($prodotti_paginati as $indice => $prodotto): ?>
                <?php if ($indice == 4): ?>
                    <figure class="banner d-block d-xl-none my-3">
                        <?php include('./components/adBanner/adBanner.php'); ?>
                    </figure>
                <?php endif; ?>
                <?php if ($indice == 5): ?>
                    <figure class="banner banner-desktop  d-none d-xl-block my-3">
                        <?php include('./components/adBanner/adBanner.php'); ?>
                    </figure>
                <?php endif; ?>
                <div class="height-card">
                    <?php include('./components/multipleCards/card/card.php'); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<div class="banner-footer pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">I brand in Evidenzia</h2>
                <div class="logos">
                    <div class="logos-slide">
                        <img src="./assets/img/brand.svg" alt="Brand 1">
                        <img src="./assets/img/brand.svg" alt="Brand 1">
                        <img src="./assets/img/brand.svg" alt="Brand 1">
                    </div>

                    <div class="logos-slide">
                        <img src="./assets/img/brand.svg" alt="Brand 1">
                        <img src="./assets/img/brand.svg" alt="Brand 1">
                        <img src="./assets/img/brand.svg" alt="Brand 1">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3 text-center d-flex flex-row justify-content-between">
                <div class="text-center text-lg-start">
                    <div class="title bold text-16 lg-text-32">Il Fai da Te</div>
                    <div class="dub-title medium text-14 lg-text-21">Scopri l'arte del fai da te con le guide e i
                        consigli dei nostri esperti</div>
                </div>
                <div class="mt-5 pointer">
                    <div class="btn-secondary text-16 bold  py-2 px-3 border-radius-100">Vedi tutti</div>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper swiper-footer-banner">
                    <div class="swiper-wrapper">
                        <?php foreach ($banner as $item): ?>
                            <div class="swiper-slide">
                                <?php include('./components/footerBanner/footerBanner.php') ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="row pt-4">

            <div class="pagination">
                <div class="container">
                    <div class="layout-pagination d-flex align-items-center pb-4">
                        <?php
                        // 5. Calcola il numero totale di pagine
                        $totale_prodotti = count($prodotti);
                        $totale_pagine = ceil($totale_prodotti / $prodotti_per_pagina);

                        // 6. Link di navigazione tra le pagine
                        echo '<div class="pagination">';
                        // Freccia per tornare indietro (solo se non sei sulla prima pagina)
                        if ($pagina_corrente > 1) {
                            echo '<a class="d-flex align-items-center"  href="php/search.php?pagina=' . ($pagina_corrente - 1) . '">
                                    <span class="icon icon-left-arrow-orange"></span>
                                 </a>';
                        }

                        // Ciclo per la paginazione
                        for ($i = 1; $i <= $totale_pagine; $i++) {
                            // Evidenzia la pagina corrente
                            if ($i === $pagina_corrente) {
                                echo '<div class="indice current"><strong>' . $i . '</strong></div>';
                            } else {
                                echo '<a href="search.php?pagina=' . $i . '"><div class="indice">' . $i . '</div></a>';
                            }
                        }

                        if ($pagina_corrente < $totale_pagine) {
                            echo '<a class="d-flex align-items-center" href="search.php?pagina=' . ($pagina_corrente + 1) . '">
                                    <span class="icon icon-right-arrow-orange"></span>
                                  </a>';
                        }
                        echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('./components/articoliBanner/articoliBanner.php'); ?>
<?php include('./components/footer/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./components/multipleCards/multipleCards.js"></script>



<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".filtri", {
        slidesPerView: 2,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
</script>

<script>
    var swiper = new Swiper(".swiper-footer-banner", {
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>



</body>

</html>