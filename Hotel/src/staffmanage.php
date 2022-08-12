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
                    <form method="post" action="logoutstaff.php">
                        <input class="logout fontfam" type="submit" value="Log out">
                    </form>
                </div>
                <div class="tocenter">
                    <a class="fontfam selectred selectsize" href="staffmanage.php">Guest Information</a>
                    <a class="fontfam index selectsize" href="roomstatus.php">&nbspRoom Status</a>
                </div>
                <h1 class="booktitle" style="position:relative; top:140px">Guest Information</h1>
                <form method ="post" action= "staffmanage.php">
                        <label class="fontfam" style="position:relative;left:300px;bottom:25px;"> Guest Username: <input  type="text"  name="username"></label>
                        <label class="fontfam" style="position:relative;left:370px;bottom:25px;"><input class="submit sameline fontfam" type="submit" value="Search" ></label>
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
                $username=$_POST['username'];
                if(!isset($_SESSION['staff']))
                        {
                            echo "<script> alert('Please log in first');parent.location.href='logstaff.html'; </script>"; 
                        }
                if($username==Null){
                       echo" <table  class='redtable'  cellspacing='1' border='1 red'>
                        <tr>
                                <td class='fontfam1 infotd'>First Name </td>
                                <td class='fontfam1 infotd'></td>
                        </tr>
                        <tr>
                                <td class='fontfam1 infotd'>Last Name</td>
                                <td class='fontfam1 infotd'></td>
                        </tr>
                        <tr>
                                <td class='fontfam1 infotd'>Passport Number</td>
                                <td class='fontfam1 infotd'></td>
                        </tr>
                        <tr>
                                <td class='fontfam1 infotd'>Phone Number</td>
                                <td class='fontfam1 infotd'></td>
                        </tr>
                        <tr>
                                <td class='fontfam1 infotd'>Email Address</td>
                                <td class='fontfam1 infotd'></td>
                        </tr>
                        <tr>
                                <td class='fontfam1 infotd'>Username</td>
                                <td class='fontfam1 infotd'></td>
                        </tr>
                        </table>";
                        echo"
                        <h1 class='booktitle'>Room Order</h1>
                        <table  class='redtable'  cellspacing='1' border='1 red'>
                                <tr>
                                        <td class='fontfam redtd'>Check-in Date</td>
                                        <td class='fontfam redtd'>Check-out Date</td>
                                        <td class='fontfam redtd'>Room Number</td>
        
                                </tr>
                                <tr>
                                        <td class='fontfam redtd'></td>
                                        <td class='fontfam redtd'></td>
                                        <td class='fontfam redtd'></td>
                                </tr>
                                <tr>
                                        <td class='fontfam redtd'></td>
                                        <td class='fontfam redtd'></td>
                                        <td class='fontfam redtd'></td>
                                </tr>
                                <tr>
                                        <td class='fontfam redtd'></td>
                                        <td class='fontfam redtd'></td>
                                        <td class='fontfam redtd'></td>
                                </tr></table>";
                }       
                else{
                $guest="SELECT FirstName,LastName,PassportNumber,PhoneNumber,Email,Username From Guest Where Username= '$username'";
                $result = mysqli_query($conn,$guest);
                $row = mysqli_fetch_array($result);
                $first=$row['FirstName'];
                
                            $last=$row['LastName'];
                            $Passport=$row['PassportNumber'];
                            $Phone=$row['PhoneNumber'];
                            $Email=$row['Email'];
                            $user=$row['Username'];
                    if(!mysqli_num_rows($result))
                    {
                        echo "<script> alert('User is not found');parent.location.href='staffmanage.php'; </script>";
                    }
                    else{
                            //$first=$row['FirstName'];
                            //echo $first;
                            //echo $username;
                            //$last=$row['LastName'];
                            //$Passport=$row['PassportNumber'];
                            //$Phone=$row['PhoneNumber'];
                            //$Email=$row['Email'];
                            //$user=$row['Username'];
                        echo"<table  class='redtable'  cellspacing='1' border='1 red'>
                        <tr>
                                <td class='fontfam1 infotd'>First Name </td>
                                <td class='fontfam1 infotd'>".$first."</td>
                        </tr>";
                        echo"<tr>
                                <td class='fontfam1 infotd'>Last Name</td>
                                <td class='fontfam1 infotd'>".$last."</td>
                        </tr>";
                        echo"<tr>
                                <td class='fontfam1 infotd'>Passport Number</td>
                                <td class='fontfam1 infotd'>".$Passport."</td>
                        </tr>";
                        echo"<tr>
                                <td class='fontfam1 infotd'>Phone Number</td>
                                <td class='fontfam1 infotd'>".$Phone."</td>
                        </tr>";
                        echo"<tr>
                                <td class='fontfam1 infotd'>Email Address</td>
                                <td class='fontfam1 infotd'>".$Email."</td>
                        </tr>";
                        echo"<tr>
                                <td class='fontfam1 infotd'>Username</td>
                                <td class='fontfam1 infotd'>".$user."</td>
                        </tr>
                        </table>";
                        
                        echo "<h1 class='booktitle'>Room Order</h1>";
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
                    
            
                        $len=count($roomorder1);
                        echo"<table  class='redtable'  cellspacing='1' border='1 red'>
                        <tr>
                                <td class='fontfam infotd'>RoomNumberType</td>
                                <td class='fontfam infotd'>RoomType</td>
                                <td class='fontfam infotd'>Check in Date</td>
                                <td class='fontfam infotd'>Check out Date</td>

                        </tr>";
                        for($i=0;$i<$len;$i++){
                                echo "<tr>";
                                echo "<td class='fontfam infotd'>".$roomorder1[$i]."</td>";
                                echo "<td class='fontfam infotd'>".$roomorder2[$i]."</td>";
                                echo "<td class='fontfam infotd'>".$roomorder3[$i]."</td>";
                                echo "<td class='fontfam infotd'>".$roomorder4[$i]."</td>";
                                echo "<form method='post' action='delete.php' >";
                                echo "</tr> ";
                            }
                    }
                }
                

                    
                            ?>
                        </table>
        </div>
        </body>
        </html>
