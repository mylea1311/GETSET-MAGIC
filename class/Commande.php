<?php
class Commande
{

   private $id;
   private $nomCommande;
   private $dateCommande;
   private $isDelivred;


   //GETTERS 


   /**
    * return $id
    * type : integer
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * return $nomCommande
    * type : string
    */
   public function getNomCommande()
   {
      return $this->nomCommande;
   }

   /**
    * return $dateCommande
    * type : datetime
    */
   public function getDateCommande()
   {
      return $this->dateCommande;
   }

   /**
    * return $isDelivred
    * type : bool
    */
   public function getIsDelivred()
   {
      return $this->isDelivred;
   }


   // SETTERS

   /**
    * set value id
    * type : integer
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * set value nomProduit
    * type : string
    */
   public function setnomCommande($nomCommande)
   {
      $this->nomCommande = $nomCommande;
   }

   /**
    * set value dateCommande
    * type : datetime
    */
   public function setDateCommande($dateCommande)
   {
      $this->dateCommande = $dateCommande;
   }


   /**
    * set value isDelivred
    * type : bool
    */
   public function setIsDelivred($isDelivred)
   {
      $this->isDelivred = $isDelivred;
   }
}
