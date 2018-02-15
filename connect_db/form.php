<?php
include_once("connect_db.php");

if(!empty($_GET['id'])&&!empty($_GET['name'])&&!empty($_GET['idregion'])
)
{
    $id=$_GET['id'];
    $name=$_GET['name'];
    $idregion =$_GET['idregion'];
    $sql = "insert into countries values ('$id','$name','$idregion')";
    $conn->exec($sql);
    header("Location: index.php");
}

?>

<form medhod="GET" action="form.php">
<br>GG : <input type="text" name="id" value="<?=>
<br>WP : <input type="text" name="name">
<br>HA : <input type="text" name="idregion">
<br><input type="submit">
</form>