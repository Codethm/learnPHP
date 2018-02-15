<?php
include_once ("connect_db.php");

$sql = "SELECT * from countries";
$stmt = $conn->prepare($sql); 
$stmt->execute();

if( !empty($_GET['del'])){
    $id = $_GET['del'];
    $sql ="delete from countries where id ='$id'";
    echo $sql."<hr>" ;
    $conn ->exec($sql);
}

echo '<a href="form.php">Insert</a> <hr>';

foreach($stmt->fetchall() as $key => $value){
    $id = $value[0];
    $name = $value[1];
    $idregion = $value[2];

    $link_del ="<a href='index.php?del=$id'>$id</a>";
    $link_update ="<a href='index.php?update=$id&name=$name&idregion=$idregion'>edit</a>";
    echo $key," ",$link_update," " ,$link_del," ",$value[1],"<hr>";
}