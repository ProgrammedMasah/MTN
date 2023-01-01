<?php
$conn = mysqli_connect("localhost","id20085201_masah","pZK(+na4A+^{De%9","id20085201_masah_store");
if (isset($_POST["submit"]))
{
    $bill = $_POST['bill'];
    $id = $_POST['id'];
    $sql = "UPDATE users
            SET bill = '$bill'
            WHERE id = '$id'"; 

    if(empty($bill))
    {
        echo "<script> alert('Please Enter the Price'); </script>";
    }
    else 
    {
        if (mysqli_query($conn, $sql))
            header('location: manager.php');
        else
            echo "Error : " .mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
