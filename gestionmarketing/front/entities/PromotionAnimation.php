<?php 

require_once "../connexion.php" ;
 class PromotionAnimation{
	
 	private $id;
    private $id_animation;
    private $value;
    private $image ;
     private $date_debut ;
     private $date_fin ;

    public function __construct($id_animation, $value,$date_debut,$date_fin,$image) {

      $this->id_animation  = $id_animation;
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
    public function getidAnimation()
    {
        return $this->id_animation;
    }
    public function setidAnimation($id_animation)
    {
        $this->id_animation=$id_animation;
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