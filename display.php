<!-- connects to database server-->
<?php
require_once('includes/connect.php');
?>
<!-- necessities-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <title>Study Time</title>
</head>
<body>
  <!-- makes a header - the use of inline styles is to override the css-->
   <header>
       <br>
       <a href = "index.php" class = "header-text" style = "color:white">Study Time!</a> 
    </header>
<br>
<!-- makes a table-->
<table>
  <tr>
    <th>Date</th>
    <th>Start Time</th>
    <th>End Time</th>       
    <th>Subject</th>
    <th>Details</th>
  </tr>
  <br>
  <!-- selects and displays data-->
<?php   
foreach ($pdo -> query("SELECT StudyDate,StudySubject,StudyTime,StudyTimeEnd,StudyInformation
FROM StudyCount ") as $row)  { ?>
   <tr>
	 <td> <?php echo htmlspecialchars($row['StudyDate']); ?></td>
   <td> <?php echo htmlspecialchars($row['StudyTime']); ?></td>
   <td> <?php echo htmlspecialchars($row['StudyTimeEnd']); ?></td>
     <td> <?php echo htmlspecialchars($row['StudySubject']); ?></td>
     <td> <?php echo htmlspecialchars($row['StudyInformation']); ?></td>
	</tr>
<?php } ?>
</table>
<a href = "study.php">Go Back </a>
</body>
</html>