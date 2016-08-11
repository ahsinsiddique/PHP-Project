 <?php
 class person
 {
     const AVG_AGE=50;

     private $firstName;
     private $LastName;
      private $age;
      function __construct()
      {
          $this->firstName="Ahsan";   
          $this->LastName="Saddique";
          $this->age=20;
          
      }

      public function getname()
      {
          return $this->LastName.PHP_EOL;
      }
      public function getFullName()
      {
          echo 'Full Name in Person';
          return $this->firstName."  ".$this->LastName.PHP_EOL;
      }
      
 }
 class Author extends person
 {
     private $penName="Dollar";
     public static $centuryPopular;
     public function getPenName()
     {
         return $this->penName;
     }
     public function getCompleteName()
     {
         return $this->getCompleteName()."  ".$this->getPenName().PHP_EOL;
     }

     public static function authorCenturyPopular()
    {
         return self::$centuryPopular;
    }
    
 }
        
 $detail=new Author();
// echo person::AVG_AGE;
echo $detail->getFullName();
echo Author::authorCenturyPopular();
echo "Ahsabn";
 
  ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP websites</title>
    </head>
    <body>
        <h1>Welcome to the New Websites</h1>
    </body>
</html>
