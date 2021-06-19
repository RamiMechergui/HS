<?php include'Helper.php' ?>
<?php   
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'Myhospital';
        $conn = mysqli_connect($server,$user,$password,$database);
        $_POST['REG_ID'] = $_SESSION["REG_ID"];                                     
        $sql="SELECT * FROM `patient` WHERE Reg_ID=".$_POST['REG_ID'];
        $query=mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if ($row[3] == 'Female')
        {$G='Ms.';}else{$G='Mr.';}
        ?> 
<DOCTYPE! html>
<head>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 90%;
  width: 50%;
  position: relative;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 10%;
}

.sidenav span {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}
.alert{text-align:center;
       max-width:80%;
       margin-left:20%;
       margin-right:20%;
       margin-top: 20%;}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
body {
  background-color: white;}
div {
  color: white;
  font: 20 1em/150% Impact;
  text-align: center;
  padding-top: 20px;}


/* loading dots */

.loading:after {
  content: ' .';
  animation: dots 1s steps(5, end) infinite;}

@keyframes dots {
  0%, 20% {
    color: rgba(0,0,0,0);
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  40% {
    color: white;
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  60% {
    text-shadow:
      .25em 0 0 white,
      .5em 0 0 rgba(0,0,0,0);}
  80%, 100% {
    text-shadow:
      .25em 0 0 white,
      .5em 0 0 white;}}
</style>
<body>

<nav class="navbar navbar-dark bg-primary" >
  <div class="container-fluid"  >
    <a class="navbar-brand" href="#">
      <img src="..\images\hospital.svg" alt="" width="40" height="50">
       Hospital Managment System
    </a>
    <a class="navbar-brand" href="#">
       <?php 
        echo ucfirst($G.' '.$row[0]).' '.ucfirst($row[1]);
        ?>
      <img src="..\Patient\images\patient.svg" alt="" width="40" height="50">
    </a>
  <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Setting
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="../Patient/Patients_Login.php">Quit</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="sidenav">
  <span href="#contact">Date of registration :<?php echo $row[7];?></span>
  <span href="#contact">Registration ID :<?php echo $row[5]; ?></span>
  <span href="#about">Name :<?php echo ucfirst($row[0]);?></span>
  <span href="#services">Surname :<?php echo ucfirst($row[1]);?></span>
  <span href="#clients">Birthdate :<?php echo $row[2];?></span>
  <span href="#contact">Gender :<?php echo ucfirst($row[3]);?></span>
  <span href="#contact">Governorate :<?php echo ucfirst($row[4]);?></span>
  <div class="alert alert-success loading" role="alert" >
  Under processing .... 
  </div>  
</div>
    

    
    
    
    
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script><head>
</body>
<html>