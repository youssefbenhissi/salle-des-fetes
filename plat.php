<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 29/03/2019
 * Time: 17:37
 */

class plat
{
    private $platId;
    private $platName;
    private $platDescription;
    private $platPrice;
    private $platImage;
    private $cat;

    /**
     * plat constructor.
     * @param $platName
     * @param $platDescription
     * @param $platPrice
     * @param $platImage
     * @param $cat
     */
    public function __construct($platName, $platDescription, $platPrice, $platImage, $cat)
    {
        $this->platName = $platName;
        $this->platDescription = $platDescription;
        $this->platPrice = $platPrice;
        $this->platImage = $platImage;
        $this->cat = $cat;
    }


    /**
     * @return mixed
     */
    public function getPlatId()
    {
        return $this->platId;
    }

    /**
     * @param mixed $platId
     */
    public function setPlatId($platId)
    {
        $this->platId = $platId;
    }

    /**
     * @return mixed
     */
    public function getPlatName()
    {
        return $this->platName;
    }

    /**
     * @param mixed $platName
     */
    public function setPlatName($platName)
    {
        $this->platName = $platName;
    }

    /**
     * @return mixed
     */
    public function getPlatDescription()
    {
        return $this->platDescription;
    }

    /**
     * @param mixed $platDescription
     */
    public function setPlatDescription($platDescription)
    {
        $this->platDescription = $platDescription;
    }

    /**
     * @return mixed
     */
    public function getPlatPrice()
    {
        return $this->platPrice;
    }

    /**
     * @param mixed $platPrice
     */
    public function setPlatPrice($platPrice)
    {
        $this->platPrice = $platPrice;
    }

    /**
     * @return mixed
     */
    public function getPlatImage()
    {
        return $this->platImage;
    }

    /**
     * @param mixed $platImage
     */
    public function setPlatImage($platImage)
    {
        $this->platImage = $platImage;
    }

    /**
     * @return mixed
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * @param mixed $cat
     */
    public function setCat($cat)
    {
        $this->cat = $cat;
    }


}
?>