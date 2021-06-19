<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/Hospital.ico">

    <!-- Title Page-->
    <title>Patient</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1" style='margin-top:10px;'>
                <div  align='center'>
                <img src='../images/box-img2.jpg' height=50% width=50% align='center' style='margin-top:10px; border-raduis:50%;' >  
                </div>
                <div class="card-body">
                    <h2 class="title" align='center'>Login</h2>
                    <form action='' method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group" style='width:150%;border-bottom: 0px solid #ccc;font-size: 1.2em;'>
                                    <input class="input--style-1" style='width:150%; margin-bottom: 1rem;font-size: 1.2em;'type="text" placeholder="REGISTRATION ID" name="REG_ID">
                                    <input class="input--style-1" style='width:150%' type="password" placeholder="PASSWORD" name="password">
                                    <?php 
                                     if(isset($_POST["Login"]))
                                     {$server = 'localhost';
                                     $user = 'root';
                                     $password = '';
                                     $database = 'Myhospital';
                                     $conn = mysqli_connect($server,$user,$password,$database);
                                     echo $_POST["REG_ID"];
                                     if ($conn)
                                     {$sql = "SELECT * FROM `patient` WHERE `Reg_ID` = "."'".$_POST["REG_ID"]."'";
                                      $query = mysqli_query($conn,$sql);
                                      $num_rows=mysqli_num_rows($query);
                                      echo $num_rows;
                                      if ( $num_rows == 0)
                                         {
                                         echo "<div role='alert' 
                                         style='width:150%;
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
                                         '> Wrong ID or invalid password </div> ";    
                                          } else {$row = mysqli_fetch_array($query);
                                                  if ($row['Password'] == $_POST["password"] && $row['Reg_ID'] == $_POST["REG_ID"] )
                                                  {header("Location: ../Patient/Patients_dashboard.php");  
                                                   exit();
                                                  }else{echo "<div role='alert' 
                                                                style='width:150%;
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
                                                                '> Put the right password </div> ";         
                                                        }
                                                 }
                                     }}
                                     ?>
                                </div>
                            </div>
                        <div class="p-t-20" style='padding-left:35%;' >
                            <a  class ="btn btn--radius btn--green" href='../index.html' align='left' style='text-decoration:none;'>
                                return
                             </a>
                            <button class="btn btn--radius btn--green" type="submit" name="Login" align='right'>Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>