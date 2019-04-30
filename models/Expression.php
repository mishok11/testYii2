<?php


namespace app\models;


use yii\base\Model;

class Expression extends Model {
    public $expression;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['expression', 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'expression' => 'Вираз для перевірки',
        ];
    }

    public function clear(){
       return $this->expression = preg_replace('/[^(){}\[\]]/', '', $this->expression);

    }

    public function check() {
        while (true) {
            $length = strlen($this->expression);
            $this->expression = preg_replace('/\(\)|\{\}|\[\]/', '', $this->expression);
            $lengthNew = strlen($this->expression);
            if ($length == $lengthNew) {
                break;
            }
        }
        return strlen($this->expression) == 0 ? "Дужки розставлені правильно" : "Дужки розставлені неправильно";

    }

}