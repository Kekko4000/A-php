<?php
// Configurazione dinamica per il componente

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

$swiperZootecnica = [
  "ID" => "zootecnica",
  'breakpoints' => [
    556 => ['slidesPerView' => 2, 'spaceBetween' => 20],
    991 => ['slidesPerView' => 3, 'spaceBetween' => 20],
    1199 => ['slidesPerView' => 4, 'spaceBetween' => 20],
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
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- <base href="http://127.0.0.1/agriden/"> -->
  <base href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">

  <!-- <base href="https://test1234-1wt3.onrender.com/"> -->
  <!-- Bootstrap -->
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
  <link href="./assets/css/home/home.css" rel="stylesheet" type="text/css" />
  <link href="./assets/css/text/text-lg.css" rel="stylesheet" type="text/css" />
  <?php
  if (file_exists("./components/navbar/navbar.php")) {
    echo '<link href="./components/navbar/navbar.css" rel="stylesheet" type="text/css" />';
  }
  if (file_exists("./components/footer/footer.php")) {
    echo '<link href="./components/footer/footer.css" rel="stylesheet" type="text/css" />';
    echo '<link href="./components/navbar/modal/login/login.css" rel="stylesheet" type="text/css" />';
    echo '<link href="./components/navbar/modal/leftMenu/leftMenu.css" rel="stylesheet" type="text/css" />';
  }
  if (file_exists("./components/multipleCards/multipleCards.php")) {
    echo '<link href="./components/multipleCards/multipleCards.css" rel="stylesheet" type="text/css" />';
  }
  if (file_exists("./components/articoliBanner/articoliBanner.php")) {
    echo '<link href="./components/articoliBanner/singleBanner.css" rel="stylesheet" type="text/css" />';
  }

  ?>
</head>

<body>

  <dialog id="ferramentaDialog">
    <div class="sub-info-menu">
      <div class="header-dialog d-flex flex-row justify-content-between">
        <div>
          <img class="pointer" id="a-cancel" src="./assets/img/icon/Left-arrow.svg" alt="left arrow">
          Giardinaggio
        </div>
        <button id="cancel" class="btn-close" type="reset"></button>
      </div>
      <div class="d-flex gap-3 flex-column">
        <div>Macchine da Giardino</div>
        <div>Idropulitrici ed accessori</div>
        <div>Vasi fioriere e portavasi</div>
        <div>Coltivazione e Cura delle piante <span>Clicca qui</span></div>
        <div>Attrezzi da giardino</div>
        <div>Irrigazione</div>
      </div>
    </div>
  </dialog>



  <?php include('./components/navbar/navbar.php'); ?>


  <!-- slides -->
  <section class="slides  bg-yellow-white  py-3 pb-lg-1">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">
          <div class="d-flex flex-column gap-3 flex-lg-row">
            <div class="image d-flex flex-column flex-md-row gap-3 ">
              <div class="slide1">
                <div class="swiper mySwiper-slide1  w-100 h-100">
                  <div class="swiper-wrapper  w-100 h-100">
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img1  w-100 h-100 border-radius-24"></div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
              <div class="slide2">
                <div class="swiper mySwiper-slide2  w-100 h-100">
                  <div class="swiper-wrapper  w-100 h-100">
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                    <div class="swiper-slide img2  w-100 h-100 border-radius-24"></div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
            <div class=" offerte d-flex flex-column gap-3 flex-sm-row flex-lg-column">
              <div class="swiper mySwiper-slide3  w-100">
                <div class="swiper-wrapper">
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper mySwiper-slide4  w-100">
                <div class="swiper-wrapper">
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                  <div class="swiper-slide bg-orange border-radius-24"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
  </section>

  <!-- PrezziMigliori -->
  <section class="prezziMigliori py-4">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">
          <div class="layout">
            <div class="title">
              <h3 class="text-14-4 bold text-center">Scelte Migliori Prezzi Migliori</h3>
            </div>
            <div class="description ">
              <div>
                <div class="d-flex align-items-center gap-2 gap-lg-1 py-2 "><span
                    class="icon icon-piante-orange"></span><span class="text-12 bold xl-text-14-4">Cerca fra migliaia di
                    articoli</span></div>
                <div class="d-flex align-items-center gap-2  gap-lg-1  py-2 "><span
                    class="icon icon-animali-orange"></span><span class="text-12 bold xl-text-14-4">Ogni settimana nuove
                    offerte</span></div>
              </div>
              <div>
                <div class="d-flex align-items-center gap-2 gap-lg-1 py-2"> <span
                    class="icon icon-animaliCortile-orange"></span><span class="text-12 bold xl-text-14-4">Consegna
                    Gratuita
                    da 199€</span></div>
                <div class="d-flex align-items-center gap-2 gap-lg-1  py-2 "><span
                    class="icon icon-frutta-orange"></span><span class="text-12 bold xl-text-14-4">Ritrova il tuo
                    pollice
                    verde</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- InEvidenzia -->
  <section class="InEvidenzia mt-3 mb-lg-5 ">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">
          <div class="title d-flex text-16 lg-text-21 bold">
            <div class="icon icon-fiori-orange fiore"></div>
            <span class="ps-3">In Evidenzia</span>
          </div>
          <div class="items justify-content-center align-items-center mt-2 multipleCards">
            <?php
            renderComponent('./components/multipleCards/multipleCards.php', [
              'swiperConfig' => $swiperInEvidenzia,
              'prodotti' => $prodotti
            ]);
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pubblicita1 mb-lg-5">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">

        </div>
      </div>
    </div>
  </section>

  <section class="RowCard2 pt-3 pb-4 bg-yellow-white">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">
          <div class="title d-flex text-16 bold pt-5 d-flex justify-content-between mb-2">
            <div class="d-flex justify-content-center align-items-center">
              <div class="icon icon-fiori-orange fiore"></div>
              <span class="ps-2">Prenditi cura del tuo spazio verde</span>
            </div>
            <span class="text-16 bold gap-2 d-none  d-lg-flex justify-content-center mb"><span>Vedi tutti</span> <span
                class="icon icon-RightChevron-green RightChevron"></span></span>
          </div>
          <div class="layoutCategoria d-lg-flex flex-row">
            <a href="./search.php">
              <div class="categoriaImage d-none d-lg-inline ">
                <img class="border-radius-24" src="./assets/img/img1.png" alt="categoria1">
              </div>
            </a>
            <div class="cards">
              <?php
              renderComponent('./components/multipleCards/multipleCards.php', [
                'swiperConfig' => $swiperZootecnica,
                'prodotti' => $prodotti
              ]);
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="RowCard2 pt-3 pb-2 bg-yellow-white ">
    <div class="container-fluid container-md pb-5">
      <div class="row">
        <div class="col-12">
          <div class="title d-flex text-16 bold pt-5 d-flex justify-content-between mb-2">
            <div class="d-flex justify-content-center align-items-center">
              <div class="icon icon-animaliCortile-orange animaliCortile fiore"></div>
              <span class="ps-2">Zootecnica e Mangini</span>
            </div>
            <span class="text-16 bold gap-2 d-none  d-lg-flex justify-content-center mb"><span>Vedi tutti</span> <span
                class="icon icon-RightChevron-green RightChevron"></span></span>
          </div>
          <div class="layoutCategoria d-lg-flex flex-row">
            <div class="categoriaImage d-none d-lg-inline ">
              <img class="border-radius-24" src="./assets/img/img1.png" alt="categoria1">
            </div>
            <div class="cards">
              <?php
              renderComponent('./components/multipleCards/multipleCards.php', [
                'swiperConfig' => $swiperZootecnica,
                'prodotti' => $prodotti
              ]);
              ?>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Pubblicità -->
  <section class="pubblicita pt-2 pt-lg-5 ">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">
          <div class="d-flex flex-column flex-lg-row  gap-4 w-100">
            <div class="img primo w-100"></div>
            <div class="img secondo w-100"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Semi -->

  <section id="commenti mt-2">
    <div class="container-fluid container-md pb-5">
      <div class="row">
        <div class="col-12">
          <div class="title d-flex align-items-center pt-4 gap-3 ps-1">
            <span class="icon icon-semi-orange semi"></span>
            <span class="text-16 bold">Opinioni e Commenti dai nostri clienti</span>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Recensioni -->
  <section class="banner pb-5">
    <div class="container-fluid container-md">
      <div class="row">
        <div class="col-12">
          <div class="col-12 mb-3 text-center d-flex flex-row justify-content-between">
            <div class="text-center text-lg-start">
              <div class="title bold text-16 lg-text-32">Il Fai da Te</div>
              <div class="dub-title medium text-14 lg-text-21">Scopri l'arte del fai da te con le guide e i consigli dei
                nostri esperti</div>
            </div>
            <div class="mt-5 pointer">
              <div class="btn-secondary text-16 bold  py-2 px-3 border-radius-100">Vedi tutti</div>
            </div>
          </div>
          <div class="card-banner d-flex flex-column gap-3 flex-md-row">
            <div class="banner1 bg-primary border-radius-24 ">
              <div class="title-card">
                <img class="border-up-radius-24" src="./assets/img/bannerImg.png" alt="">
              </div>
              <div class="description-card px-4 w-100 pt-4 inter-medium">
                <span class="text-18 bold text-white d-block">Dal rubinetto di casa acqua fresca e pura con Grohe Blue
                  Home</span>
                <span class="text-16 text-white d-block pt-3 line-height-26">Acqua pura e fresca direttamente a casa
                  tua. Risparmi energia e
                  soldi e con Grohe Blue niente più...</span>
                <span class="icon icon-vector-white vector mt-4 mb-3 ms-2"></span>
              </div>
            </div>
            <div class="banner2 bg-primary border-radius-24">
              <div class="title-card">
                <img class="border-up-radius-24" src="./assets/img/bannerImg.png" alt="">
              </div>
              <div class="description-card px-4 w-100 pt-4 inter-medium">
                <span class="text-18 bold text-white d-block">Dal rubinetto di casa acqua fresca e pura con Grohe Blue
                  Home</span>
                <span class="text-16 text-white d-block pt-3 line-height-26">Forse non lo sai ma l’acqua calda sanitaria
                  (ACS) è quella che usi tutti i giorni per lavarti e compiere tante altre azioni....</span>
                <span class="icon icon-vector-white vector mt-4 mb-3 ps-1 ms-2"></span>
              </div>
              <div class="arrow-card">
              </div>
            </div>
            <div class="banner3 bg-primary border-radius-24 d-none d-lg-inline">
              <div class="title-card">
                <img class="border-up-radius-24" src="./assets/img/bannerImg.png" alt="">
              </div>
              <div class="description-card px-4 w-100 pt-4 inter-medium ">
                <span class="text-18 bold text-white d-block d">Caldaia e scaldabagno: qual è la differenza fra i
                  due?</span>
                <span class="text-16 text-white d-block pt-3 line-height-26">Forse non lo sai ma l’acqua calda sanitaria
                  (ACS) è quella che usi tutti i giorni per lavarti e compiere tante altre azioni....</span>
                <span class="icon icon-vector-white vector mt-4 mb-3 ps-1 ms-2"></span>
              </div>
              <div class="arrow-card">
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>



  <?php include('./components/footer/footer.php'); ?>




  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const updateButton = document.getElementById("detailsFerramenta");
    const cancelButton = document.getElementById("cancel");
    const aCancelButton = document.getElementById("a-cancel");
    const dialog = document.getElementById("ferramentaDialog");
    dialog.returnValue = "ferramentaDialog";

    function openCheck(dialog) {
      if (dialog.open) {
        console.log("Dialog open");
      } else {
        console.log("Dialog closed");
      }
    }

    // Update button opens a modal dialog
    updateButton.addEventListener("click", () => {
      dialog.showModal();
      openCheck(dialog);
    });

    // Form cancel button closes the dialog box
    cancelButton.addEventListener("click", () => {
      dialog.close("animalNotChosen");
      openCheck(dialog);
    });
    aCancelButton.addEventListener("click", () => {
      dialog.close("animalNotChosen");
      openCheck(dialog);
    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./components/multipleCards/multipleCards.js"></script>



  <!-- <script>
  var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      556: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      991: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1199: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });

 </script> -->



  <script>
    var swiper = new Swiper(".mySwiper2", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        556: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        991: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1199: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },
    });
  </script>

  <!-- <script>
    document.addEventListener('click', function (e) {
      const modal = document.getElementById('ModalOfferte');
      if (modal && !modal.contains(e.target) && modal.classList.contains('show')) {
        const bootstrapModal = bootstrap.Modal.getInstance(modal);
        if (bootstrapModal) {
          bootstrapModal.hide(); // Nasconde il modale manualmente
        }
      }
    });


    //non funziona il dialog
    document.addEventListener('click', function (e) {
      // Selezione del dialog e del bottone che lo apre
      const dialog = document.getElementById('ferramentaDialog');
      const openButton = document.getElementById('openDialogButton'); // ID del pulsante che apre il dialog

      // Verifica se il dialog è aperto
      if (dialog.hasAttribute('close')) {
        // Controlla se il click è fuori dal dialog
        const rect = dialog.getBoundingClientRect();
        if (
          e.clientX < rect.left ||
          e.clientX > rect.right ||
          e.clientY < rect.top ||
          e.clientY > rect.bottom &&
          e.target !== openButton
        ) {
          dialog.close();
        }
      }
    });
  </script> -->

  <script>
    var swiper = new Swiper(".mySwiper3", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        556: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        991: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1199: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper-commenti", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        556: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 5,
          spaceBetween: 20,
        },
      },
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper-slide1", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper-slide2", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper-slide3", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });
  </script>

  <script>
    var swiper = new Swiper(".mySwiper-slide4", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });
  </script>
</body>

</html>