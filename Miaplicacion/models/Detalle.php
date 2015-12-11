<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle".
 *
 * @property integer $iddetalle
 * @property integer $recurso_humano_idrecurso_humano
 * @property integer $tareas_idtareas
 *
 * @property RecursoHumano $recursoHumanoIdrecursoHumano
 * @property Tareas $tareasIdtareas
 */
class Detalle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['recurso_humano_idrecurso_humano', 'tareas_idtareas'], 'required'],
            [['iddetalle', 'recurso_humano_idrecurso_humano', 'tareas_idtareas'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'iddetalle' => 'Iddetalle',
            'recurso_humano_idrecurso_humano' => 'Recurso Humano Idrecurso Humano',
            'tareas_idtareas' => 'Tareas Idtareas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecursoHumanoIdrecursoHumano()
    {
        return $this->hasOne(RecursoHumano::className(), ['idrecurso_humano' => 'recurso_humano_idrecurso_humano']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasIdtareas()
    {
        return $this->hasOne(Tareas::className(), ['idtareas' => 'tareas_idtareas']);
    }
}
