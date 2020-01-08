<?php

namespace kouosl\banner\models;

use Yii;

/**
 * This is the model class for table "bannerr".
 *
 * @property int $reklamid
 * @property string $reklamadi
 * @property string $reklamkodu
 * @property string $reklamurl
 * @property string $reklamolusturan
 */
class Bannerr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reklam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reklamadi', 'reklamkodu', 'reklamurl', 'reklamolusturan'], 'required'],
            [['reklamolusturan'], 'safe'],
            [['reklamadi', 'reklamkodu',  'reklamurl'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reklamid' => 'Reklam ID',
            'reklamadi' => 'Reklam Adi',
            'reklamkodu' => 'Reklam Kodu',
            'reklamurl' => 'Reklam Url',
            'reklamolusturan' => 'Reklamı Oluşturan',
        ];
    }
}
