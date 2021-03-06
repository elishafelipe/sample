<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>IPBEPA</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('admin/assets/css/font-awesome.cs')}}s" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('admin/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('admin/assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    
</head>

<body>
<nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-plane"></i> IPBEPA</strong></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
</nav>
    @yield('contents')

<!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('admin/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{asset('admin/assets/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('admin/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/morris/morris.js')}}"></script>
	
	
	<script src="{{asset('admin/assets/js/easypiechart.js')}}"></script>
	<script src="{{asset('admin/assets/js/easypiechart-data.js')}}"></script>
	
	 <script src="{{asset('admin/assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{asset('admin/assets/js/custom-scripts.js')}}"></script>

      
    <!-- Chart Js -->
    <script type="{{asset('admin/text/javascript" src="assets/js/Chart.min.js')}}"></script>  
    <script type="{{asset('admin/text/javascript" src="assets/js/chartjs.js')}}"></script> 
    <script src="https://kit.fontawesome.com/cd014fdd9f.js" crossorigin="anonymous"></script>

</body>
</html>