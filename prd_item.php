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



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotto</title>
    <base href="http://<?= $_SERVER['SERVER_NAME'] ?>/agriden/">
    <!-- <base href="http://<?= $_SERVER['SERVER_NAME'] ?>/"> -->
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
    if (file_exists("./components/footerBanner/footerBanner.php")) {
        echo '<link href="./components/footerBanner/multipleFooterBanner.css" rel="stylesheet" type="text/css" />';
    }

    ?>
    <link href="./assets/css/home/prd_item.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <?php include('./components/navbar/navbar.php'); ?>

    <section class="breadcrumb pt-2 mb-1">
        <div class="container">
            <div class="breadcrumb-layout">
                <span class="text-12"><b>Home</b> > Giardino ed Esterni> Coltivazione e cura delle piante> Terriccio
                    Universale Geolia 45 L <span class="orange pointer">Torna indietro</span></span>
            </div>
        </div>
    </section>

    <section class="details-item">
        <div class="container">
            <div class="row item-images pb-3">
                <div class="col-12 col-md-6">
                    <div class="head-image border-radius-10">
                        <img class="border-radius-10" src="./assets/img/item-desktop.png" alt="img1">
                    </div>
                    <div class="footer-image">
                        <div class="swiper-container">
                            <div class="swiper swiper-footer-image ">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="./assets/img/etichetta-item.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/etichetta-item.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/img/etichetta-item.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="description-item pb-2">

                        <div class="codice medium text-14-4">CODICE 723994</div>
                        <div class="title text-18 bold">Terricco GEOLIA universale 45 L</div>
                        <div class="valutazione py-1">
                            <span class="scelto text-14 orange medium"> Scelto da 25 clienti</span>
                        </div>
                        <div class="prezz py-2 d-flex align-items-center gap-2">
                            <span class="prezzo  bold text-32">3.99€</span>
                            <span class=" medium text-18"><del>6.49€</del> </span>
                            <span class="sconto bold text-12 bg-orange text-white border-radius-5 px-2">-33%</span>
                        </div>
                        <div class="stato-consegna d-flex flex-row align-items-center gap-2 mb-md-3">
                            <div class="d-inline"></div>
                            <span class="d-inline medium ">In pronta consegna</span>
                        </div>
                        <div class="details-carrello">
                            <form>
                                <div class="border-radius-12 bg-eggshell py-3 px-2">
                                    <span class=" text-12 medium">Seleziona la variante che ti interessa</span>
                                    <div class="form-box text-14-4 medium">
                                        <div class="form-check ">
                                            <input type="radio" id="option1" name="variant" class="radio-custom"
                                                checked>
                                            <label for="option1">1 pezzo 45L - €3.99 <del>€6.49</del>
                                                <span
                                                    class="sconto bold text-12 bg-orange text-white border-radius-5 px-2">-33%</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="option2" name="variant" class="radio-custom">
                                            <label for="option2">6 pezzo 45L x6 - €22.99 <del>€24.99</del>
                                                <span
                                                    class="sconto bold text-12 bg-orange text-white border-radius-5 px-2">-33%</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="numero-prodotti mt-4 d-lg-flex flex-row align-items-center gap-2">
                                    <div class="d-inline-flex">
                                        <div class="btn-meno" onclick="changeValueCarrello('meno')" name="meno"></div>
                                        <input type="text" name="numeroProdotti" id="numeroProdotti" value="1"
                                            disabled />
                                        <div class="btn-piu" onclick="changeValueCarrello('piu')" name="meno"></div>
                                    </div>
                                    <a href="./crt.php">
                                        <!-- <button type="submit"
                                            class="bg-primary w-100 text-16 py-2 py-lg-0 border-radius-8 text-white bold mt-3 m-lg-0">AGGIUNGI
                                            AL CARRELLO</button> -->
                                        <div class="btn-primary bold px-5">AGGIUNGI AL CARRELLO</div>
                                    </a>

                                </div>
                            </form>
                            <div class="pb-4">
                                <span class="text-16 bold primary d-block pb-3">Scopri i migliori modi per utilizzare il
                                    prodotto</span>
                                <a href="./prd_item.php#link-ytb">
                                    <div
                                        class="bg-primary px-3 py-2 text-14-4 border-radius-8 text-white d-inline bold inter">
                                        VAI AL VIDEO TUTORIAL
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="description-product bg-yellow-white py-1 pb-4">
        <div class="container mt-5 medium text-18">
            <!-- Barre delle Categorie (Tab Navigation) -->
            <ul class=" d-none d-lg-flex nav nav-tabs ps-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1" data-bs-toggle="tab" data-bs-target="#content1"
                        type="button" role="tab">
                        Descrizione Articolo
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#content2" type="button"
                        role="tab">
                        Specifiche Tecniche
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3" data-bs-toggle="tab" data-bs-target="#content3" type="button"
                        role="tab">
                        Scarica la scheda tecnica
                    </button>
                </li>
            </ul>
            <!-- Dropdown Menu -->
            <div class="dropdown d-lg-none">
                <button class="btn btn-secondary " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Categoria 1 <!-- Categoria di default -->
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item active" href="#content1"
                            onclick="showTab(event, 'content1', 'Categoria 1')">Specifiche Tecniche</a></li>
                    <li><a class="dropdown-item" href="#content2"
                            onclick="showTab(event, 'content2', 'Categoria 2')">Descrizione Articolo</a></li>
                    <li><a class="dropdown-item" href="#content3"
                            onclick="showTab(event, 'content3', 'Categoria 3')">Scarica la scheda tecnica</a></li>
                </ul>
            </div>



            <!-- Contenuto delle Sezioni-->
            <div class="tab-content">
                <div class="tab-pane fade show active  p-3 medium text-18" id="content1" role="tabpanel">
                    <ul class="list-unstyled">
                        <li>Destinazione1</li>
                        <li>Destinazione Universale</li>
                        <li>Destinazione Universale</li>
                        <li>Destinazione Universale</li>
                        <li>Destinazione Universale</li>
                        <li>Destinazione Universale</li>
                        <li>Destinazione Universale</li>
                    </ul>

                </div>
                <div class="tab-pane fade  p-3 medium text-18" id="content2" role="tabpanel">
                    <p class="m-0">Destinazione 2</p>
                    <p class="m-0">Destinazione Universale</p>
                    <p class="m-0">Destinazione Universale</p>
                    <p class="m-0">Destinazione Universale</p>
                    <p class="m-0">Destinazione Universale</p>
                </div>
                <div class="tab-pane fade p-3 medium text-18" id="content3" role="tabpanel">
                    <p class="m-0">Destinazione 3</p>
                    <p class="m-0">Destinazione Universale</p>
                    <p class="m-0">Destinazione Universale</p>
                    <p class="m-0">Destinazione Universale</p>
                    <p class="m-0">Destinazione Universale</p>
                </div>
            </div>
        </div>
    </section>

    <section class="other-products bg-yellow-white">
        <div class="container  py-3">
            <div class="table-products">
                <div class="w-100 list-head">
                    <h3 class=" w-100 text-white bg-primary  py-3 ps-2 text-21 border-radius-8"> Spesso Acquistati
                        insieme</h3>
                </div>
                <div class="list-products ">
                    <div class="d-flex">
                        <div class="col-7 col-md-10 bg-yellow-white  d-md-flex flex-row">
                            <img src="./assets/img/imageExample.png" alt="example">
                            <div class="pt-2 ps-2 d-md-flex mt-auto mb-auto flex-column">
                                <h5 class="text-14-4 bold ">Terriccio GEOLIA Universale 45 L</h5>
                                <div class="stato-consegna d-flex flex-row align-items-center gap-2 mb-md-3 ">
                                    <div class="d-inline"></div>
                                    <span class="d-inline medium ">In pronta consegna</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 col-md-2">
                            <div class="text-end h-100 d-flex justify-content-end">
                                <div class="mt-auto">
                                    <span class="d-block bold text-14 ">3.99€</span>
                                    <div
                                        class="bg-primary px-3 py-2 text-14-4 border-radius-8 text-white d-inline bold inter d-block">
                                        Aggiungi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- https://www.youtube.com/watch?v=q-yWcEFSw44&list=PLQOdDmIVumrrqH1rpmuMjSJN-ewBfJghV -->
    <section class="youtube">
    <div  id="link-ytb" class="container" >
        <h3>Video Tutorial</h3>
        <p>Scopri gli articoli correlati</p>
        <div class="video">
            <iframe class="w-100" width="560" height="315"
                    src="https://www.youtube.com/watch?v=q-yWcEFSw44&list=PLQOdDmIVumrrqH1rpmuMjSJN-ewBfJghV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>
