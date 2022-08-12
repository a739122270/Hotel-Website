<?php
    $dbServername="localhost";
    $dbUsername="scyyx3";
    $dbPassword="123456";
    $dbName="scyyx3";

    $conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

/*缺安全验证！*/
    if(!$conn)
    {
        die ("Connect Failed! Please Try Again!");
    }
     session_start();
     $user=$_SESSION['username'];
     $number=$_POST['roomorder1'];
     $type=$_POST['roomorder2'];
     $start=$_POST['roomorder3'];
     $end=$_POST['roomorder4'];
     mysqli_query($conn,"DELETE FROM Room WHERE Username='$user' AND RoomNumber='$number' AND Startdate='$start' AND Enddate='$end'");
     echo "<script> alert('Cancel sucess');parent.location.href='roomorder.php'; </script>"; 
     ?>
