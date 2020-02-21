<?php
class Produit
{

   private $id;
   private $nomProduit;
   private $descriptionProduit;
   private $quantiteProduit;
   private $isAvailable;
   private $prix;



   //-------------------------------------------//
   ////////////CONSTRUCTEUR//////////////
   //-----------------------------------------//
   public function hydrate(array $attribut)
   {
      $this->hydrate($attribut);
   }
   public function __construct(array $attribut)
   {
      foreach ($attribut as $key => $values) {
         //on recupere les setter et on les stockent dans la variable 'method' et on recupere les premiere lettre de chaque methodes
         $method = "set" . ucfirst($key);
         // on verifie si la methode
         if (method_exists($this, $method)) {
            $this->$method($values);
         }
      }
   }
   //-------------------------------------------//
   ////////////GETTERS//////////////
   //-----------------------------------------//


   /**
    * return $id
    * type : integer
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * return $nomProduit
    * type : string
    */
   public function getNom()
   {
      return $this->nom;
   }

   /**
    * return $descriptionProduit
    * type : string
    */
   public function getdescriptionProduit()
   {
      return $this->descriptionProduit;
   }

   /**
    * return $quantiteProduit
    * type : string
    */
   public function getquantiteProduit()
   {
      return $this->quantiteProduit;
   }
   /**
    * return $isAvailable
    * type : bool
    */
   public function getIsAvailable()
   {
      return $this->isAvailable;
   }
   /**
    * return $prix
    * type : bool
    */
   public function getPrix()
   {
      return $this->prix;
   }

   //-------------------------------------------//
   ////////////SETTERS//////////////
   //-----------------------------------------//

   /**
    * set value id
    * type: integer
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * set value nomProduit
    * type: string
    */
   public function setNomProduit($nomProduit)
   {
      $this->nomProduit = $nomProduit;
   }

   /**
    * set value descriptionProduit
    * type: string
    */
   public function setDescriptionProduit($descriptionProduit)
   {
      $this->descriptionProduit = $descriptionProduit;
   }

   /**
    * set value quantiteProduit
    * type: intefer
    */
   public function setQuantiteProduit($quantiteProduit)
   {
      $this->quantiteProduit = $quantiteProduit;
   }

   /**
    * set value isAvailable
    * type: bool
    */
   public function setIsAvailable($isAvailable)
   {
      $this->isAvailable = $isAvailable;
   }

   /**
    * set value prix
    * type: float
    */
   public function setPrix($prix)
   {
      $this->prix = $prix;
   }
}
$mylea = new Client(['id' => 1, 'nomProduit' => 'mylea', 'descriptionProduit' => 154, 'quantiteProduit' => 3, 'isAvailable' => 1, 'prix' => 58]);

var_dump($mylea);
