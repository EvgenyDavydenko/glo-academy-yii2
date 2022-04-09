<?php

namespace app\models;

use yii\db\ActiveRecord;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {        
        return Good::find()->asArray()->all();
    }

    public function getGoodsCategories($id)
    {        
        return Good::find()->where(['category' => $id])->asArray()->all();
    }

}
