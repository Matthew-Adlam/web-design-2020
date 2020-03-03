<?php
require_once('includes/connect.php');
?>
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
<br>
<table>
  <tr>
    <th>Date</th>
    <th>Time</th>    
    <th>Subject</th>
    <th>Details</th>
  </tr>
  <br>
<?php   
foreach ($pdo -> query("SELECT StudyDate,StudySubject,StudyTime,StudyInformation
FROM StudyCount") as $row)  { ?>
   <tr>
	 <td> <?php echo $row['StudyDate']; ?></td>
	 <td> <?php echo $row['StudyTime']; ?></td>
     <td> <?php echo $row['StudySubject']; ?></td>
     <td> <?php echo $row['StudyInformation']; ?></td>
	</tr>
<?php } ?>
</table>
<a href = "study.php">Go Back </a>
</body>
</html>