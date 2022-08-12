<!DOCTYPE html>
    <head>
        <title>Sunny Isle Hotel - Register</title>
        <link type="text/css" rel="stylesheet" href="staffmanage.css">
        <link type="text/css" rel="stylesheet" href="bookroom.css">
    </head>
    <body>
        <!--Top-->
        <div class ="top">
                <h1><a  class ="toptitle" href="homepage.html">Welcome to Sunny Isle Hotel!</a></h1>
        </div>
        <div class = "whiteboard">
                <div class ="toright">
                    <a class="index sameline fontfam"  href="homepage.html">>>Home Page</a>
                    <nobr class="sameline fontfam index"> | </nobr>
                    <form method="post" action="logout.php">
                        <input class="logout fontfam" type="submit" value="Log out">
                    </form>
                </div>

                <div class="tocenter">
                    <a class="fontfam index selectsize" href="staffmanage.php">Guest Information</a>
                    <a class="fontfam selectred selectsize" href="roomstatus.php">&nbspRoom Status</a>
                </div>
                
                    <h1 class="booktitle">Room Status</h1>
                    <form method ="post" action= "roomstatus.php">
                        <label class="fontfam" style="position:relative;left:350px;top:70px;"> Room Number: <input  type="text"  name="roomnumber"></label>
                        <label class="fontfam" style="position:relative;left:420px;top:70px;"><input class="submit sameline fontfam" type="submit" value="Search" ></label>
                </form>
                    
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
                        $roomnumber=$_POST['roomnumber'];
                        if(!isset($_SESSION['staff']))
                                {
                                    echo "<script> alert('Please log in first');parent.location.href='logstaff.html'; </script>"; 
                                }
                        if($roomnumber==Null){
                            echo"
                            <table  class='redtable'  cellspacing='1' border='1 red'>
                            <tr>
                                    <td class='fontfam redtd'>Room Number</td>
                                    <td class='fontfam redtd'>Room Type</td>
                                    <td class='fontfam redtd'>Check in Date</td>
                                    <td class='fontfam redtd'>Check out Date</td>
                                    <td class='fontfam redtd'>Is Booked</td>
    
                            </tr>
                            <tr>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                            </tr>
                            <tr>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                            </tr>
                            <tr>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                                    <td class='fontfam redtd'></td>
                            </tr>
    
                        </table>
                            ";
                        }
                        else{
                            $roomorder="SELECT RoomNumber,RoomType,Startdate,Enddate From Room Where RoomNumber='$roomnumber'";
                            $result = mysqli_query($conn,$roomorder);

                            if(!mysqli_num_rows($result))
                            {
                                echo"<h1 class ='fontfam' style='color:#c81e27;position:relative;top:50px;left:80px;'>This room has no order!</h1>";
                            }
                            else
                            {
                                $roomorder1=array();
                                $roomorder2=array();
                                $roomorder3=array();
                                $roomorder4=array();

                                while($row = mysqli_fetch_array($result))
	                            {
                                    $roomorder1[]=$row['RoomNumber'];
                                    $roomorder2[]=$row['RoomType'];
                                    $roomorder3[]=$row['Startdate'];
                                    $roomorder4[]=$row['Enddate'];
                                }
                            }
                        
                
                            $len=count($roomorder1);
                            echo"<table  class='redtable'  cellspacing='1' border='1 red'>
                            <tr>
                                    <td class='fontfam1 redtd'>RoomNumber</td>
                                    <td class='fontfam1 redtd'>RoomType</td>
                                    <td class='fontfam1 redtd'>Check in Date</td>
                                    <td class='fontfam1 redtd'>Check out Date</td>
                                    <td class='fontfam1 redtd'>Is booked</td>

                            </tr>";
                            for($i=0;$i<$len;$i++){
                                    echo "<tr>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder1[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder2[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder3[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder4[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>Yes</td>";
                                    echo "</tr> ";
                                }
                            }
                        
                        ?>
        </div>
        </body>
        </html>
