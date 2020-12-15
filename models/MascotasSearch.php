<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mascotas;

/**
 * MascotasSearch represents the model behind the search form of `app\models\Mascotas`.
 */
class MascotasSearch extends Mascotas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mascotas', 'edad', 'id_usuarios'], 'integer'],
            [['nombre', 'raza', 'temperamento', 'tamano', 'procedencia', 'foto_mascota'], 'safe'],
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
        $query = Mascotas::find();

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
            'id_mascotas' => $this->id_mascotas,
            'edad' => $this->edad,
            'id_usuarios' => $this->id_usuarios,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'raza', $this->raza])
            ->andFilterWhere(['like', 'temperamento', $this->temperamento])
            ->andFilterWhere(['like', 'tamano', $this->tamano])
            ->andFilterWhere(['like', 'procedencia', $this->procedencia])
            ->andFilterWhere(['like', 'foto_mascota', $this->foto_mascota]);

        return $dataProvider;
    }
}
