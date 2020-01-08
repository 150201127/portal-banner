<?php

namespace kouosl\banner\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\banner\models\Bannerr;

/**
 * BannerrSearch represents the model behind the search form of `backend\models\Bannerr`.
 */
class BannerrSearch extends Bannerr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reklamid'], 'integer'],
            [['reklamadi', 'reklamkodu', 'reklamurl', 'reklamolusturan'], 'safe'],
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
        $query = Bannerr::find();

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
            'reklamid' => $this->reklamid,
            'reklamolusturan' => $this->reklamolusturan,
        ]);

        $query->andFilterWhere(['like', 'reklamadi', $this->reklamadi])
            ->andFilterWhere(['like', 'reklamkodu', $this->reklamkodu])
            ->andFilterWhere(['like', 'reklamurl', $this->reklamurl])
            ->andFilterWhere(['like', 'reklamolusturan', $this->reklamolusturan]);

        return $dataProvider;
    }
}
