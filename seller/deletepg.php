
<?php
 include '../Config/connection.php';
 $p_id= (isset($_GET['p_id']) ? $_GET['p_id'] : '');
 $query= "DELETE FROM addpg where p_id='$p_id' ";
 if($conn->query($query)){
    echo '<script>alert("PG Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewpg.php";</script>';
}
?>
