<!DOCTYPE html>
    <head>
        <title>Sunny Isle Hotel - Register</title>
        <link type="text/css" rel="stylesheet" href="roomchoose.css">
        <link type="text/css" rel="stylesheet" href="roomorder.css">
        <link type="text/css" rel="stylesheet" href="bookroom.css">
    </head>
    <body>
        <!--Top-->
        <div class ="top">
                <h1><a  class ="toptitle" href="homepage.html">Welcome to Sunny Isle Hotel!</a></h1>
        </div>
        <div class = "whiteboard1">
                <div class ="toright">
                    <a class="index sameline fontfam"  href="homepage.html">>>Home Page</a>
                    <nobr class="sameline fontfam index"> | </nobr>
                    <a class="index sameline fontfam"  href="roomorder.html">Your Room Order</a>
                </div>
                <h1 class="booktitle">Select a specific room!</h1>
                <form method="post" action="roomchoose.php">
                
                <div class="checkindate sameline fontfam" style="position:relative;left:200px;top:50px;">
                        <label for="flight-depart" >Check in Date:</label>
                        <input id="start" name="startdate" type="date"/>                        
                        <!--js-->
                    </div>
                <div class="checkoutdate sameline fontfam" style="position:relative;left:200px;top:50px;">
                        <label for="flight-return" >Check out Date:</label>
                        <input id="end"  name ="enddate" type="date"/> 
                        <input id="test" style="display:none" name ="testdate" type="date"/> 
                        <!--js-->
                    </div><br><br><br>
                    <div class="roomtype sameline fontfam" style="position:relative;left:200px;top:40px;">
                        <label for="flight-class">Room Type</label>
                        <select id="roomtype" name="roomtype" >
                            <option value="Select">--Select--</option>
                            <option  value="VIP room">VIP room</option>
                            <option  value="Large Double Bed">Large double bed</option>
                            <option  value="Large Single Bed">Large single bed</option>
                            <option  value="Small Single Bed">Small single bed</option>
                        </select>
                        <select id="roomtype" name="issubmit" style="display:none">
                            <option value="k">1</option>
                        </select>
                    </div>
                    <input class="submit sameline fontfam" style="position:relative;left:200px;top:40px;" name="search" type="submit" value="Search" onclick="roomchoose.php" >     
                    </form>
                                                        <!--<td class='fontfam redtd'><input name='book' type='submit'value='Book'</td>-->
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

                    $start=$_POST['startdate'];
                    $end=$_POST['enddate'];
                    $_SESSION['start']=$start;
                    $_SESSION['end']=$end;
                    $test=$_POST['testdate'];
                    $roomtype=$_POST['roomtype'];
                    $submit=$_POST['issubmit'];
                    if($submit=="k"){
                        if(!isset($_SESSION['username']))
                        {
                            echo "<script> alert('Please log in first');parent.location.href='test.html'; </script>"; 
                        }
                        else if($start==$test)
                        {
                            echo "<script>alert('Please enter your check-in date'); parent.location.href='roomchoose.php';</script>";
                        }
                        else if($start<date('Y-m-d'))
                        {
                            echo "<script>alert('Please enter a valid check-in date'); parent.location.href='roomchoose.php';</script>";
                        }
                        else if($end==$test)
                        {
                            echo "<script>alert('Please enter your check-out date'); parent.location.href='roomchoose.php';</script>";
                        }
                        else if(($start>$end)||($start==$end))
                        {
                            echo "<script>alert('Please enter a valid stay duration'); parent.location.href='roomchoose.php';</script>";
                        }
                        else if($roomtype=="Select")
                        {
                            echo "<script>alert('Please select a room type'); parent.location.href='roomchoose.php';</script>";
                        }
                        else
                        {   
                            $_SESSION['issubmit']=1;
                            $booked="SELECT RoomNumber From Room Where Not (('$start'>enddate) OR ('$end'<startdate))";
                            $available="SELECT RoomNumber,RoomType From AllRoomType WHERE (RoomNumber NOT IN ($booked)) AND RoomType ='$roomtype'";
                            $result = mysqli_query($conn,$available);
                            $a=mysqli_num_rows($result);
                            if(!mysqli_num_rows($result))
                            {
                                echo"<h1 class ='fontfam' style='color:#c81e27;position:relative;top:50px;left:80px;'>This type of room is sold out</h1>";
                            }
                            else
                            {
                                $spare1=array();
                                $spare2=array();
                                while($row = mysqli_fetch_array($result))
	                            {
                                    $spare1[]=$row['RoomNumber'];
                                    $spare2[]=$row['RoomType'];
                                }
                            }
                        } 
                    }
                            $roomnumber=array();
                            $roomtype=array();
                            $roomnumber=$spare1;
                            $roomtype=$spare2;
                            $len=count($roomtype);
                            echo"<table  class='redtable'  cellspacing='1' border='1 red'>
                            <tr>
                                    <td class='fontfam redtd'>RoomType</td>
                                    <td class='fontfam redtd'>RoomNumber</td>
                                    <td class='fontfam redtd'>Book Here</td>

    
                            </tr>";
                            for($i=0;$i<$len;$i++){
                                    echo "<tr>";
                                    echo "<td class='fontfam redtd'>".$roomnumber[$i]."</td>";
                                    echo "<td class='fontfam redtd'>".$roomtype[$i]."</td>";
                                    echo "<form method='post' action='spareroom.php' >
                                    <td class='fontfam redtd'>
                                    <button  class='fontfam redtd' style=' background-color:wheat; cursor:pointer' name='book' type='submit'value='$roomnumber[$i]'>Book</button></form></td>";
                                    echo "</tr> ";
                                }
                           
                        ?>
                        
                
        </div>
        </body>
        </html>
