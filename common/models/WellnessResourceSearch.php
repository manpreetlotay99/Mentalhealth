<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\WellnessResource;

/**
 * WellnessResourceSearch represents the model behind the search form of `common\models\WellnessResource`.
 */
class WellnessResourceSearch extends WellnessResource
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['resource_type', 'resource_title', 'resource_image', 'resource_category'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = WellnessResource::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'resource_type', $this->resource_type])
            ->andFilterWhere(['like', 'resource_title', $this->resource_title])
            ->andFilterWhere(['like', 'resource_image', $this->resource_image])
            ->andFilterWhere(['like', 'resource_category', $this->resource_category]);

        return $dataProvider;
    }
}
