<h3><?= $model->title ?></h3>
<p><?= $model->description ?></p>

<ul>
    <?php foreach ($model->bikes as $bike): ?>
        <li><a href="<?= \yii\helpers\Url::to("/bike/{$bike->slug}") ?>"><?= $bike['title'] ?></a></li>
    <?php endforeach; ?>
</ul>