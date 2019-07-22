<?php

/**
 * Team:没有蛀牙
 * Coding by:杨越 1711300，20190712
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PediaEntryCategory;

/**
 * PediaEntryCategorySearch represents the model behind the search form of `common\models\PediaEntryCategory`.
 */
class PediaEntryCategorySearch extends PediaEntryCategory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid'], 'integer'],
            [['category'], 'safe'],
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
        $query = PediaEntryCategory::find();

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
            'cid' => $this->cid,
        ]);

        $query->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
