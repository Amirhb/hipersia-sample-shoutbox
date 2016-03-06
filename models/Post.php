<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 3/6/16
 * Time: 3:18 PM
 */

namespace app\models;


class Post extends \Spot\Entity
{
    protected static $table = 'posts';
    public static function fields()
    {
        return [
            'id'           => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'title'        => ['type' => 'string', 'required' => true],
            'body'         => ['type' => 'text', 'required' => true],
            'status'       => ['type' => 'integer', 'default' => 0, 'index' => true],
            'author_id'    => ['type' => 'integer', 'required' => true],
            'date_created' => ['type' => 'datetime', 'value' => new \DateTime()]
        ];
    }
}