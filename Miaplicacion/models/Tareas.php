<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas".
 *
 * @property integer $idtareas
 * @property string $nombre
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $tipo_tarea_idtipo_tarea
 *
 * @property Detalle[] $detalles
 * @property TipoTarea $tipoTareaIdtipoTarea
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'tipo_tarea_idtipo_tarea'], 'required'],
            [['idtareas', 'tipo_tarea_idtipo_tarea'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['nombre', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtareas' => 'Idtareas',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'tipo_tarea_idtipo_tarea' => 'Tipo Tarea Idtipo Tarea',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalles()
    {
        return $this->hasMany(Detalle::className(), ['tareas_idtareas' => 'idtareas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTareaIdtipoTarea()
    {
        return $this->hasOne(TipoTarea::className(), ['idtipo_tarea' => 'tipo_tarea_idtipo_tarea']);
    }
}
