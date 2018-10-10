<?php
session_start();
?>
<?php
include 'check_if_logged_in.php'; 
checklogin();
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
            @media (min-width: 768px)
            .wrapper {
                max-width: 720px;
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
                transition: all 0.3s;
                border-radius: 10px;
            }
            img.schimg:hover{
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.9), 0 6px 20px 0 rgba(0,0,0,0.89);
                cursor: pointer;
                filter:blur(1px);
            }

            .button {
              position: absolute;
              width: 200px;
              left:0;
              top: 220px;
              text-align: center;
              opacity: 0;
              transition: opacity .35s ease;
            }

            .button a {
              width: 50px;
              padding: 6px 15px;
              text-align: center;
              color: white;
              border: solid 2px white;
              z-index: 1;
            }

            .containi:hover .button {
              opacity: 1;
            }
            .modal {
                display: none; 
                position: fixed; 
                z-index: 1; 
                padding-top: 100px; 
                left: 0;
                top: 0;
                width: 100%; 
                height: 100%; 
                overflow: auto; 
                background-color: rgb(0,0,0); 
                background-color: rgba(0,0,0,0.9);
            }
            .modalc {
                margin: auto;
                display: block;
                width: 25%;
                max-width: 700px;
            }
            .caption {
                margin: auto;
                display: block;
                width: 25%;
                max-width: 700px;
                text-align: center;
                color: #fff;
                padding: 10px 0;
                height: 150px;
            }
            .modalc, .caption { 
                animation-name: zoom;
                animation-duration: .8s;
            }
            @keyframes zoom {
                from {transform:scale(0)} 
                to {transform:scale(1)}
            }
            .close {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
            }
            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }
            @media only screen and (max-width: 700px){
                .modalc {
                    width: 100%;
                }
            }
            @media (min-width: 768px)
            .bio {
                max-width: 720px;
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
            }
            h5{
               line-height: 3.0; 
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
                  
                  <li class="nav-item">
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
            <div class="conpro" >
                <div class="containi">
 <?php    echo' <img src="studentimages/'.$_SESSION['sno'].'.jpg" alt="'.$_SESSION['sno'].'" class="schimg" id="imag"> ';  ?>
                    <div class="modal" id="imgmodal">
                        <span class="close">&times;</span>
                        <img class="modalc" id="imgmod">
                        <div class="caption"></div>
                    </div>
                    
                </div>
               <h1 style="position: relative;left: 20px;top: 75px; font-size:30px;width: auto;"><?php echo ucwords(strtolower($_SESSION["name"])) ; ?> </h1><br>
            
                <div class="wrapper" style="padding-left: 10px;border-radius: 5px;padding-right: 5px">
                    <i class="far fa-id-badge"></i><span itemprop="scholar"> <b><?php echo$_SESSION["sno"] ?></b></span><br><br>
                    <i class="fa fa-graduation-cap"></i><span itemprop="name"><b> NIT, Bhopal (Maulana Azad National Institute of Technology)</b></span><br><br>
                    <i class="fas fa-home"></i><span><b> <?php if(strtolower(str_replace(' ', '',$_SESSION['res_status'])) == "dayscholar" ) echo "Day Scholar"; else echo "Hosteller";  ?></b>  </span>

                </div> 
            </div>
            <div class="bio" style="word-wrap: break-word;">
                <h1 style="border-bottom: solid;border-width: thin;">Profile</h1>
                <h5>Name:&nbsp;<?php echo ucwords(strtolower($_SESSION['name'])) ; ?></h5>
                <h5><i class="fa fa-birthday-cake" style="color: pink;" ></i> :&nbsp;&nbsp;<?php echo $_SESSION["dob"]?></h5>
                <h5><i class="fa fa-mobile-phone" style="font-size: 30px"></i> :&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["cno"]?></h5>
                <h5><i class="far fa-address-card"></i> :&nbsp;&nbsp;<?php if(strtolower(str_replace(' ', '',$_SESSION['res_status'])) == "dayscholar" ) echo "Day Scholar"; else echo "Hosteller";  ?></h5>
                <h5><i class="far fa-heart" style="color: greenyellow"></i> : Single</h5>
            </div>
        </div><br><br><br>
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
        var modal = document.getElementById('imgmodal');
        var img = document.getElementById('imag');
        var modalImg = document.getElementById("imgmod");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
        </script>
    </body>
</html>