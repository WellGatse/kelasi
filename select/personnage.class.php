<?php
class personnage{
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_experience;
    private $_niveau;



    public function hydrate(array $donnees){
        if(isset($donnees['id'])){
            $this->setId($donnees['id']);
        }
        if(isset($donnees['nom'])){
            $this->setNom($donnees['nom']);
        }
        if(isset($donnees['nom'])){
            $this->setNom($donnees['nom']);
        }
    }

    
    //liste des getters

    public function id(){
       return $this->_id;
    }

    public function nom(){
        return $this->_nom;
     }

     public function forcePerso(){
        return $this->_forcePerso;
     }

     public function degats(){
        return $this->_degats;
     }

     public function experience(){
        return $this->_experience;
     }

     public function niveau(){
        return $this->_niveau;
     }

     //liste des setters

     public function setId($id){
        $id = (int) $id;
        if($id>0){
          return   $this->_id = $id;
        }
     }

     public function setNom($nom){
        if(is_string($nom)){
           return $this->_nom = $nom;
        }
     }
     public function setforcePerso($forcePerso){
        $forcePerso = (int) $forcePerso;
        if($forcePerso>=1 AND $forcePerso<=100){
            $this->_forcePerso = $forcePerso;
        }
     }
     public function setdegats($degats){
        $degats = (int) $degats;
        if($degats>=0 AND $degats<=100){
            $this->_degats = $degats;
        }
     }
     public function setexperience($experience){
        $experience = (int) $experience;
        if($experience>=1 AND $experience<=100){
            $this->_experience = $experience;
        }
     }
     public function setniveau($niveau){
        $niveau = (int) $niveau;
        if($niveau>=1 AND $niveau<=100){
            $this->_niveau = $niveau;
        }
     }

}

 ?>

