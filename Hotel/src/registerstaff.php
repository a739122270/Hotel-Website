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

    $user=$_POST['staffname'];
    $pass=$_POST['staffpassword'];
    $ID=$_POST['staffid'];
    $PhoneNumber=$_POST['staffidphone'];


    $sql = "SELECT staffname FROM Staff WHERE staffname = '$user'";
    $result = mysqli_query($conn,$sql);   
    if(mysqli_num_rows($result))    
    { 
        echo "<script>alert('Username has been registered'); history.go(-1);</script>";  
    }  
    else  
    {  
        $sql = "SELECT staffid FROM Staff WHERE staffid = '$ID'";
        $result = mysqli_query($conn,$sql); 
        if(mysqli_num_rows($result))    
        { 
            echo "<script>alert('ID has been registered'); history.go(-1);</script>";  
        }  
        else  
        {  
            $sql="INSERT INTO Staff (staffname,staffpassword,staffid,staffphone) 
            VALUES('$user','$pass','$ID','$PhoneNumber')";
            if(mysqli_query($conn,$sql))
            {
                echo "Register Success";
                echo "<script> alert('Register sucess');parent.location.href='logstaff.html'; </script>"; 
            }
            else{
             echo "Register Fail!";
            }
        }
    }
}

    
?>
