<h1>Brands</h1>

<?php foreach ($model as $brand): ?>
    <a href="<?= \yii\helpers\Url::to($brand->slug) ?>"><h4><?= $brand->title ?></h4></a>


<?php endforeach; ?>