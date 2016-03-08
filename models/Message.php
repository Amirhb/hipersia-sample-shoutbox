<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 3/6/16
 * Time: 3:18 PM
 */

namespace app\models;


class Message extends \Spot\Entity
{
    protected static $table = 'messages';
    public static function fields()
    {
        return [
            'id'           => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'author'       => ['type' => 'string', 'required' => true],
            'message'      => ['type' => 'text', 'required' => true],
            'date_created' => ['type' => 'datetime', 'value' => new \DateTime()]
        ];
    }
}