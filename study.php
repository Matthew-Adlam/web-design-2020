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
    <div class = "inputbox">
    <h1> Input your study log here! </h1>
    <form method = "post" action="study.php">
    <span class="submit">Study Subject:</span><select id="" name="StudySubject">
    <option value = "Maths">Maths</option>
    <option value = "Computing">Computing</option>
    </select> 
    <br>
    <span class="submit">Study Time :</span><input type="time" name="StudyTime">
    <br>
    <span class="submit">Study Information:</span><input type="text" name="StudyInformation">
    <br>
    <span class = "submit">Study Date:</span><input type = "date" name  = "StudyDate">
    <br>
<?php
    if($_SERVER["REQUEST_METHOD"] =="POST") {
        $StudySubject= $_POST["StudySubject"];
        $StudyTime = $_POST["StudyTime"];
        $StudyInformation = $_POST["StudyInformation"];
        $StudyDate = $_POST["StudyDate"];
       /* $DateSubmitted = */
    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth  = $pdo->prepare("INSERT INTO StudyCount (StudySubject,StudyTime,StudyInformation,StudyDate) VALUES (:StudySubject,:StudyTime,:StudyInformation,:StudyDate)");
        $sth->bindValue(':StudySubject', $StudySubject, PDO::PARAM_STR);
        $sth->bindValue(':StudyTime', $StudyTime, PDO::PARAM_STR);
        $sth->bindValue(':StudyInformation', $StudyInformation, PDO::PARAM_STR);
        $sth->bindValue(':StudyDate', $StudyDate, PDO::PARAM_STR);
        $count = $sth->execute();

        if($count == 1) {
            echo "Record added to the database! Go to the link below to view your study log!";
        }
        $pdo = null;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}
    ?>
    <br>
    <input type ="submit" value="submit">
    <br>
    <br>
     <a href = "display.php">View your study log! </a>
    </form>
    <h1> Studying Tips </h1>
    <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    </ul>
    </div>
</body>
</html>