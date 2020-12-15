<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id_usuarios
 * @property string $nombre
 * @property string $correo
 * @property int $edad
 * @property string $contrasena
 *
 * @property Mascotas[] $mascotas
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'correo', 'edad', 'contrasena'], 'required'],
            [['edad'], 'integer'],
            [['nombre', 'correo'], 'string', 'max' => 50],
            [['contrasena'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_usuarios' => 'Id Usuarios',
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'edad' => 'Edad',
            'contrasena' => 'Contrasena',
        ];
    }

    /**
     * Gets query for [[Mascotas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMascotas()
    {
        return $this->hasMany(Mascotas::className(), ['id_usuarios' => 'id_usuarios']);
    }
}
