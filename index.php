<!DOCTYPE html>
<html>
<header>
</header>
<body>
<form  action="" target="" method="POST">
  Name: <input type="text" name="na" value="Examble">
  <br>
  Score: <input type="text" name="score" value="55">
  <br><br>
  <input type="submit" value="Go!!!">
</form>

<?php
echo $_POST["na"] ;
echo "<br>Your grade is ".grade($_POST["score"]);

function grade($G) {
   if($G >= 80){
       return "A";
    }
   elseif($G >= 75){
       return "B+";
    }
   elseif($G >= 70){
       return "B";
    }
   elseif($G >= 65){
       return "C+";
    }
   elseif($G >= 60){
       return "C";
    }
   elseif($G >= 55){
       return "D+";
    }
   elseif($G >= 50){
       return "D";
    }
   else{
       return "F";
    }
}
?>

</body>
</html>