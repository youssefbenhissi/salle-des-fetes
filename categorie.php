<?php
/**
 * Created by PhpStorm.
 * User: Pirateos
 * Date: 31-Mar-19
 * Time: 18:31
 */
class categorie
{
    private $catid;
    private $libelle;
    private $Description;
    private $theme;

    /**
     * categorie constructor.
     * @param $libelle
     * @param $Description
     * @param $theme
     */
    public function __construct($libelle, $Description, $theme)
    {
        $this->libelle = $libelle;
        $this->Description = $Description;
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * @param mixed $catid
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }


}
?>