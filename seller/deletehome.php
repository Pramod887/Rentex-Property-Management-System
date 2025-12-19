
<?php
 include '../Config/connection.php';
 $h_id= (isset($_GET['h_id']) ? $_GET['h_id'] : '');
 $query= "DELETE FROM addhome where h_id='$h_id' ";
 if($conn->query($query)){
    echo '<script>alert("home Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewhome.php";</script>';
}
?>
