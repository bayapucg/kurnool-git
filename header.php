<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kurnool</title>
   

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrapValidator.min.css" rel="stylesheet">
	
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    
    <link href="css/color.css" rel="stylesheet" />
	<script src="js/jquery.min.js"></script>
</head>

   
<body class="theme-red">
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Kurnool Plasting Bags</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMIN</div>
                    <div class="email">admin@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                        
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">dashboard </i>
                            <span>Dashboard</span>
                        </a>
                    </li> 
					
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person_add</i>
                            <span>Plastic bags</span>
                        </a>
                        <ul class="ml-menu">
                           <li>
								<a href="add-vendor.php">Roll printing</a>
							</li>	
							<li>
								<a href="hm-offset-single-colour.php">HM offset single colour</a>
							</li>
							<li>
								<a href="hm-ld-sizes-list.php">HM, LD sizes & No/kg </a>
							</li>
							<li>
								<a href="u-cut.php">U-Cut</a>
							</li>
                            
                        </ul>
                    </li>
					<li>
                        <a href="bag-colours-gsm.php">
                            <i class="material-icons">dashboard </i>
                            <span>Bag colours & GSM</span>
                        </a>
                    </li>
					<li>
                        <a href="bag-sizes.php">
                            <i class="material-icons">dashboard </i>
                            <span>Bag Sizes</span>
                        </a>
                    </li>
					<li>
                        <a href="side-patty.php">
                            <i class="material-icons">dashboard </i>
                            <span>Side patty</span>
                        </a>
                    </li>
					<li>
                        <a href="block-charges.php">
                            <i class="material-icons">dashboard </i>
                            <span>Block charges</span>
                        </a>
                    </li>
					<li>
                        <a href="printing-colours.php">
                            <i class="material-icons">dashboard </i>
                            <span>Printing colours</span>
                        </a>
                    </li>
					<li>
                        <a href="moq.php">
                            <i class="material-icons">dashboard </i>
                            <span>MOQ</span>
                        </a>
                    </li>	
					<li>
                        <a href="zip-handle.php">
                            <i class="material-icons">dashboard </i>
                            <span>Zip & Handle</span>
                        </a>
                    </li>
					<li>
                        <a href="d-cut-handle-prices.php">
                            <i class="material-icons">dashboard </i>
                            <span>D cut / Handle Prices</span>
                        </a>
                    </li>
					<li>
                        <a href="handle-stitching-bags.php">
                            <i class="material-icons">dashboard </i>
                            <span>Handle stitching bags</span>
                        </a>
                    </li>
					<li>
                        <a href="stitching.php">
                            <i class="material-icons">dashboard </i>
                            <span>Stitching</span>
                        </a>
                    </li>
					<li>
                        <a href="own-digital-bags.php">
                            <i class="material-icons">dashboard </i>
                            <span>Own Digital Bags</span>
                        </a>
                    </li>
					<li>
                        <a href="stick-bags.php">
                            <i class="material-icons">dashboard </i>
                            <span>Stick Bags</span>
                        </a>
                    </li>
					
					
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                   <a href="javascript:void(0);">Kurnool</a>.
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>

    