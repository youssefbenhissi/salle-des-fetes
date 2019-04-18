<?php 

require_once "../connexion.php";
 class PromotionGastro{
	
 	private $id;
    private $id_gastro;
    private $value;
     private $image ;
     private $date_debut ;
     private $date_fin ;
    public function __construct($id_gastro, $value,$date_debut,$date_fin,$image) {

      $this->id_gastro  = $id_gastro;
      $this->value = $value;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->image = $image;

    }

     public function getImage()
     {
         return $this->image;
     }


     public function setImage($image)
     {
         $this->image = $image;
     }


     public function getDateDebut()
     {
         return $this->date_debut;
     }


     public function setDateDebut($date_debut)
     {
         $this->date_debut = $date_debut;
     }

     public function getDateFin()
     {
         return $this->date_fin;
     }


     public function setDateFin($date_fin)
     {
         $this->date_fin = $date_fin;
     }

    public function getid()
    {
        return $this->id;
    }
    public function setid($id)
    {
        $this->id=$id;
    }
    public function getidGastro()
    {
        return $this->id_gastro;
    }
    public function setidGastro($id_gastro)
    {
        $this->id_gastro=$id_gastro;
    }
    public function getvalue()
    {
        return $this->value;
    }
    public function setvalue($value)
    {
        $this->value = $value;
    }
}




?>