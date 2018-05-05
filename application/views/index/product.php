<?php
    $param = \common\Router::getInstance()->getParameters();
    $cv = new \application\models\CvDataFactory();
    $data = $cv->getProduct($param['id']);
?>
<div class="row rp-b">
    <div class="col-lg-6 col-md-12 animate-box">
        <figure>
            <img src="<?= $data->getPhoto() ?>" alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive">
            <figcaption> <?= $data->getTitle() ?> </figcaption>
        </figure>
    </div>
    <div class="col-lg-6 col-md-12 cp-l animate-box">
        <h2> <?= $data->getTitle() ?> </h2>
        <p> <?= $data->getDescription() ?> </p>
        <h3>Price <?= $data->getPrice() ?> UAH </h3>
        <p> Weight <?= $data->getWeight() ?> kg </p>
    </div>
</div>