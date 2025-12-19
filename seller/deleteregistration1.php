
<?php
 include '../Config/connection.php';
 $p_id= (isset($_GET['p_id']) ? $_GET['p_id'] : '');
 $query= "DELETE FROM registerpg where p_id='$p_id' ";
 if($conn->query($query)){
    echo '<script>alert("Registration Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewregistration1.php";</script>';
}
?>
