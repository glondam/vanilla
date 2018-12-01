<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 01/12/2018
 * Time: 19:06
 */
class mp3{

private $id;
private $title;
private $album;

    /**
     * mp3 constructor.
     * @param $id
     * @param $title
     * @param $album
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param mixed $album
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }




}
