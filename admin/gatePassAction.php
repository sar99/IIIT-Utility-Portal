<?php
        require_once("../connect.php");
?>

<?php

if(isset($_POST['approve']))
{
    $id = err($_POST['id']);

    $sql="UPDATE gatepass SET passStatus='1' WHERE id = '$id' ";
    $result=mysqli_query($conn,$sql);
    echo "<script>window.location.href='javascript:history.go(-1)';</script>"; 
}

else if(isset($_POST['reject']))
{
    $id = err($_POST['id']);

    $sql="UPDATE gatepass SET passStatus='-1' WHERE id = '$id' ";
    $result=mysqli_query($conn,$sql);
    echo "<script>window.location.href='javascript:history.go(-1)';</script>"; 
}

else
{
    echo "<script>window.alert('Invalid request.');</script>";
    echo "<script>window.location.href='javascript:history.go(-1)';</script>";
}

?>