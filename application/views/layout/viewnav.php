<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>AdminLTE 3 | Top Navigation</title>
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="<?=base_url()?>assets/template/plugins/fontawesome-free/css/all.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?=base_url()?>assets/template/dist/css/adminlte.min.css">
 <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" 
rel="stylesheet">
</head>
 <div class="collapse navbar-collapse order-3" id="navbarCollapse">
 <!-- Left navbar links -->
 <ul class="navbar-nav">
 <li class="nav-item">
 <a href="#" style= "color:white" class="nav-link">Home</a>
 </li>
 <li class="nav-item">
 <a href="#" style= "color:white" class="nav-link">Map</a>
 </li>
 <li class="nav-item dropdown">
 <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style= "color:white" class="nav-link dropdown-toggle">Download</a>
 <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
 <li><a href="<?=base_url()?>assets/images.zip" class="dropdown-item">images.zip</a></li> 
 <li><a href="<?=base_url()?>assets/images2.zip"class="dropdown-item">images2.zip</a></li> 
 <li><a href="<?=base_url()?>assets/images3.zip"class="dropdown-item">images3.zip</a></li>
 <li class="dropdown-divider"></li>
 <!-- End Level two -->
 </ul>
 </li>
 </ul>
 <!-- SEARCH FORM -->
 </div>
 </nav>
 <!-- /.navbar -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
 <!-- Control sidebar content goes here -->
 <div class="p-3">
 <h5>Title</h5>
 <p>Sidebar content</p>
 </div>
</aside>