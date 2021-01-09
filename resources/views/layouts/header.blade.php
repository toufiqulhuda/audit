<?php require_once app_path() . '/helpers.php'; ?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <title>{{ config('app.name', '') }}</title>        
        <link href="{{URL::to('/')}}/nbl/css/css.css" rel="stylesheet" type="text/css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   
<meta name="csrf-token" content="{{ csrf_token() }}" />
     <!-- Scripts -->
        <!--[if lt IE 8]><script type="text/javascript" src="/public/js/html5shiv.min.js"></script><![endif]-->
<!--[if lt IE 8]><script type="text/javascript" src="/public/js/respond.min.js"></script><![endif]-->
<script type="text/javascript" src="{{URL::to('/')}}/nbl/js/jquery-2.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/nbl/js/bootstrap.js"></script>        <!-- Le styles -->
<link href="{{URL::to('/')}}/nbl/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
<link href="{{URL::to('/')}}/nbl/css/nblstyle.css" media="screen" rel="stylesheet" type="text/css">
<link href="{{URL::to('/')}}/nbl/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

        <!-- jQuery (required) & jQuery UI + theme (optional) -->
        <script src="{{URL::to('/')}}/nbl/js/jquery.js"></script>
        <script src="{{URL::to('/')}}/nbl/js/bootstrap-datepicker.js"></script>
        <!-- demo only -->
        <link rel="stylesheet" href="{{URL::to('/')}}/nbl/css/jquery.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/nbl/css/datepicker.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/nbl/css/datepicker.txt">
        <!--- Data Table --->
        <!--CSS--->

        <!--<link rel="stylesheet" href="{{URL::to('/')}}/DataTable/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="{{URL::to('/')}}/DataTable/css/dataTables.bootstrap.min.css">
        <!--js-->
        <!--<link rel="stylesheet" href="{{URL::to('/')}}/DataTable/js/jquery-1.12.4.js">-->
        <link rel="stylesheet" href="{{URL::to('/')}}/DataTable/js/jquery.dataTables.min.js">
        <link rel="stylesheet" href="{{URL::to('/')}}/DataTable/js/dataTables.bootstrap.min.js">
        
        
        <!--[if lt IE 9]>
        <script src="/public/js/html5shiv.js" type="text/javascript"></script>
        <script src="/public/js/respond.min.js" type="text/javascript"></script>
       <![endif]-->
        <!--<script>
            $(document).ready(function() {
                $(document).tooltip();
            });

            function PopupCenter(url, title, w, h) {
                // Fixes dual-screen position                         Most browsers      Firefox
                var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
                var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

                width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
                height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

                var left = ((width / 2) - (w / 2)) + dualScreenLeft;
                var top = ((height / 2) - (h / 2)) + dualScreenTop;
                var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

                // Puts focus on the newWindow
                if (window.focus) {
                    newWindow.focus();
                }
            }
        </script>  


        <script language="javascript">
            //document.onmousedown = disableclick;
            status = "Right Click Disabled";
            function disableclick(event)
            {
                if (event.button == 2)
                {
                    alert(status);
                    return false;
                }
            }

        </script>-->
</head>
<body class="dashboard">
                <!-- wrapper -->
    <div id="wrapper">
            <!-- shell -->
    <div id="body-top"></div>
<div class="main">
<div class="header">
    <a href="#">
        <img src="{{URL::to('/')}}/nbl/img/header_white.png" class="img-responsive  logo_img" alt="NBL">
    </a>
</div>
<div id="navigation"></div>

<div class="content-box">

    
@if (Auth::user())
<div class="btn_toolbarr">
    <div class="r-toolbar">
        <ul>
            @guest
                <li><a  href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a  href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
                <!--<li><a href="#">Profile</a></li>-->
                <li>&nbsp;&nbsp;User ID : <span>{{ Auth::user()->username }}</span></li>
                <li>&nbsp;&nbsp;Welcome : <span>{{ Auth::user()->name }}</span></li>
                <li>&nbsp;&nbsp;Branch : <span>{{ getBranchName(Auth::user()->branch_id) }}</span></li>
                <li>&nbsp;&nbsp;Role : <span>{{ getRoleName(Auth::user()->roleid) }}</span></li>
                
                
                <!--<li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>-->
            @endguest
            
        </ul>
    </div>
</div>
@endif

