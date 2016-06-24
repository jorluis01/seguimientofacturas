<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SeFacturas;

/**
 * SeFacturasSeach represents the model behind the search form about `app\models\SeFacturas`.
 */
class SeFacturasSeach extends SeFacturas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_facturas', 'id_eps', 'Estado'], 'integer'],
            [['Nu_facturas', 'Rips_facturas', 'Mega_facturas', 'Oficio', 'Redicados', 'fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SeFacturas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_facturas' => $this->id_facturas,
            'id_eps' => $this->id_eps,
            'Estado' => $this->Estado,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'Nu_facturas', $this->Nu_facturas])
            ->andFilterWhere(['like', 'Rips_facturas', $this->Rips_facturas])
            ->andFilterWhere(['like', 'Mega_facturas', $this->Mega_facturas])
            ->andFilterWhere(['like', 'Oficio', $this->Oficio])
            ->andFilterWhere(['like', 'Redicados', $this->Redicados]);

        return $dataProvider;
    }
}
