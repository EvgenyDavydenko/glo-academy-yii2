<?= \app\widgets\MenuWidget::widget() ?>

<div class="row justify-content-center">

<?php foreach ($goods as $good): ?>

<div class="col-4">
  <div class="card" style="width: 16rem;">
    <img src="/img/<?= $good['img'] ?>" class="card-img-top" alt="<?= $good['name'] ?>">
    <div class="card-body">
      <h5 class="card-title"><?= $good['name'] ?></h5>      
      <p class="card-text">Цена: <?= $good['price'] ?> рублей</p>
      <a href="#" class="btn btn-success">Заказать</a>
      <a href="#" class="btn btn-primary">Подробнее</a>
    </div>
  </div>
</div>

<?php endforeach ?>

</div>
