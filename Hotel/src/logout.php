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
    $username=$_POST['Username'];

    session_start();
    if(isset($_SESSION['username']) && $_SESSION['username']==true){
        session_unset();//free all session variable
        session_destroy();
        echo "<script> alert('Log out sucess');parent.location.href='homepage.html'; </script>"; 
    }
    else{
        echo "<script> alert('You have to log in first');parent.location.href='test.html'; </script>"; 
    }
}
?>

