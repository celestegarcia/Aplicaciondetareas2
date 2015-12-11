<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recurso_humano".
 *
 * @property integer $idrecurso_humano
 * @property string $nombre
 * @property string $puesto
 * @property string $area
 * @property string $edad
 * @property string $antiguedad
 * @property string $fotografia
 *
 * @property Detalle[] $detalles
 */
class RecursoHumano extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recurso_humano';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'puesto', 'area', 'edad', 'antiguedad'], 'required'],
            [['idrecurso_humano'], 'integer'],
            [['nombre', 'puesto', 'area', 'edad', 'antiguedad', 'fotografia'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idrecurso_humano' => 'Idrecurso Humano',
            'nombre' => 'Nombre',
            'puesto' => 'Puesto',
            'area' => 'Area',
            'edad' => 'Edad',
            'antiguedad' => 'Antiguedad',
            'fotografia' => 'Fotografia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalles()
    {
        return $this->hasMany(Detalle::className(), ['recurso_humano_idrecurso_humano' => 'idrecurso_humano']);
    }
}
