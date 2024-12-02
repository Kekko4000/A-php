<!-- <?php
// Verifica che $swiperConfig sia passato
if (!isset($swiperConfig)) {
    echo "Configurazione non trovata!";
    return; // Esci se manca la configurazione
}

// Estrai le variabili dalla configurazione
$swiperID = $swiperConfig['ID'] ?? 'defaultSwiper';
$breakpoints = $swiperConfig['breakpoints'] ?? [];
?> -->


<div class="swiper-container">
    <div id="<?php echo htmlspecialchars($swiperID); ?>"
        class="swiper <?php echo htmlspecialchars($swiperID); ?> d-flex align-items-center"
        data-swiper-config='<?php echo json_encode($swiperConfig); ?>'>
        <div class="swiper-wrapper">
            <!-- <div class="swiper-slide layoutCard bg-white pointer">
                <div class="cards d-flex flex-column align-items-center">
                    <div class="image" style="background-image: url('./assets/img/imageExample.png');"></div>
                    <div class="descrizione">
                        <span class="d-block flex align-items-center text-center"><img class="pe-2"
                                src="./assets/img/icon/green/Fastdelivery.svg" alt="fastDelivery"><span
                                class="bold text-12">Ricevilo in 2/3 Giorni</span>
                        </span>
                        <span class="d-block text-16 bold text-center">Terriccio COMPO Sana universale 10L</span>
                        <span class="d-block text-21 text-800 position-relative pt-lg-2 text-center"> <span
                                class="orange ">5.99€</span> <del class="primary text-14-4">10.99€</del> <span
                                class="bg-orange text-white text-12 p-1 border-radius-5 "> 33%</span></span>
                    </div>
                    <div class="text-center py-2 layout-btn-aggiungi">
                        <span class="btn-aggiungi text-16 medium pointer">Aggiungi</span>
                    </div>
                </div>
            </div> -->
            <?php foreach ($prodotti as $prodotto): ?>

                <div class="swiper-slide layoutCard bg-white pointer">
                    <a href="./prd_item.php">
                        <div class="cards d-flex flex-column align-items-center">
                            <div class="image" style="background-image: url('./assets/img/imageExample.png');"></div>
                            <div class="descrizione">
                                <span class="d-block flex align-items-center text-center">
                                    <img class="pe-2" src="./assets/img/icon/green/Fastdelivery.svg" alt="fastDelivery">
                                    <span class="bold text-12">Ricevilo in
                                        <?php echo htmlspecialchars($prodotto['giorni_spedizione']); ?></span>
                                </span>
                                <span class="d-block text-16 bold text-center titolo">
                                    <?php echo htmlspecialchars($prodotto['titolo']); ?>
                                </span>

                                <span class="d-block text-21 text-800 position-relative pt-lg-2 text-center bold">
                                    <?php if ($prodotto['prezzo_offerta']): ?>
                                        <span class="orange">
                                            <?php echo number_format($prodotto['prezzo_offerta'], 2); ?>€
                                        </span>
                                        <del class="primary text-14-4">
                                            <?php echo number_format($prodotto['prezzo_prodotto'], 2); ?>€
                                        </del>
                                        <span class="bg-orange text-white text-12 p-1 border-radius-5 px-1">
                                            <?php
                                            $sconto = round((($prodotto['prezzo_prodotto'] - $prodotto['prezzo_offerta']) / $prodotto['prezzo_prodotto']) * 100);
                                            echo $sconto . '%';
                                            ?>
                                        </span>
                                    <?php elseif (!$prodotto['prezzo_offerta']): ?>
                                        <span class="primary text-21">
                                            <?php echo number_format($prodotto['prezzo_prodotto'], 2); ?>€
                                        </span>
                                    <?php endif ?>
                                </span>
                            </div>
                            <div class="text-center py-2 layout-btn-aggiungi">
                                <span class="btn-aggiungi text-16 medium pointer">Aggiungi</span>
                            </div>
                        </div>
                    </a>
                </div>



            <?php endforeach; ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>