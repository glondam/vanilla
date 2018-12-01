<?php
/**
 * Created by PhpStorm.
 * User: damien
 * Date: 01/12/2018
 * Time: 19:13
 */
class band{

    private $id;
    private $name;
    private $origin;
    private $location;
    private $genre;
    private $formed;/**
 * band constructor.
 * @param $id
 */public function __construct()
{

}
/**
 * @return mixed
 */
public function getId()
{
    return $this->id;
}/**
 * @param mixed $id
 */
public function setId($id)
{
    $this->id = $id;
}/**
 * @return mixed
 */
public function getName()
{
    return $this->name;
}/**
 * @param mixed $name
 */
public function setName($name)
{
    $this->name = $name;
}/**
 * @return mixed
 */
public function getOrigin()
{
    return $this->origin;
}/**
 * @param mixed $origin
 */
public function setOrigin($origin)
{
    $this->origin = $origin;
}/**
 * @return mixed
 */
public function getLocation()
{
    return $this->location;
}/**
 * @param mixed $location
 */
public function setLocation($location)
{
    $this->location = $location;
}/**
 * @return mixed
 */
public function getGenre()
{
    return $this->genre;
}/**
 * @param mixed $genre
 */
public function setGenre($genre)
{
    $this->genre = $genre;
}/**
 * @return mixed
 */
public function getFormed()
{
    return $this->formed;
}/**
 * @param mixed $formed
 */
public function setFormed($formed)
{
    $this->formed = $formed;
}


}