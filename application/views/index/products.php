<?php
    $cv = new \application\models\CvDataFactory();
    $data = $cv->getProducts();
?>
<link rel="stylesheet" href="public/css/style.css">
<div class="container-fluid">
    <div class="row fh5co-post-entry">
        <?php foreach ($data as $row): ?>
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
                <figure>
                    <a href="<?= '/product/item/id/' . $row->getProductId() ?>"><img src="<?= $row->getPhoto() ?>" alt="Image" class="img-responsive"></a>
                </figure>
                <span class="fh5co-meta"><a href="<?= '/product/item/id/' . $row->getProductId() ?>">Product</a></span>
                <h2 class="fh5co-article-title"><a href="<?= '/product/item/id/' . $row->getProductId() ?> "><?= $row->getTitle() ?></a></h2>
                <span class="fh5co-meta fh5co-date"><?= $row->getPrice() ?> UAH</span>
            </article>
        <?php endforeach; ?>
        <div class="clearfix visible-xs-block"></div>
    </div>
</div>
