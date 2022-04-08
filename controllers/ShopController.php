<?php

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;


class ShopController extends Controller
{


    /**
     * Displays shop page.
     *
     * @return string
     */
    public function actionIndex()
    {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));;
    }
    
}
