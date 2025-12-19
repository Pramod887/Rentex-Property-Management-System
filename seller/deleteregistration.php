
<?php
 include '../Config/connection.php';
 $h_id= (isset($_GET['h_id']) ? $_GET['h_id'] : '');
 $query= "DELETE FROM registerp where h_id='$h_id' ";
 if($conn->query($query)){
    echo '<script>alert("Registration Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewregistration.php";</script>';
}
?>
