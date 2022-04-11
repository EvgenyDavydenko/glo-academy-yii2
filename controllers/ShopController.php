<?php

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;
use Yii;


class ShopController extends Controller
{


    /**
     * Displays shop page.
     *
     * @return string
     */
    public function actionIndex()
    {
        //echo __METHOD__; exit;
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));;
    }

    public function actionView($id)
    {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        return $this->render('index', compact('goods'));;
    }
    
    public function actionSearch()
    {
        $search = Yii::$app->request->get('search');
        $goods = new Good();
        $goods = $goods->getSearchResults($search);
        return $this->render('index', compact('goods'));
    }
}
