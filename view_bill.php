<?php
$conn = mysqli_connect("sql780.main-hosting.eu","u508226309_masah_store","PASSword?q=masah_store_1","u508226309_masah_store");

if (isset($_POST["submit"]))
{
    $number_phone = $_POST['number_phone'];

    $query="SELECT bill FROM users WHERE number_phone = $number_phone";
    $result = mysqli_query($conn, $query);
    $bill = mysqli_fetch_column($result);
    
    if (empty($bill))
    {
        echo "<script> alert('not found your number phone, please check your number phone'); </script>";
    }
}
mysqli_close($conn);
?>
<!--نتيجة الاستعلام 
html صفحة
$bill وفيها الفاتورة 
-->