<div id="quantita-<?php echo $prodotto['id']; ?>" class="numero-prodotti d-lg-flex flex-row align-items-center gap-2 ">
    <div class="d-inline-flex">
        <div class="btn-meno" onclick="changeValueCarrello('<?php echo $prodotto['id']; ?>','meno')" name="meno"></div>
        <input type="text" id="numeroProdotti-<?php echo $prodotto['id']; ?>" name="numeroProdotti" id="numeroProdotti" value="1" disabled />
        <div class="btn-piu" onclick="changeValueCarrello('<?php echo $prodotto['id']; ?>','piu')" name="meno"></div>
    </div>
</div>

