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

    $username=$password="";

    $username=$_POST['staffname'];
    $password=$_POST['staffpassword'];
    $sql = "SELECT * FROM Staff WHERE staffname = '$username' AND  staffpassword='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result))
    { 
        session_start();
        $_SESSION['staff'] = $username;
        echo "<script> alert('Log in sucess');parent.location.href='staffmanage.php'; </script>"; 
    }
    else{
        echo "<script> alert('Username or Password is not correct');parent.location.href='test.html'; </script>"; 
    }
    }
?>

