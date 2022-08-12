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
        $choosedroom=$_POST['book'];
        session_start();
        $user=$_SESSION['username'];
                           if($choosedroom!=Null){
                            $typeselect="SELECT RoomType From AllRoomType Where RoomNumber ='$choosedroom'";
                            $result = mysqli_query($conn,$typeselect);
                            $row = mysqli_fetch_array($result);
                            $type=$row['RoomType'];
                            session_start();
                            $Start=$_SESSION['start'];
                            $End=$_SESSION['end'];
                            $sql="INSERT INTO Room (Username,Startdate,Enddate,RoomType,RoomNumber) 
                            VALUES('$user','$Start','$End','$type','$choosedroom')";
                            if(mysqli_query($conn,$sql))
                            {
                                echo "<script> alert('book sucess');parent.location.href='roomorder.html'; </script>"; 
                            }
                            else
                            {
                            echo "insert Fail! Please try again.";
                            }
                           
                           }

    }
    ?>  
        
