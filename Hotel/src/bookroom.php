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
    $start=$end=$roomtype="";

    $start=$_POST['startdate'];
    $end=$_POST['enddate'];
    $test=$_POST['testdate'];
    $roomtype=$_POST['roomtype'];
    session_start();
        if(!isset($_SESSION['username']))
        {
            echo "<script> alert('Please log in first');parent.location.href='test.html'; </script>"; 
        }
        else if($start==$test)
        {
            echo "<script>alert('Please enter your check-in date'); history.go(-1);</script>";
        }
        else if($start<date('Y-m-d'))
        {
            echo "<script>alert('Please enter a valid check-in date'); history.go(-1);</script>";
        }
        else if($end==$test)
        {
            echo "<script>alert('Please enter your check-out date'); history.go(-1);</script>";
        }
        else if(($start>$end)||($start==$end))
        {
            echo "<script>alert('Please enter a valid stay duration'); history.go(-1);</script>";
        }
        else if($roomtype=="Select")
        {
            echo "<script>alert('Please select a room type'); history.go(-1);</script>";
        }
        else
        {
            $user=$_SESSION['username'];
            $booked="SELECT RoomNumber From Room Where Not (('$start'>enddate) OR ('$end'<startdate))";
            $available="SELECT RoomNumber,RoomType From AllRoomType WHERE (RoomNumber NOT IN ($booked)) AND RoomType ='$roomtype'";
            $result = mysqli_query($conn,$available);
            if(!mysqli_num_rows($result))
            {
                echo "<script>
                if(confirm('Sorry! This room type is sold out in your selected duration! If you want to view all spare rooms, Click OK!'))
                {
                    parent.location.href='roomchoose.php';
                }
                else{
                history.go(-1);
                }</script>"; 
            }
            else
            {    
                $spare=array();  
                while($row=mysqli_fetch_array($result)){
                    $spare[]=$row['RoomNumber'];
                }       
                $sql="INSERT INTO Room (Username,Startdate,Enddate,RoomType,RoomNumber) 
                VALUES('$user','$start','$end','$roomtype','$spare[0]')";
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
    }

    
?>
