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
    else{

        session_start();
        if(!isset($_SESSION['username']))
        {
            echo "<script> alert('Please log in first');parent.location.href='test.html'; </script>"; 
        }
        else
        {
            echo "<script>parent.location.href='bookroom.html'; </script>"; 
        }
    }

?>

