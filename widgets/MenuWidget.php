<?php

namespace app\widgets;

use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget{
    
    public function run()
    {
        $data = new Category();
        $data = $data->getCategories();
        return $this->render('menu', ['data' => $data]);
    }

}
