<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\medicalrecord;

/**
 * medicalrecordSearch represents the model behind the search form of `common\models\medicalrecord`.
 */
class medicalrecordSearch extends medicalrecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'patient_id'], 'integer'],
            [['date', 'past_illnesses', 'surgeries', 'hospitalisation', 'allergies', 'medications', 'immunizations'], 'safe'],
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
        $query = medicalrecord::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
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
            'patient_id' => $this->patient_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'past_illnesses', $this->past_illnesses])
            ->andFilterWhere(['like', 'surgeries', $this->surgeries])
            ->andFilterWhere(['like', 'hospitalisation', $this->hospitalisation])
            ->andFilterWhere(['like', 'allergies', $this->allergies])
            ->andFilterWhere(['like', 'medications', $this->medications])
            ->andFilterWhere(['like', 'immunizations', $this->immunizations]);

        return $dataProvider;
    }
}
