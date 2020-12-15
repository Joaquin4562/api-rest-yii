<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mascotas".
 *
 * @property int $id_mascotas
 * @property string $nombre
 * @property string $raza
 * @property string $temperamento
 * @property int $edad
 * @property string $tamano
 * @property int $id_usuarios
 * @property string $procedencia
 * @property string $foto_mascota
 *
 * @property Usuarios $usuarios
 */
class Mascotas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mascotas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'raza', 'temperamento', 'edad', 'tamano', 'id_usuarios', 'procedencia', 'foto_mascota'], 'required'],
            [['edad', 'id_usuarios'], 'integer'],
            [['nombre', 'raza', 'temperamento', 'procedencia'], 'string', 'max' => 50],
            [['tamano'], 'string', 'max' => 30],
            [['foto_mascota'], 'string', 'max' => 120],
            [['id_usuarios'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['id_usuarios' => 'id_usuarios']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mascotas' => 'Id Mascotas',
            'nombre' => 'Nombre',
            'raza' => 'Raza',
            'temperamento' => 'Temperamento',
            'edad' => 'Edad',
            'tamano' => 'Tamano',
            'id_usuarios' => 'Id Usuarios',
            'procedencia' => 'Procedencia',
            'foto_mascota' => 'Foto Mascota',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasOne(Usuarios::className(), ['id_usuarios' => 'id_usuarios']);
    }
}
