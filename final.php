<?php
require './include.php'; 

echo "<pre>";
print_r($_SESSION);
echo "<pre>";
echo $_POST['author'];
/*
if(isset($_SESSION['formPostData']))
{
    $postedData=$_SESSION['formPostData'];
   
    unset($_SESSION['formPostData']);
    
}
 else {
    header('Location:index.php');
}*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Fundamentals</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
        <div id="Header">
          <img class="shekspear-img" src="shakespeare.jpg" alt="">
          <h2>Mailing List Information</h2>
        </div>
        <div id="Body">
            <div>
                <label>Favorite Author: </label>
                <span><?=$_POST['author']?>&nbsp;</span>
            </div>
              <div>
                <label>Favorite Century:</label>
                <span><?=$_POST['century']?>&nbsp</span> 
            </div>
             <div>
                <label>Comments: </label>
                <span><?=$_POST['comments']?>&nbsp;</span>
            </div>
             <div>
                <label>Name: </label>
                <span><?=$_POST['name']?>&nbsp;</span>
            </div>
             <div>
                <label>E-mail Address: </label>
                <span><?=$_POST['email']?>&nbsp;</span>
            </div>
        </div>
        
        
    </body>
        
</html>