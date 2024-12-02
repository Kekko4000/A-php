<?php
$prodotti = [
    [
        'id' => 1,
        'titolo' => 'Terriccio Universale 10L',
        'quantita' => 1,
        'prezzo_prodotto' => 5.99
    ],
    [
        'id' => 2,
        'titolo' => 'Concime Liquido Universale 1L',
        'quantita' => 2,
        'prezzo_prodotto' => 7.50
    ],
    [
        'id' => 3,
        'titolo' => 'Vasi in Plastica 30cm (Set da 5)',
        'quantita' => 1,
        'prezzo_prodotto' => 12.99
    ],
    [
        'id' => 4,
        'titolo' => 'Forbici da Potatura Professionali',
        'quantita' => 3,
        'prezzo_prodotto' => 19.99
    ],
];

$totaleIniziale = 0;
foreach ($prodotti as $prodotto) {
    $totaleIniziale += $prodotto['prezzo_prodotto'] * $prodotto['quantita'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
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
    }
    if (file_exists("./components/footer/footer.php")) {
        echo '<link href="./components/footer/footer.css" rel="stylesheet" type="text/css" />';
    }
    if (file_exists("./components/multipleCards/multipleCards.php")) {
        echo '<link href="./components/multipleCards/multipleCards.css" rel="stylesheet" type="text/css" />';
    }
    ?>
    <link rel="stylesheet" href="./components/buttonQuantita/buttonQuantita.css">
    <link rel="stylesheet" href="./assets/css/home/crt.css">
</head>


<body>

    <?php include('./components/navbar/navbar.php'); ?>

    <section class="breadcrumb pt-2 mb-1">
        <div class="container">
            <span class="text-12"><b>Home</b> > Carrello <span class="orange pointer">Torna indietro</span></span>
        </div>
    </section>

    <section class="green-alert bg-primary">
        <div class="container">
            <h2 class="text-white bold text-14-4 py-2 text-lg-center">COMPLIMENTI! Hai sbloccato la spedizione grauita!
            </h2>
        </div>
    </section>
    <section class="carrello py-4">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-12 col-lg-7 ">
                        <?php foreach ($prodotti as $prodotto): ?>
                            <div class="list-products pt-2">
                                <div class="d-md-flex flex-row">
                                    <div class="carello-image">
                                        <img src="./assets/img/imageExample.png" alt="imageExample">
                                    </div>
                                    <div class="card-info d-flex justify-content-between w-100 ps-md-3">
                                        <div>
                                            <!-- Titolo del prodotto -->
                                            <span class="bold text-18 d-block"><?php echo $prodotto['titolo']; ?></span>
                                            <!-- ID del prodotto -->
                                            <span class="text-16">CODICE <?php echo $prodotto['id']; ?></span>

                                            <!-- Quantità con pulsanti -->
                                            <div class="d-flex flex-row align-items-center gap-2 py-3">
                                                <div>Qtà:</div>
                                                <!-- Pulsanti per la quantità -->
                                                <?php include('./components/buttonQuantita/buttonQuantita.php') ?>
                                            </div>

                                            <div class="d-flex align-items-center pb-3 pointer">
                                                <span class="icon icon-trash-red"></span>
                                                <span class="red text-14-4 bold">Rimuovi</span>
                                            </div>
                                        </div>

                                        <!-- Prezzo del prodotto -->
                                        <div>
                                            <span class="bold prezzo-prodotto" data-id="<?php echo $prodotto['id']; ?>"
                                                data-prezzo="<?php echo $prodotto['prezzo_prodotto']; ?>">
                                                <?php echo number_format($prodotto['prezzo_prodotto'], 2); ?>€
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Totale Prodotti e Spedizione -->
                    <div class="col-12 col-lg-5 ">
                        <div class="bg-light-green-secondary primary bold px-5 py-4">
                            <div class="d-block d-flex justify-content-between gap-2">
                                <span>Totale Prodotti</span>
                                <span id="totale-prodotti"><?php echo number_format($totaleIniziale, 2); ?>€</span>
                            </div>
                            <div class="d-block d-flex justify-content-between gap-2">
                                <span>Costo di spedizione</span>
                                <span class="d-flex align-items-center gap-1"><span
                                        class="icon icon-info-green info"></span>Calcola</span>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary bold py-3 mt-3 border-radius-4 w-100">PROCEDI AL
                            CHECKOUT</button>
                    </div>

                </div>
            </form>
        </div>
    </section>


    <?php include('./components/footer/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script>
        function changeValueCarrello(id, action) {
            var inputField = document.getElementById('numeroProdotti-' + id);
            var currentValue = parseInt(inputField.value);

            if (action === 'meno' && currentValue > 0) {
                inputField.value = currentValue - 1;
            } else if (action === 'piu') {
                inputField.value = currentValue + 1;
            }
            aggiornaTotaleProdotti();
        }
        
        function aggiornaTotaleProdotti() {
            var totale = 0;
            var prodotti = document.querySelectorAll('.prezzo-prodotto');

            prodotti.forEach(function (prodotto) {
                var id = prodotto.getAttribute('data-id');
                var prezzo = parseFloat(prodotto.getAttribute('data-prezzo'));
                var quantita = parseInt(document.getElementById('numeroProdotti-' + id).value);
                totale += prezzo * quantita;
            });
            document.getElementById('totale-prodotti').innerText = totale.toFixed(2) + '€';
        }

        aggiornaTotaleProdotti();
    </script>


</body>

</html>