<!-- Navbar -->
<?php include('./components/navbar/modal/login/login.php'); ?>
<?php include('./components/navbar/modal/leftMenu/leftMenu.php'); ?>


<header class=" header bg-primary">
  <nav class="container eggshell d-flex flex-column gap-2 p-2">
    <div class="d-flex justify-content-between info">
      <div class="info-head d-flex flex-row gap-sm-2 align-items-end">
        <div class="d-inline d-flex align-items-center ">
          <span class=" d-none d-md-block d-flex  icon icon-phone-white"></span>
          <span class="text-10 lg-text-14-4 d-inline">+39 1234567890</span>
        </div>
        <div class="d-inline d-flex align-items-center">
          <span class=" d-none d-md-block d-flex  icon icon-email-white"></span>
          <span class="text-10 lg-text-14-4 d-inline ps-1">customer@agriden.com</span>
        </div>
      </div>
      <div class="iconbar">
        <span class="d-none d-md-inline pt-2 pe-1">SEGUICI SU</span>
        <figure class="d-inline">
          <img class="icon pointer i-h-white" src="./assets/img/icon/white/Facebook.svg" alt="facebook" />
        </figure>
        <figure class="d-inline">
          <img class="icon pointer i-h-white" src="./assets/img/icon/white/instagram.svg" alt="instagram" />
        </figure>
      </div>
    </div>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
      <div class="hamburger d-lg-none" data-bs-toggle="modal" data-bs-target="#ModalOfferte">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <a href="./">
        <img class="logo" src="./assets/img/Logo_negative.png" alt="logo" />
      </a>
      <form class="d-none d-lg-block py-3 px-0">
        <div class="w-100 bg-format d-flex align-items-center">
          <input class="primary bold" type="text" placeholder="Cerca un prodotto, una marca, un codice..." />
          <button class="bg-orange" type="submit">
            <img class="icon" src="./assets/img/icon/search.svg">
          </button>
        </div>
      </form>
      <div class="icon-left d-flex justify-content-end personal">
        <div class="">
          <div class="d-inline i-h-white">
            <img class="icon pointer " data-bs-toggle="modal" data-bs-target="#loginModal"
              src="./assets/img/icon/white/farmer.svg" alt="farmer" />
            </d>
            <span class=" d-none d-md-inline-block d-flex  arrow_down pointer icon icon-down-chevron-white"
              data-bs-toggle="modal" data-bs-target="#loginModal" alt="farmer"></span>
          </div>
          <div class="d-inline position-relative">
            <div class="bollino d-none d-lg-block d-flex align-items-center justify-content-center">
              <div>
                <span class="text-12 bold text-white d-none d-lg-block">1</span>
              </div>
            </div>
            <img class="i-h-white icon ms-2 pointer" src="./assets/img/icon/white/trolley.svg" alt="trolley" />
          </div>
        </div>
      </div>
      <form class="form-search w-100 py-3 px-0 d-block d-lg-none">
        <div class="d-flex align-items-center bg-format w-100  ">
          <input class="primary medium text-12" type="text" placeholder="Cerca un prodotto, una marca, un codice..." />
          <button class="bg-orange" type="submit">
            <img class="icon" src="./assets/img/icon/search.svg">
          </button>
        </div>
      </form>
  </nav>
  <section class="annuncio w-100 bg-orange text-white">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center py-1 p-lg-2">
          <span class="text-10 lg-text-16 medium">FINO A MEZZANOTTE: SPEDIZIONE GRATUITA DA 199€</span>
        </div>
      </div>
    </div>
  </section>
  <section class="head-categorie bg-eggshell d-none d-lg-block">
    <div class=" container h-100">
      <div class="row">
        <div class="col-12">
          <div class="layout d-flex flex-row justify-content-between align-items-center ">
            <div class="categorie" data-bs-toggle="modal" data-bs-target="#ModalOfferte">
              <div class="pointer btn-categorie">
                <img class="d-inline" src="./assets/img/icon/white/FioriG.svg" alt="fiori">
                <span class="d-inline-flex w-auto">Tutte le Categorie</span>
                <img class="d-inline" src="./assets/img/icon/DownchevronG.svg" alt="arrow">
              </div>
            </div>
            <div class="offerte d-flex flex-row justify-content-around ms-lg-3 ms-xl-0">
              <span class="pointer lg-text-16">Offerte a Pacchetto</span>
              <span class="pointer">I Marchi Migliori</span>
              <span class="pointer">Best Seller</span>
              <span class="special pointer p-lg-1 p-xl-2 px-lg-3 text-center">SPECIALE BLACK FRIDAY</span>
            </div>
            <div class="categorie"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>