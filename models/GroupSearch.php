<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Group;

/**
 * GroupSearch represents the model behind the search form of `app\models\group`.
 */
class GroupSearch extends Group
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_id'], 'integer'],
            [['name', 'create_date'], 'safe'],
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
        // $query = group::find();
        $query = group::find()->where(['cat_id' => 1]);

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
            'create_date' => $this->create_date,
            'cat_id' => $this->cat_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
    // public function searchGroup() {

    //     $cat_id =  Yii::$app->request->getQueryParam('cat_id');
    //     $query = group::find();
    //     $dataProvider = new ActiveDataProvider([
    //         'query' => $query->where(['cat_id' => $cat_id]),
    //     ]);
    //     return $dataProvider;
    // }
    public function searchIndex()
    {
        $query = group::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    // ไตรมาส 1

    public function searchHa()
    {

        $query = group::find()->where(['cat_id' => 3]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHad()
    {

        $query = group::find()->where(['cat_id' => 2]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHadc()
    {

        $query = group::find()->where(['cat_id' => 4]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHadcc()
    {

        $query = group::find()->where(['cat_id' => 5]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHade()
    {

        $query = group::find()->where(['cat_id' => 6]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHadea()
    {

        $query = group::find()->where(['cat_id' => 7]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHadeb()
    {

        $query = group::find()->where(['cat_id' => 8]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHadec()
    {

        $query = group::find()->where(['cat_id' => 9]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchHaded()
    {

        $query = group::find()->where(['cat_id' => 10]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    // ไตรมาส 2

    public function searchIndicators1()
    {

        $query = group::find()->where(['cat_id' => 12]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators2()
    {

        $query = group::find()->where(['cat_id' => 13]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3()
    {

        $query = group::find()->where(['cat_id' => 14]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4()
    {

        $query = group::find()->where(['cat_id' => 15]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators5()
    {

        $query = group::find()->where(['cat_id' => 16]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators6()
    {

        $query = group::find()->where(['cat_id' => 17]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators7()
    {

        $query = group::find()->where(['cat_id' => 18]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators8()
    {

        $query = group::find()->where(['cat_id' => 19]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators9()
    {

        $query = group::find()->where(['cat_id' => 20]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators10()
    {

        $query = group::find()->where(['cat_id' => 21]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators11()
    {

        $query = group::find()->where(['cat_id' => 22]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators12()
    {

        $query = group::find()->where(['cat_id' => 23]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators13()
    {

        $query = group::find()->where(['cat_id' => 24]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators14()
    {

        $query = group::find()->where(['cat_id' => 25]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators15()
    {

        $query = group::find()->where(['cat_id' => 26]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators16()
    {

        $query = group::find()->where(['cat_id' => 27]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators17()
    {

        $query = group::find()->where(['cat_id' => 28]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators18()
    {

        $query = group::find()->where(['cat_id' => 29]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators19()
    {

        $query = group::find()->where(['cat_id' => 30]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators20()
    {

        $query = group::find()->where(['cat_id' => 20]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators21()
    {

        $query = group::find()->where(['cat_id' => 21]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators22()
    {

        $query = group::find()->where(['cat_id' => 22]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators23()
    {
        $query = group::find()->where(['cat_id' => 23]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators24()
    {

        $query = group::find()->where(['cat_id' => 24]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators25()
    {

        $query = group::find()->where(['cat_id' => 25]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators26()
    {

        $query = group::find()->where(['cat_id' => 26]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators27()
    {

        $query = group::find()->where(['cat_id' => 27]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators28()
    {

        $query = group::find()->where(['cat_id' => 28]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators29()
    {

        $query = group::find()->where(['cat_id' => 29]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators30()
    {

        $query = group::find()->where(['cat_id' => 30]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators31()
    {

        $query = group::find()->where(['cat_id' => 31]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators32()
    {

        $query = group::find()->where(['cat_id' => 32]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators33()
    {

        $query = group::find()->where(['cat_id' => 33]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators34()
    {

        $query = group::find()->where(['cat_id' => 34]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators35()
    {

        $query = group::find()->where(['cat_id' => 35]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators36()
    {

        $query = group::find()->where(['cat_id' => 36]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators37()
    {

        $query = group::find()->where(['cat_id' => 37]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators38()
    {

        $query = group::find()->where(['cat_id' => 38]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators39()
    {

        $query = group::find()->where(['cat_id' => 39]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators40()
    {

        $query = group::find()->where(['cat_id' => 40]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators41()
    {

        $query = group::find()->where(['cat_id' => 41]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators42()
    {

        $query = group::find()->where(['cat_id' => 42]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators43()
    {

        $query = group::find()->where(['cat_id' => 43]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators44()
    {

        $query = group::find()->where(['cat_id' => 44]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators45()
    {

        $query = group::find()->where(['cat_id' => 45]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators46()
    {

        $query = group::find()->where(['cat_id' => 46]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators47()
    {

        $query = group::find()->where(['cat_id' => 47]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators48()
    {

        $query = group::find()->where(['cat_id' => 48]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators49()
    {

        $query = group::find()->where(['cat_id' => 49]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators50()
    {

        $query = group::find()->where(['cat_id' => 50]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators51()
    {

        $query = group::find()->where(['cat_id' => 51]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators52()
    {

        $query = group::find()->where(['cat_id' => 52]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators53()
    {

        $query = group::find()->where(['cat_id' => 53]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators54()
    {

        $query = group::find()->where(['cat_id' => 54]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }




    // ไตรมาส 3

    public function searchIndicators3_1()
    {

        $query = group::find()->where(['cat_id' => 18]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators55()
    {

        $query = group::find()->where(['cat_id' => 55]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators56()
    {

        $query = group::find()->where(['cat_id' => 56]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_2()
    {

        $query = group::find()->where(['cat_id' => 30]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_3()
    {

        $query = group::find()->where(['cat_id' => 31]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_4()
    {

        $query = group::find()->where(['cat_id' => 32]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_5()
    {

        $query = group::find()->where(['cat_id' => 33]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_6()
    {

        $query = group::find()->where(['cat_id' => 34]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_7()
    {

        $query = group::find()->where(['cat_id' => 35]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_8()
    {

        $query = group::find()->where(['cat_id' => 36]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators3_9()
    {

        $query = group::find()->where(['cat_id' => 37]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_1()
    {

        $query = group::find()->where(['cat_id' => 38]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_2()
    {

        $query = group::find()->where(['cat_id' => 39]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_3()
    {

        $query = group::find()->where(['cat_id' => 40]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_4()
    {

        $query = group::find()->where(['cat_id' => 41]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_5()
    {

        $query = group::find()->where(['cat_id' => 42]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_6()
    {

        $query = group::find()->where(['cat_id' => 43]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_7()
    {

        $query = group::find()->where(['cat_id' => 44]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_8()
    {

        $query = group::find()->where(['cat_id' => 45]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators4_9()
    {

        $query = group::find()->where(['cat_id' => 46]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    // ไตรมาส 4

    public function searchIndicators57()
    {

        $query = group::find()->where(['cat_id' => 57]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
    
    public function searchIndicators58()
    {

        $query = group::find()->where(['cat_id' => 58]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators59()
    {

        $query = group::find()->where(['cat_id' => 59]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
    
    public function searchIndicators60()
    {

        $query = group::find()->where(['cat_id' => 60]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators61()
    {

        $query = group::find()->where(['cat_id' => 61]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators62()
    {

        $query = group::find()->where(['cat_id' => 62]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators63()
    {

        $query = group::find()->where(['cat_id' => 63]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators64()
    {

        $query = group::find()->where(['cat_id' => 64]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators65()
    {

        $query = group::find()->where(['cat_id' => 65]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators66()
    {

        $query = group::find()->where(['cat_id' => 66]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators67()
    {

        $query = group::find()->where(['cat_id' => 67]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators68()
    {

        $query = group::find()->where(['cat_id' => 68]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators69()
    {

        $query = group::find()->where(['cat_id' => 69]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    // 2566 ไตรมาส 2

    public function searchIndicators70()
    {

        $query = group::find()->where(['cat_id' => 70]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators71()
    {

        $query = group::find()->where(['cat_id' => 71]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators72()
    {

        $query = group::find()->where(['cat_id' => 72]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators73()
    {

        $query = group::find()->where(['cat_id' => 73]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators74()
    {

        $query = group::find()->where(['cat_id' => 74]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators75()
    {
        $query = group::find()->where(['cat_id' => 75]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators76()
    {
        $query = group::find()->where(['cat_id' => 76]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators77()
    {
        $query = group::find()->where(['cat_id' => 77]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators78()
    {
        $query = group::find()->where(['cat_id' => 78]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators79()
    {
        $query = group::find()->where(['cat_id' => 79]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators80()
    {
        $query = group::find()->where(['cat_id' => 80]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators81()
    {
        $query = group::find()->where(['cat_id' => 81]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators82()
    {
        $query = group::find()->where(['cat_id' => 82]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators83()
    {
        $query = group::find()->where(['cat_id' => 83]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators84()
    {
        $query = group::find()->where(['cat_id' => 84]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators85()
    {
        $query = group::find()->where(['cat_id' => 85]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators86()
    {
        $query = group::find()->where(['cat_id' => 86]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators87()
    {
        $query = group::find()->where(['cat_id' => 87]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators88()
    {
        $query = group::find()->where(['cat_id' => 88]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators89()
    {
        $query = group::find()->where(['cat_id' => 89]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators90()
    {
        $query = group::find()->where(['cat_id' => 90]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
    
    public function searchIndicators91()
    {
        $query = group::find()->where(['cat_id' => 91]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators92()
    {
        $query = group::find()->where(['cat_id' => 92]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators93()
    {
        $query = group::find()->where(['cat_id' => 93]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators94()
    {
        $query = group::find()->where(['cat_id' => 94]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators95()
    {
        $query = group::find()->where(['cat_id' => 95]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators96()
    {
        $query = group::find()->where(['cat_id' => 96]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators97()
    {
        $query = group::find()->where(['cat_id' => 97]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators98()
    {
        $query = group::find()->where(['cat_id' => 98]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators99()
    {
        $query = group::find()->where(['cat_id' => 99]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators100()
    {
        $query = group::find()->where(['cat_id' => 100]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

        public function searchIndicators101()
    {
        $query = group::find()->where(['cat_id' => 101]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators102()
    {
        $query = group::find()->where(['cat_id' => 102]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators103()
    {
        $query = group::find()->where(['cat_id' => 103]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators104()
    {
        $query = group::find()->where(['cat_id' => 104]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators105()
    {
        $query = group::find()->where(['cat_id' => 105]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators106()
    {
        $query = group::find()->where(['cat_id' => 106]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators107()
    {
        $query = group::find()->where(['cat_id' => 107]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators108()
    {
        $query = group::find()->where(['cat_id' => 108]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators109()
    {
        $query = group::find()->where(['cat_id' => 109]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function searchIndicators110()
    {
        $query = group::find()->where(['cat_id' => 110]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }
}
