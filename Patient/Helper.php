<?php                        
                             session_start();
                             $T='';
                             if (isset($_POST['submit']))
                             { $servername = "localhost";
                               $username = "root";
                               $password = "" ;
                               $db='myhospital';
                               $conn = mysqli_connect($servername,$username,$password,$db);
                               $v="('".$_POST['name']."','".$_POST['surname']."','".$_POST['birthday']."','". $_POST['gender'] . "','" . $_POST['governorate'] . "','" . $_POST['REG_ID'] . "','" . $_POST['password']."')";
                               $insert="INSERT INTO `patient`(`Name`, `Surname`, `Birthdate`, `Gender`, `Governorate`, `Reg_ID`, `Password`) VALUES".$v;
                               if ($conn)
                                     {$sql="SELECT * FROM `patient` WHERE Reg_ID=".$_POST["REG_ID"].";";
                                      $query=mysqli_query($conn, $sql);
                                      $row = mysqli_fetch_array($query);
                                      if (($row[5]!=$_POST['REG_ID'])&&($_POST['name']!='')&&($_POST['surname']!='')&&( $_POST['birthday']!='')&&($_POST['gender']!='')&&($_POST['governorate']!='')&&($_POST['REG_ID']!='')&&($_POST['password']!=''))
                                      {
                                       $k=mysqli_query($conn, $insert);
                                       $_SESSION["REG_ID"] = $_POST["REG_ID"];
                                       header('Location: Patients_dashboard.php');
                                       exit;
                                      }else{
                                        $T="<div role='alert' 
                                        style='width:100%;
                                        margin-top:20px;
                                        align:center;
                                        position:relative;
                                        border: 1px solid transparent;
                                        border-radius: .25rem;
                                        color: #842029;
                                        background-color: #f8d7da;
                                        border-color: #f5c2c7;
                                        text-align:center;
                                        font-size: 1.2em;
                                        '> You've put a duplicate ID or one of elemnts is empty</div> ";
                                        }}
                             }
                             ?>