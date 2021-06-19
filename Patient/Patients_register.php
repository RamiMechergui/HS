<?php include'Helper.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Patient</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../images/Hospital.ico.ico">
    <!-- Icons font CSS-k->
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
                    <h2 class="title" align='center'>Patient Info</h2>
                    <form action='' method="POST" >
                        <div class="input-group">
                            <div class="row row-space">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name" required>
                            <input class="input--style-1" type="text" placeholder="SURNAME" name="surname" required>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected" required>GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="governorate">
                                    <option disabled="disabled" selected="selected" required>governorates</option>
                                    <option>Tunis</option>
                                    <option>Sfax</option>
                                    <option>Sousse</option>
                                    <option>Sidi Bouzid</option>
                                    <option>Gasserine</option>
                                    <option>Kebili</option>
                                    <option>Kef</option>
                                    <option>Jenfouba</option>
                                    <option>Tozeur</option>
                                    <option>Gafsa</option>
                                    <option>Tatouine</option>
                                    <option>Bizerte</option>
                                    <option>Beja</option>
                                    <option>Nebel</option>
                                    <option>Gabes</option>
                                    <option>Medenine</option>
                                    <option>kairaouen</option>
                                    <option>Siliana </option>
                                    <option>Mahdia</option>
                                    <option>zaghouen</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="REGISTRATION ID" name="REG_ID" required>
                                </div>
                            </div>
                        </div>
                          <div class="input-group">
                            <div class="row row-space">
                            <input class="input--style-1" type="password" placeholder="PASSWORD" name="password" required>
                            </div>
                        </div>
                        <?php echo $T ;?>
                        <div class="p-t-20" style='padding-left:35%;' >
                            <a  class ="btn btn--radius btn--green" href='../index.html' align='left' style='text-decoration:none;'>
                                return
                             </a>
                            <button class="btn btn--radius btn--green" type="submit" align='right'name='submit' >Submit</button>
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