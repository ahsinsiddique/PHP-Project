 <?php
require './dbInfo.php'; 
require './include.php'; 


//**********************************
$query='SELECT id,firstName,lastName FROM php_project ORDER BY firstName';
$resultObj=$connection->query($query);
if(count($_POST)>0)
{
if ($_POST['email']!="")
{
   // $_SESSION['formWasPosted']='yes';
    $_SESSION['formPostData']=$_POST;
    header('Location:final.php');
}
 else 
     { 
         $emailError="validation"; 
     }
}

//$resultObj->close();
//$connection->close(); 
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
            <form method="POST" action="final.php">
                <div>
                    <label>Favorite Author: </label>
                    <select name="author">
                        <?php while($row=$resultObj->fetch_assoc()): ?>
                        <option value="<?=$row['id']?>"><?=$row['firstName']?> <?=$row['lastName']?></option>
                            <?php endwhile;?>
                    </select>
                </div>
                <div class="multiple">
                    <label>Favorite Century:</label>
                    <div>
                    17th Century <input type="checkbox" name="century" value="17th">
                    </div>
                    18th Century <input type="checkbox" name="century" value="18th"><br>
                    19th Century <input type="checkbox" name="century" value="19th">
                </div>
                <div>
                    <label>Comments:</label>
                    <textarea name="comments"></textarea>
                </div>
                 <div>
                    <label>Name:</label>
                    <input type="text" name="name"/>
                </div>
                <div class="<?=$emailError?>">
                    <label>E-mail:</label>
                    <input type="text" name="email"/>
                </div>
                <div>
                      <button class="button-class" onclick="<a href="final.php">Submit</a>"-Click</button>
                </div>
              
        </div>
                  
                
    </body>
</html>
