
<?php
 include '../Config/connection.php';
 $f_id= (isset($_GET['f_id']) ? $_GET['f_id'] : '');
 $query= "DELETE FROM addflat where f_id='$f_id' ";
 if($conn->query($query)){
    echo '<script>alert("flat Details Successfully Deleted")</script>';
    echo '<script>window.location.href="viewflat.php";</script>';
}
?>
