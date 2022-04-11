<?php use yii\helpers\Url; ?>

<div class="row justify-content-center">
    <nav class="nav nav-menu">
        <a class="nav-link active" href="/shop/index">Всё меню</a>
        <?php foreach ($data as $id): ?>
            <a class="nav-link" href="<?= Url::to(['shop/view', 'id' => $id['cat_name']]) ?>">
            <?= $id['browser_name'] ?></a>
        <?php endforeach ?>   
        <form action = "<?= Url::to(['shop/search']) ?>" method="get">
        <input type="text" style="padding: 4px" placeholder="Поиск..." name="search">
        </form>     
    </nav>
</div>
