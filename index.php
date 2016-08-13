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

//**********************************
$dbPassword="asdf123";
$dbUserName="php_project";
$dbServer="localhost";
$dbName="php_project";

$connection=new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
if($connection->connect_errno)
{
    exit("Database has encoutered an error:".$connection->connect_error);
}


//$query= "DELETE FROM php_project WHERE id = 2";
//$query="UPDATE php_project SET penName='L.M. Mongomery' WHERE id=2 " ;
//$query="INSERT INTO php_project (id,firstName,lastName,penName) VALUES (5,'Aslam','john','mongomery')";
//$query="SELECT firsName,lastName,PenName FROM php_project ORDOR BY firstName";
$query='SELECT firstName,lastName FROM php_project ORDER BY lastName';
$resultObj=$connection->query($query);
//Select DATA from Data base
if($resultObj->num_rows>0)
{
    while ($SighleRowFromQuery=$resultObj->fetch_assoc())
    {
        echo '--Author: '.$SighleRowFromQuery['lastName'].PHP_EOL; ;
           //print_r($SighleRowFromQuery);
    }
   
}

//echo "newly created  author di: ".$connection->insert_id ;
$resultObj->close();
$connection->close();
 
  ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <meta charset="UTF-8">
        <title>PHP websites</title>
    </head>
    <body>
        <div id="Header">
        <img class="shekspear-img" src="shakespeare.jpg" alt="">
        <h2>Join Our Literature <br> Mailing List</h2>
        </div>
        <div id="Body">
            <form method="post" action="final.php">
                <div>
                    <label>Favorite Author: </label>
                    <select name="author">
                        <option></option>
                    </select>
                </div>
                <div class="multiple">
                    <label>Favorite Century:</label>
                    <div>
                    17th Century <input type="checkbox" name="century[]" value="17th">
                    </div>
                    18th Century <input type="checkbox" name="century[]" value="18th"><br>
                    19th Century <input type="checkbox" name="century[]" value="19th">
                </div>
                <div>
                    <label>Comments:</label>
                    <textarea name="comments"></textarea>
                </div>
                 <div>
                    <label>Name:</label>
                    <input type="text" name="name"/>
                </div>
                 <div>
                    <label>E-mail:</label>
                    <input type="text" name="email"/>
                </div>
                
                
        </div>
                
    </body>
</html>
