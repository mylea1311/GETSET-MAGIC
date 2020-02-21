<?php
class Commande
{

   private $id;
   private $nomCommande;
   private $dateCommande;
   private $isDelivred;






   //-------------------------------------------//
   ////////////CONSTRUCTEUR//////////////
   //-----------------------------------------//
   public function __construct(array $method)
   {
      $this->hydrate($method);
   }

   public function hydrate(array $attribut)
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
$product = new Commande(['id' => 1, 'nomCommande' => 'mylea', 'dateCommande' => new DateTime(), 'isDelivred' => 1]);

var_dump($product);
echo $product->getId() . '<br>';
echo $product->getNomCommande() . '<br>';
echo $product->getDateCommande() . '<br>';
echo $product->getIsDelivred() . '<br>';
