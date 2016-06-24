<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "se_facturas".
 *
 * @property integer $id_facturas
 * @property string $Nu_facturas
 * @property integer $id_eps
 * @property string $Rips_facturas
 * @property string $Mega_facturas
 * @property integer $Estado
 * @property string $Oficio
 * @property string $Redicados
 * @property string $fecha
 *
 * @property SeEps $idEps
 */
class SeFacturas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'se_facturas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nu_facturas', 'id_eps', 'Rips_facturas', 'Mega_facturas', 'Estado', 'Oficio', 'Redicados'], 'required'],
            [['id_eps', 'Estado'], 'integer'],
            [['fecha'], 'safe'],
            [['Nu_facturas'], 'string', 'max' => 40],
            [['Rips_facturas', 'Mega_facturas', 'Oficio', 'Redicados'], 'string', 'max' => 60],
            [['Id_eps'], 'exist', 'skipOnError' => true, 'targetClass' => SeEps::className(), 'targetAttribute' => ['Id_eps' => 'id_eps']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_facturas' => 'Id Facturas',
            'Nu_facturas' => 'Nu Facturas',
            'id_eps' => 'Id Eps',
            'Rips_facturas' => 'Rips Facturas',
            'Mega_facturas' => 'Mega Facturas',
            'Estado' => 'Estado',
            'Oficio' => 'Oficio',
            'Redicados' => 'Redicados',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEps()
    {
        return $this->hasOne(SeEps::className(), ['id_eps' => 'id_eps']);
    }
}
