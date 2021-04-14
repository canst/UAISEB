<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="../css/styleUserDashboard.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style>
      #sidebar_link1,#sidebar_link2,#sidebar_link3,#sidebar_link4,#sidebar_link5,#sidebar_link6{
        color: #fff;
        display: block;
        width: 100%;
        line-height: 60px;
        text-decoration: none;
        padding-left: 40px;
        font-size:1.1em;
        box-sizing: border-box;
        transition: 0.5s;
        transition-property: background;
      }
    </style>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><a href="index.php"><span>ENIOLA</span></a></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn btn btn-primary">Déconnexion</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.jpg" class="mobile_profile_image" alt="">
        <?php
          $_SESSION['nom'];
        ?>
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard_organisation.php"><i class="fas fa-desktop"></i><span>status</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Suivi </span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>A propos</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Parametres</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="1.jpg" class="profile_image" alt="">
        <?php
          echo '<h4>'.$_SESSION['nom'].'</h4>';
        ?>
      </div>
      <a href="dashboard_organisation.php" id="sidebar_link1"><i class="fas fa-desktop"></i><span>Status</span></a>
      <a href="../view/by_org/" id="sidebar_link4"><i class="far fa-comment"></i><span>Suivi</span></a>
      <a href="#" id="sidebar_link5"><i class="fas fa-info-circle"></i><span>A propos</span></a>
      <a href="#" id="sidebar_link6"><i class="fas fa-cogs"></i><span>Parametres</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">