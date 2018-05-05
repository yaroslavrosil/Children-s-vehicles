<?php
    $cv = new \application\models\CvDataFactory();
    $data = $cv->getCollections();
?>
<div class="container-fluid">
		<div class="row fh5co-post-entry">
            <?php foreach ($data as $row): ?>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
					<a href="<?= '/collection/item/id/' . $row->getCollectionId() ?>"><img src="<?= $row->getImage() ?>" alt="Image" class="img-responsive"></a>
				</figure>
				<span class="fh5co-meta"><a href="<?= '/collection/item/id/' . $row->getCollectionId() ?>">Collection</a></span>
				<h2 class="fh5co-article-title"><a href="<?= '/collection/item/id/' . $row->getCollectionId() ?> "><?= $row->getTitle() ?></a></h2>
				<span class="fh5co-meta fh5co-date"><?= $row->getTitle() ?></span>
			</article>
            <?php endforeach; ?>
			<div class="clearfix visible-xs-block"></div>
		</div>
</div>