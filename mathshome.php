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
        <a href = "number.php">       
                    <h1>Number!</h1>
                </a>
         <a href = "algebra.php">       
                    <h1>Algebra!</h1>
                 </a>
          <a href = "geometry.php">       
                    <h1>Geometry!</h1>
            </a>
            <a href = "index.php">       
                    <h1>Back!</h1>
            </a>
       </div>
       </div>
</body>
</html>