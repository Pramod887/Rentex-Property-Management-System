
<?php
 include '../Config/connection.php';
 $id= (isset($_GET['id']) ? $_GET['id'] : '');
 $query= "DELETE FROM seller where id='$id' ";
 if($conn->query($query)){
    echo '<script>alert("seller Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewseller.php";</script>';
}
?>
