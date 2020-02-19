<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8">
    <script>window.addEventListener("keydown", function(e) {
      // space, page up, page down and arrow keys:
      if([32, 33, 34, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
          e.preventDefault();
      }
  }, false);</script>
    
    <title>Document</title>
</head>
   <header>
       <br>
       <a href = "index.php" class = "header-text">Study Time!</a> 
    </header>
    <div class="bodybox">
        <div class="gridcontainer">
        <a href = "number.php">
                <div class="item1">          
                    <h1>Number!</h1>
                    <br><br><br><br><br><br>
                </div>
                </a>
        <div class="item2">
            <h1>Algebra!</h1>
        </div>
        <div class="item2-1">
            <h1>Geometry!</h1>
        </div>
        <a href = "index.php">
                <div class="item2-2">          
                    <h1>Back</h1>
                    <br><br><br><br><br><br>
                </div>
                </a>
       </div>
       </div>
</body>
</html>