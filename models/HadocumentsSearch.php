<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HaDocuments;

/**
 * HadocumentsSearch represents the model behind the search form of `app\models\hadocuments`.
 */
class HadocumentsSearch extends HaDocuments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'group_id', 'user_id'], 'integer'],
            [['ref', 'title', 'description', 'covenant', 'docs', 'create_date'], 'safe'],
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
        $query = hadocuments::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query->where(['group_id' => $params['group_id']]),
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
            'create_date' => $this->create_date,
            'cat_id' => $this->cat_id,
            'group_id' => $this->group_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'covenant', $this->covenant])
            ->andFilterWhere(['like', 'docs', $this->docs]);

        return $dataProvider;
    }

    public function searchGroupall()
    {
        $group_id =  Yii::$app->request->getQueryParam('group_id');
        $query = hadocuments::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query->where(['group_id' => $group_id]),
        ]);
        return $dataProvider;
    }

    public function searchAdmin($params) {
        $query = hadocuments::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
}
