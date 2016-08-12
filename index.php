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
echo 'welcome to GOA Saddiq';

//**********************************
$dbPassword="asif211";
$dbUserName="php_project";
$dbServer="localhost";
$dbName="php_project";

$connection=new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
if($connection->connect_errno)
{
    exit("Database has encoutered an error: ".$connection->connect_error);
}


//$query= "DELETE FROM php_project WHERE id = 2";
//$query="UPDATE php_project SET penName='L.M. Mongomery' WHERE id=2 " ;
$query="INSERT INTO php_project (firstName,lastName,penName) VALUES ('Kashif','Saddiq','dollar')";
$resultobj=$connection->query($query);

//Select DATA from Data base
if($resultobj->num_rows>0)
{
    while ($getdata=$resultobj->fetch_assoc())
    {
        echo 'Author: '.$resultobj['firstName'].PHP_EOL; ;
    }
    
}



$connection->close();
 
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