</section>


    <section class="correlati py-3">
        <div class="container">
            <div class="title d-flex text-16 lg-text-21 bold">
                <div class="icon icon-fiori-orange fiore"></div>
                <span class="ps-3">Articoli correlati</span>
            </div>
            <?php
            renderComponent('./components/multipleCards/multipleCards.php', [
                'swiperConfig' => $swiperInEvidenzia,
                'prodotti' => $prodotti
            ]);
            ?>
        </div>
    </section>

    <section class="banner-footer pb-lg-5">
        <div class="container">
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
    </section>


    <?php include('./components/footer/footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="./components/multipleCards/multipleCards.js"></script>
    <script>
        function showTab(event, tabId, categoryName) {
            event.preventDefault();
            document.querySelectorAll('.tab-pane').forEach(function (tab) {
                tab.classList.remove('active', 'show');
            });
            document.getElementById(tabId).classList.add('active', 'show');
            document.getElementById('dropdownMenuButton').textContent = categoryName;
            document.querySelectorAll('.dropdown-item').forEach(function (item) {
                item.classList.remove('active');
            });
            event.target.classList.add('active');
        }
    </script>

    <script>
        var swiper = new Swiper(".swiper-footer-image", {
            slidesPerView: 2,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        function changeValueCarrello(operazione) {
            var input = document.getElementById('numeroProdotti');
            var valoreAttuale = parseInt(input.value);
            if (operazione === 'meno') {
                if (valoreAttuale > 1) {
                    input.value = valoreAttuale - 1;
                }
            } else if (operazione === 'piu') {
                input.value = valoreAttuale + 1;
            }

        }
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