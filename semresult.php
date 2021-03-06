<?php
session_start();
?>
<?php
include 'check_if_logged_in.php'; 
include 'establish_connection.php';
checklogin();
$conn=connect();
$snum=$_SESSION["sno"];
$sql1 = "SELECT * FROM sub1ada where sno=$snum ";
$sql2 = "SELECT * FROM sub2dbms where sno=$snum ";
$sql3 = "SELECT * FROM sub3se where sno=$snum ";
$sql4= "SELECT * FROM sub4toc where sno=$snum ";
$sql5 = "SELECT * FROM sub5coa where sno=$snum ";
$sql6 = "SELECT * FROM sub6pqt where sno=$snum ";
$result1= mysqli_query($conn, $sql1);
$result2= mysqli_query($conn, $sql2);
$result3= mysqli_query($conn, $sql3);
$result4= mysqli_query($conn, $sql4);
$result5= mysqli_query($conn, $sql5);
$result6= mysqli_query($conn, $sql6);
$row1= mysqli_fetch_assoc($result1);
$row2= mysqli_fetch_assoc($result2);
$row3= mysqli_fetch_assoc($result3);
$row4= mysqli_fetch_assoc($result4);
$row5= mysqli_fetch_assoc($result5);
$row6= mysqli_fetch_assoc($result6);


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
        
        <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
        <title>Dashboard</title>
        <link rel="icon" type="image/jpg" href="manit.png"/>
        <style>
         html, body {
                max-width: 100%;
                overflow-x: hidden;
            }
            .wrapper{
                position: relative;
                width: 200px;
                height:180px;
                word-wrap: break-word;
                left: 20px;
                top: 80px;
                background:#E5E7E9 ;
                margin-bottom: 50px;
                padding-top: 5px;
            
            }
            .wrapper:hover{
            
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                background: linear-gradient( #F2F3F4, #FDFEFE);
                color:black;
            
            }
            .containi {
              position: relative;
              top: 60px;
                left: 20px;
              width: 200px;
              height: 270px;
            }
            img.schimg {
              position: absolute;
              width: 200px;
              height: 270px;
              left: 0;
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                transition: all 0.6s;
                border-radius: 10px;
            }
            img.schimg:hover{
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.9), 0 6px 20px 0 rgba(0,0,0,0.89);
                cursor: pointer;
                width:120%;
                height: 120%;
            }
            .footer {
                position: relative;
                bottom: 0;
                width: 100%;
                padding-bottom: 50px;
                background: #FDFEFE;
                padding: 10px 0;
            }
            .footer a {
                color: #000000;
                font-size: 20px;
                padding: 10px;
                border-right: 0px solid #70726F;
                transition: all .5s ease;   
            }
            footer a.class1:hover {
                color:  #3B5998;
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }
            footer a.class2:hover {
                color:  #55acee;
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }
            footer a.class3:hover {
                color:  #dd4b39;
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }
            li{
                margin-right: 30px;
            }
            a.navbar-brand{
               margin-right: 30px; 
            }
            
            
            .bio {
                position: relative;
                width: 70%;
                padding-right: 30px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;  
                display: block;
                bottom:500px;
                left: 120px;
                border-radius: 10px;
                background: #F4F6F7;
                text-align: center;
                
            }
            body {font-family: Arial, Helvetica, sans-serif;}
            .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 150px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}
            @keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}
