<?php
/**
 * Created by PhpStorm.
 * User: Pirateos
 * Date: 31-Mar-19
 * Time: 18:31
 */
class wishlist
{
 private $id;
 private $idplat;
 private $idcl;

    /**
     * wishlist constructor.
     * @param $idplat
     */
    public function __construct($idplat)
    {
        $this->idplat = $idplat;
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
    public function getIdplat()
    {
        return $this->idplat;
    }

    /**
     * @param mixed $idplat
     */
    public function setIdplat($idplat)
    {
        $this->idplat = $idplat;
    }

    /**
     * @return mixed
     */
    public function getIdcl()
    {
        return $this->idcl;
    }

    /**
     * @param mixed $idcl
     */
    public function setIdcl($idcl)
    {
        $this->idcl = $idcl;
    }


}
?>