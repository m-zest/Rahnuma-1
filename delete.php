 <?php
        include 'partial/_dbconnect.php';
        $id=$_GET['id'];
        $sql = "delete from blog where id='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result == 1){
            header("location:dashboard.php");
        }
        else{
            $showError = "Password do not match";
        }
    
?>