
<div class="row justify-content-center">
    <nav class="nav nav-menu">
        <a class="nav-link active" href="/shop/index">Всё меню</a>
        <?php foreach ($data as $id): ?>
            <a class="nav-link" href="<?= yii\helpers\Url::to(['shop/view', 'id' => $id['cat_name']]) ?>">
            <?= $id['browser_name'] ?></a>
        <?php endforeach ?>        
    </nav>
</div>
