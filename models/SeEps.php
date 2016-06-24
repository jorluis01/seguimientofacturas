<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "se_eps".
 *
 * @property integer $id_eps
 * @property string $eps_nombre
 *
 * @property SeFacturas[] $seFacturas
 */
class SeEps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'se_eps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eps_nombre'], 'required'],
            [['eps_nombre'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_eps' => 'Id Eps',
            'eps_nombre' => 'Eps Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeFacturas()
    {
        return $this->hasMany(SeFacturas::className(), ['Id_eps' => 'id_eps']);
    }
}
