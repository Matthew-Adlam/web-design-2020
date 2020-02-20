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
<body>
   <header>
       <br>
       <a href = "index.php" class = "header-text">Study Time!</a> 
    </header>
  <div class="bodybox">
        <div class="gridcontainer">
            <a href = "mathshome.php">
        <div class="item1">          
            <h1>Maths!</h1>
            <br><br><br><br><br><br>
        </div>
        </a>

        <a href = "sciencehome.php">
            <div class="item2">          
                <h1>Computing!</h1>
                <br><br><br><br><br><br>
            </div>
            </a>
            <a href = "user.php">
                <div class="item2-1">          
                    <h1>Study Log!</h1>
                    <br><br><br><br><br><br>
                </div>
                </a>
                <a href = "about.php">
                <div class="item2-2">          
                    <h1>About this Website!</h1>
                    <br><br><br><br><br><br>
                </div>
                </a>
       </div>
       </div>
</body>
</html>