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
    $user=$pass=$FirstName=$LastName=$Email=$PhoneNumber=$PassportNumber="";

    $user=$_POST['Username'];
    $pass=$_POST['Password'];
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $PassportNumber=$_POST['PassportNumber'];

    $sql = "SELECT Username FROM Guest WHERE Username = '$user'";
    $result = mysqli_query($conn,$sql);    //执行SQL语句  $result = mysql_query("SELECT * FROM Persons");
    if(mysqli_num_rows($result))    //如果已经存在该用户  
    { 
        echo "<script>alert('Username has been registered'); history.go(-1);</script>";  
    }  
    else    //不存在当前注册用户名称  
    {  
        $sql="INSERT INTO Guest (Username,Password,FirstName,LastName,Email,PhoneNumber,PassportNumber) 
        VALUES('$user','$pass','$FirstName','$LastName','$Email','$PhoneNumber','$PassportNumber')";
        if(mysqli_query($conn,$sql))
        {
            echo "Register Success";
            echo "<script> alert('sucess');parent.location.href='test.html'; </script>"; 
        }
        else{
            echo "Register Fail!";
        }
    }
}

    
?>
