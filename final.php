<?php

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
                <span>&nbsp;</span>
            </div>
              <div>
                <label>Favorite Century: </label>
                <span><?=$postedData['century']?>&nbsp;</span>
            </div>
             <div>
                <label>Comments: </label>
                <span><?=$postedData['comments']?>&nbsp;</span>
            </div>
             <div>
                <label>Name: </label>
                <span><?=$postedData['name']?>&nbsp;</span>
            </div>
             <div>
                <label>E-mail Address: </label>
                <span><?=$postedData['email']?>&nbsp;</span>
            </div>
        </div>
        
        
    </body>
        
</html>