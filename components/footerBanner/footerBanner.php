<div class="banner-card bg-primary border-radius-24">
    <div class="title-card" >
        <!-- <img class="border-up-radius-24" src="<?php echo $item['img']; ?>" alt=""> -->
        <img class="border-up-radius-24" src="./assets/img/bannerImg.png" alt="">
    </div>
    <div class="description-card px-4 pt-4 inter-medium">
        <span class="title-description text-18 bold text-white d-block lg-text-42">
            <?php echo $item['titolo']; ?>
        </span>
        <span class="d-description text-16 text-white  pt-3 line-height-26">
            <?php echo $item['descrizione']; ?>
        </span>
        <div class="py-3 mt-lg-3">
            <span class="icon icon-vector-white vector mt-4 mb-3 ms-2 pointer"></span>
            <span class="info text-14-4 bold inter pointer">Scopri di più</span>
        </div>
    </div>
</div>