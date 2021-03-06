<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\slider]].
 *
 * @see \common\models\Slider
 */
class SliderQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Slider[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Slider|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @return \common\models\query\SliderQuery
     */
    public function published(){
        return $this->andWhere(['status'=>1]);
    }
}
