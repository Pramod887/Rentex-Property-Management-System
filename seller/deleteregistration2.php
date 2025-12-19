
<?php
 include '../Config/connection.php';
 $f_id= (isset($_GET['f_id']) ? $_GET['f_id'] : '');
 $query= "DELETE FROM registerflat where f_id='$f_id' ";
 if($conn->query($query)){
    echo '<script>alert("Registration Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewregistration2.php";</script>';
}
?>
