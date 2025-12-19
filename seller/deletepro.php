
<?php
 include '../Config/connection.php';
 $p_id= (isset($_GET['pr_id']) ? $_GET['pr_id'] : '');
 $query= "DELETE FROM addprop where pr_id='$pr_id' ";
 if($conn->query($query)){
    echo '<script>alert("property Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewproperty.php";</script>';
}
?>
