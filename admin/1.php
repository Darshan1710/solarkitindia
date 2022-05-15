
   
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Admin">
    <meta name="keywords" content="">
    <title>Admin</title>
    <!-- CORE CSS-->
    <link href="../admin/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="../admin/css/custom.css" type="text/css" rel="stylesheet">    
     </head>
  <body class="layout-semi-dark">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
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
                <a href="_profil.php" class="grey-text text-darken-1">
                  <i class="material-icons">person</i> Solar-kit.cz</a>
              </li> <li>
                <a href="?log_akce=5" class="grey-text text-darken-1">
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
              <a href="_admin.php" class="brand-logo darken-1">
                 <span class="logo-text hide-on-med-and-down">Solar-Kit</span>
              </a>
              <a href="#" class="navbar-toggler">
                <i class="material-icons">radio_button_checked</i>
              </a>
            </h1>
          </div>
          <ul id="slide-out" class="side-nav fixed leftside-navigation collapsible">
            
    
              <li class="bold">
                        <a href="_admin.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Texty stránek</span>
                        </a>
                      </li>
              <li class="bold">
                        <a href="_produkty.php">
                          <i class="material-icons">keyboard_arrow_right</i>
                          <span>Produkty</span>
                        </a>
                      </li>
              <li>
     	      <div class="collapsible-header white-text"><i class="material-icons">settings</i><span>E-mail</span></div>
     	      <div class="collapsible-body">
     	      	<ul>
     	      		<li><a href="_email.php"><i class="material-icons">keyboard_arrow_right</i><span>ze sběrače</span></a></li>
     	      		<li><a href="_produkt.php"><i class="material-icons">keyboard_arrow_right</i><span>z produktů</span></a></li>
     	      	</ul>
     	      </div>
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
   
          
          <div class="container white"> 
 <div class="row">

  </div>



   
 <div class="col s12">
  
 <div class="collection">
 <a class="collection-item" href="?add=true" title="Přidat">Kategorie <div class="right"><i class="material-icons">add</i></div></a>
<a class="collection-item black-text" href="?edit=1">str / SolarKit </a>

<a class="collection-item black-text" href="?edit=2">str / O nás </a>

<a class="collection-item black-text" href="?edit=4">str / kontakt </a>

<a class="collection-item black-text" href="?edit=5">str / reference </a>

<a class="collection-item black-text" href="?edit=6">str / faq </a>

<a class="collection-item black-text" href="?edit=7">str / Kalkulačka </a>

<a class="collection-item black-text" href="?edit=15">str / Patička </a>

<a class="collection-item black-text" href="?edit=16">str / Souhlas se zpracováním osobních údajů  </a>

<a class="collection-item black-text" href="?edit=17">str / Výhody fotovoltaické elektrárny </a>

<a class="collection-item black-text" href="?edit=18">str / Dotace - nová zelená úsporám </a>

<a class="collection-item black-text" href="?edit=19">str / Financování domácí elektrárny </a>

<a class="collection-item black-text" href="?edit=21">str / varianty produktu </a>

<a class="collection-item black-text" href="?edit=22">str / test </a>

<a class="collection-item black-text" href="?edit=3">produkt / solar-kit-2000-aku <span class='red-text'>Zakázáno</span> </a>

<a class="collection-item black-text" href="?edit=9">produkt / Solar Kit 2200 </a>

<a class="collection-item black-text" href="?edit=10">produkt / solar-kit-3600-aku <span class='red-text'>Zakázáno</span> </a>

<a class="collection-item black-text" href="?edit=11">produkt / Solar Kit 5000 AKU </a>

<a class="collection-item black-text" href="?edit=12">produkt / solar-kit-10000-aku <span class='red-text'>Zakázáno</span> </a>

<a class="collection-item black-text" href="?edit=23">produkt / Solar Kit 3600 </a>

<a class="collection-item black-text" href="?edit=28">produkt / Solar Kit 5000 </a>

<a class="collection-item black-text" href="?edit=31">produkt / Solar Kit 7000 </a>

<a class="collection-item black-text" href="?edit=8">reference / Instalovali jsme solární systém pro rodinný dům - 4,4 kW Praha </a>

<a class="collection-item black-text" href="?edit=13">reference / Instalovali jsme solární systém </a>

<a class="collection-item black-text" href="?edit=14">reference / Instalovali jsme solární systém  </a>

  </div>

</div>
</div>
</div>


        <!-- //////////////////////////////////////////////////////////////////////////// -->
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        
        </div>
        <!-- END WRAPPER -->
      </div>
      <!-- END MAIN -->
     <div class="modal" id="modal"></div>
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START FOOTER -->
      <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
            <span>04.10.2019             
          </div>
        </div>
      </footer>
      
      <!-- END FOOTER -->
      <!-- ================================================
    Scripts
    ================================================ -->
      <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="../js/bin/materialize.js"></script>
      <script type="text/javascript" src="../js/custom-script.js"></script>
     <script type="text/javascript" src="../js/plugins.js"></script>
     
      <style>
input.mce-textbox{
width: auto;
background: #fff;
border: 1px solid #c5c5c5;
display: inline-block;
-webkit-transition: border linear .2s, box-shadow linear .2s;transition: border linear .2s, box-shadow linear .2s;
height: 28px;
resize: none;
padding: 0 4px 0 4px;
white-space: pre-wrap;
color: #333;
}
</style>
     

  </body>
</html>