@media (min-width: 1366px) {
  .modal-content {
    background-color: #fefefe;
    margin: 10vh auto; /* 15% from the top and centered */
    padding: 0px;
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
	}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

button.button {
 	background: linear-gradient(#000000,#2C3E50);
  border-top:none;
  border-right:none;
  border-left:none;
  border-bottom:#02274a 1px solid;
  padding: 15px;
                min-width: 200px;
    color: #fff;
  font-size:16px;
    margin-bottom: 100px;
    border-radius: 5px;
}

button.button:hover {
  color: #fff;
    box-shadow: 0 10px 16px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.49);
    cursor:pointer;
}
            .contact-form {
    padding-top: 20px;
                padding-left: 15px;
                padding-right: 15px;
    background-color: #212F3D;
    color: white;
                height: 80px;
                
}
        </style>
    </head>
    
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">3 coders</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="dashboardfinal.php"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
                  </li>
                 <li class="nav-item active">
                    <a class="nav-link" href="syllabus.php">Syllabus</a>
                  </li>
                  
                  <li class="nav-item active">
                    <a class="nav-link" href="semresult.php">Sem Result</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pastresult.php">Past Result</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0"action="generalprofile.php" method="get">
                  <div class="input-group">
                    <input type="text"name="sno" class="form-control" placeholder="Scholar no." aria-label="Scholar no." aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
                   <div class="jam" style="position: relative;left:60px;">
                      <ul class="navbar-nav mr-auto" >
                          <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo ucwords(strtolower($_SESSION["name"])) ; ?> <i class="fa fa-caret-down" style="font-weight: 700;"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="myprofile.php">Profile</a>
                              <a class="dropdown-item" href="settings.php">Settings</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                          </li>
                      </ul>
                    </div>
              </div>
            </div>
        </nav>
        <div class="container-fluid" style="background: linear-gradient( #F2F3F4, #FDFEFE);">
            <div class="containi">
                <?php    echo' <img src="studentimages/'.$_SESSION['sno'].'.jpg" alt="'.$_SESSION['sno'].'" class="schimg" id="imag"> ';  ?>
                
            </div>
            <h1 style="position: relative;left: 20px;top: 75px; font-size:30px;width: auto;"><?php echo ucwords(strtolower($_SESSION["name"])) ; ?> </h1><br>
            <div class="wrapper" style="padding-left: 10px;border-radius: 5px;padding-right: 5px">
                <i class="far fa-id-badge"></i><span itemprop="scholar"> <b><?php echo$_SESSION["sno"] ?></b></span><br><br>
                <i class="fa fa-graduation-cap"></i><span itemprop="name"><b> NIT, Bhopal (Maulana Azad National Institute of Technology)</b></span><br><br>
                <i class="fas fa-home"></i><span><b> <?php if(strtolower(str_replace(' ', '',$_SESSION['res_status'])) == "dayscholar" ) echo "Day Scholar"; else echo "Hosteller";  ?>  </b></span>
            </div>
            <div class="bio" >
                <button class="button" data-modal="#modalOne" style="margin-top: 50px;margin-right: 100px">ADA</button>
                <button class="button" data-modal="#modalTwo" style="margin-top: 50px;">DBMS</button><br>
                <button class="button" data-modal="#modalThree" style="margin-right: 100px">S/W Engg</button>
                <button class="button" data-modal="#modalFour">TOC</button><br>
                <button class="button" data-modal="#modalFive" style="margin-right: 100px">COA</button>
                <button class="button" data-modal="#modalSix">PQT</button><br>
            </div>
        </div><br><br><br>
        <div id="modalOne" class="modal">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>ADA</h2><br>
    </div>
  <div class="modal-body">
    <h4>End Sem : <?php echo $row1["end"]?></h4>
      <h4>Mid : <?php echo $row1["mid"]?></h4>
      <h4>Mini : <?php echo $row1["mini"]?></h4>
  </div>
  </div>
</div>

<div id="modalTwo" class="modal">
  <div class="modal-content">
    <div class="contact-form">
      <span class="close">&times;</span>
      <h2>DBMS</h2><br>
    </div>
      <div class="modal-body">
    <h4>End Sem : <?php echo $row2["end"]?></h4>
      <h4>Mid : <?php echo $row2["mid"]?></h4>
      <h4>Mini : <?php echo $row2["mini"]?></h4>
  </div>
  </div>
</div>
        <div id="modalThree" class="modal">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>S/W Engg</h2><br>
    </div>
  <div class="modal-body">
    <h4>End Sem : <?php echo $row3["end"]?></h4>
      <h4>Mid : <?php echo $row3["mid"]?></h4>
      <h4>Mini : <?php echo $row3["mini"]?></h4>
  </div>
  </div>
</div>
        <div id="modalFour" class="modal">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>TOC</h2><br>
    </div>
  <div class="modal-body">
    <h4>End Sem :  <?php echo $row4["end"]?></h4>
      <h4>Mid :  <?php echo $row4["mid"]?></h4>
      <h4>Mini :  <?php echo $row4["mini"]?></h4>
  </div>
  </div>
</div>
        <div id="modalFive" class="modal">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>COA</h2><br>
    </div>
  <div class="modal-body">
    <h4>End Sem :  <?php echo $row5["end"]?></h4>
      <h4>Mid :  <?php echo $row5["mid"]?></h4>
      <h4>Mini :  <?php echo $row5["mini"]?></h4>
  </div>
  </div>
</div>
        <div id="modalSix" class="modal">
  <div class="modal-content">
    <div class="contact-form">
      <a class="close">&times;</a>
      <h2>PQT</h2><br>
    </div>
  <div class="modal-body">
    <h4>End Sem :  <?php echo $row6["end"]?></h4>
      <h4>Mid :  <?php echo $row6["mid"]?></h4>
      <h4>Mini :  <?php echo $row6["mini"]?></h4>
  </div>
  </div>
</div>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
        <footer class="footer">
            <div class="container text-center">
                <a href="#" class="class1"><span class="fa fa-facebook-square fa-2x"></span></a>
                <a href="#" class="class2"><span class="fa fa-twitter-square fa-2x"></span></a>
                <a href="#" class="class3"><span class="fa fa-google-plus-square fa-2x"></span></a>
            </div>
            <div class="copyright-text">
                <p><center><strong><b>Copyright &copy; 2018 All Rights Reserved To 3coders</b></strong></center></p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
        
        $(".button").on("click", function() {
  var modal = $(this).data("modal");
  $(modal).show();
});

$(".modal").on("click", function(e) {
  var className = e.target.className;
  if(className === "modal" || className === "close"){
    $(this).closest(".modal").hide();
  }
});
        </script>
    </body>
</html>