<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $title
 * @property string $subtitle
 * @property string $image
 * @property string $description
 *
 * @property Category $category
 * @property User $user
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'user_id'], 'integer'],
            [['description'], 'string'],
            [['title', 'subtitle'], 'string', 'max' => 45],
            [['image'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Categoria',
            'user_id' => 'Usuário',
            'title' => 'Título',
            'subtitle' => 'Subtítulo',
            'image' => 'Imagem',
            'description' => 'Conteúdo',
        ];
    }

    public function beforeValidate()
    {
       $this->user_id = 1;
        return true;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
