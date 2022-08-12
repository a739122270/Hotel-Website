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

    $isvalid=true;
    $username=$password="";

    $username=$_POST['Username'];
    $password=$_POST['Password'];

    $sql = "SELECT Username,Password FROM Guest WHERE Username = '$username' AND  Password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result))
    { 
        session_start();
        $_SESSION['issubmit']=0;
        $_SESSION['username'] = $username;
        echo "<script> alert('Log in sucess');parent.location.href='bookroom.html'; </script>"; 
    }
    else{
        echo "<script> alert('Username or Password is not correct');parent.location.href='test.html'; </script>"; 
    }
    }
?>

