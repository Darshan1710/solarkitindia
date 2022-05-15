<?php if (!isset($_data["prava"])){formular($text);} else {

	

    $_id = $_SESSION["user"]["id"];

    $_res = mysqli_query($db,"select name, prava from user where id = '$_id'");

    $_data = mysqli_fetch_assoc($_res);

   

    $header_title="";

 if ($_data["prava"] == "1") { ?>

   

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="msapplication-tap-highlight" content="no">

    <meta name="description" content="Admin">

    <meta name="keywords" content="">

    <title>Solar-Kit.in</title>

    <!-- CORE CSS-->

    <link href="../admin/css/materialize.css" type="text/css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custome CSS-->

    <link href="../admin/css/custom.css" type="text/css" rel="stylesheet">    

    <link rel="icon" href="http://localhost/solarkitindia.com/images/favi-80x80.png" type="image/png">

     </head>

  <body class="layout-semi-dark loaded">

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->

    <header id="header" class="page-topbar">

      <!-- start header nav-->

      <div class="navbar-fixed">

        <nav class="navbar-color">

          <div class="nav-wrapper">

            <!-- profile-dropdown -->

        <ul class="right">

 <li>

                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">

                  <i class="material-icons">account_circle</i>

                </a><ul id="profile-dropdown" class="dropdown-content" style="white-space: nowrap; opacity: 1; left: 1071px; position: absolute; top: 64px; display: none;">

             

              <li>

                <a href="profil.php" class="grey-text text-darken-1">

                  <i class="material-icons">person</i> <?php echo $_data["name"];?></a>

              </li> 

              <li>

                <a href="help.php" class="grey-text text-darken-1">

                  <i class="material-icons">live_help</i> Help</a>

              </li><li>

                <a href="../admin/?log_akce=5" class="grey-text text-darken-1">

                  <i class="material-icons">keyboard_tab</i> Logout</a>

              </li>

            </ul>

              </li></ul>

          </div>

        </nav>

      </div>

    </header>

    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->

    <div id="main">

      <!-- START WRAPPER -->

      <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->

        <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">

          <div class="brand-sidebar hide-on-med-and-down">

            <h1 class="logo-wrapper ">

              <a href="../admin/" class="brand-logo darken-1">

                 <span class="logo-text hide-on-med-and-down">Solar-Kit.in</span>

              </a>

              <a href="#" class="navbar-toggler">

                <i class="material-icons">radio_button_checked</i>

              </a>

            </h1>

          </div>

          <ul id="slide-out" class="side-nav fixed leftside-navigation collapsible">

            

    <?php /*

              <li class="bold">

                        <a href="../admin/">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Web site</span>

                        </a>

                      </li>

         

              <li class="bold">

                        <a href="blog.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Blog</span>

                        </a>

                      </li>

      <li class="bold">

                        <a href="projects.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Projects</span>

                        </a>

                      </li>

	 * 

	 */?>

      <li class="bold">

                        <a href="page1.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>New categories</span>

                        </a>

                      </li>

     

        <li class="bold">

                        <a href="blog1.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Blog new</span>

                        </a>

                      </li>    

         <li class="bold">

                        <a href="projects1.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Projects new</span>

                        </a>

                      </li>       

         <li class="bold">

                        <a href="contact.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Contact</span>

                        </a>

                      </li>     

         

         <li class="bold">

                        <a href="http://localhost/solarkitindia.com/admin/product.php">

                          <i class="material-icons">keyboard_arrow_right</i>

                          <span>Products</span>

                        </a>

                      </li>     

                                   

                      

                      

                        

              </ul>

            

          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">

            <i class="material-icons">menu</i>

          </a>

        </aside>

        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->

        <section id="content">

          <!--start container-->

   

          

          <?php }} ?>