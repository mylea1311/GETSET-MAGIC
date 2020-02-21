<?php

class Client
{
   private $id;
   private $nom;
   private $numeroClient;
   private $adresse;
   private $telephone;
   private $mail;

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
    * return $nom 
    * type : string
    */
   public function getNom()
   {
      return $this->nom;
   }
   /**
    * return $numeroClient 
    * type : integer
    */
   public function getNumeroClient()
   {
      return $this->numeroClient;
   }

   /**
    * return $adresse
    * type : string
    */
   public function getAdresse()
   {
      return $this->adresse;
   }

   /**
    * return $telephone
    * type : integer
    */
   public function getTelephone()
   {
      return $this->telephone;
   }

   /**
    * return $mail
    * type : string
    */
   public function getMail()
   {
      return $this->mail;
   }


   //-------------------------------------------//
   ////////////SETTERS//////////////
   //-----------------------------------------//

   /**
    * set value id
    * type : integer
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * set nom
    * type : string
    */
   public function setNom($nom)
   {
      $this->nom = $nom;
   }

   /**
    * set numeroClient
    * type : string
    */
   public function setNumeroClient($numeroClient)
   {
      $this->numeroClient = $numeroClient;
   }

   /**
    * set adresse
    * type : string
    */
   public function setAdresse($adresse)
   {
      $this->adresse = $adresse;
   }

   /**
    * set telephone
    * type : integer
    */
   public function setTelephone($telephone)
   {
      $this->telephone = $telephone;
   }

   /**
    * set mail
    * type : string
    */
   public function setMail($mail)
   {
      $this->mail = $mail;
   }
}

$mylea = new Client(['id' => 1, 'nom' => 'mylea', 'numeroClient' => 154, 'adresse' => '5 rue de la tour', 'telephone' => 0547565, 'mail' => 'gimel@gmail.com']);
echo ($mylea->getNom());
echo ($mylea->getAdresse());
echo ($mylea->getMail());
var_dump($mylea);
