<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/19/15
 * Time: 2:18 PM
 */
// models/Product.php
class Product
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
