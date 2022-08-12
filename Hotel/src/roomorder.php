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
                    <a class="index sameline fontfam"  href="roomorder.php">Your Room Order</a>
                </div>
                <h1 class="booktitle">Your Room Order</h1>
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
                    $user=$_SESSION['username'];
                        if(!isset($_SESSION['username']))
                        {
                            echo "<script> alert('Please log in first');parent.location.href='test.html'; </script>"; 
                        }
                        else
                        {   
                            $roomorder="SELECT RoomNumber,RoomType,Startdate,Enddate From Room Where Username ='$user'";
                            $result = mysqli_query($conn,$roomorder);

                            if(!mysqli_num_rows($result))
                            {
                                echo"<h1 class ='fontfam' style='color:#c81e27;position:relative;top:50px;left:80px;'>You have no Orders!</h1>";
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
                        } 
                
                            $len=count($roomorder1);
                            echo"<table  class='redtable'  cellspacing='1' border='1 red'>
                            <tr>
                                    <td class='fontfam1 redtd'>RoomNumberType</td>
                                    <td class='fontfam1 redtd'>RoomType</td>
                                    <td class='fontfam1 redtd'>Check in Date</td>
                                    <td class='fontfam1 redtd'>Check out Date</td>
                                    <td class='fontfam1 redtd'>Cancel the order</td>

                            </tr>";
                            for($i=0;$i<$len;$i++){
                                    echo "<tr>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder1[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder2[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder3[$i]."</td>";
                                    echo "<td class='fontfam1 redtd'>".$roomorder4[$i]."</td>";
                                    echo "<form method='post' action='delete.php' >
                                    <td class='fontfam redtd'>
                                    <button  class='fontfam redtd' style=' background-color:wheat; cursor:pointer' name='roomorder1' type='submit'value='$roomorder1[$i]'>Cancel</button>
                                    <select name='roomorder2' style='display:none'>
                                    <option value='$roomorder2[$i]'></option>
                                    </select> 
                                    <select  name='roomorder3' style='display:none'>
                                    <option value='$roomorder3[$i]'></option>
                                    </select>
                                    <select name='roomorder4' style='display:none'>
                                    <option value='$roomorder4[$i]'></option>
                                    </select>
                                    </form></td>";
                                    echo "</tr> ";
                                    echo "</tr>";
                                }
                                
                               
                                
                        ?>
                        
                
        </div>
        </body>
        </html>
