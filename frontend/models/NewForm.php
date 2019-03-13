<?php
/**
 * Created by PhpStorm.
 * User: NEK
 * Date: 25.02.2019
 * Time: 19:54
 */

namespace frontend\models;

use yii\base\Model;

class NewForm extends Model
{
    public $name;
    public $age;
    public $gender;
    public $comment;


    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'age',  'comment'], 'required'],
            // email has to be a valid email address
            [['age'], 'numeric','min=>16'],
            // verifyCode needs to be entered correctly
            ['name','string','min =>2'],
        ];

    }
    public function showData(){
        $html="<div> Name:.$this->name.</div>";
        $html="<div> Age:.$this->age.</div>";
        $html="<div> Gender:.$this->gender.</div>";
        $html="<div> Name:.$this->name.</div>";
    }



    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }

}