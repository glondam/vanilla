<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 01/12/2018
 * Time: 19:12
 */
class genre{

    private $id;
    private $name;

    /**
     * genre constructor.
     * @param $id
     * @param $name
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}