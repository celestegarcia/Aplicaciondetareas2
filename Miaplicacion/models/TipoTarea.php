<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_tarea".
 *
 * @property integer $idtipo_tarea
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Tareas[] $tareas
 */
class TipoTarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_tarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion'], 'required'],
            [['idtipo_tarea'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtipo_tarea' => 'Idtipo Tarea',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tareas::className(), ['tipo_tarea_idtipo_tarea' => 'idtipo_tarea']);
    }
}
