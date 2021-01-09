<?php require_once app_path() . '/helpers.php'; 

?>

<div class="respon_menu">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Navigation</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">A/C Balance</a></li>
                            <li><a href="#">A/C Statement</a></li>
                        </ul>
                    </li>                                            
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">-->
            <div class="dashboard_left_nav">

                <div class="nav_box">
                    @if(isset($items)>0)
                    @foreach($items as $item)
                        @if($item->isactive=='1' && $item->roleid==Auth::user()->roleid)
                        <h3>{{ $item->menu_name }}</h3>
                        <ul>
                            @foreach($item['children'] as $child)
                            @if ($child->isactive == '1' && $child->roleid==Auth::user()->roleid)  
                            <li><a href="{{ route($child->menu_url) }}">{{ $child->menu_name }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                        @endif
                    @endforeach
                    @endif
               

                    <!--<h3>Profile</h3>
                    <ul>
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('changePassword') }}">Change Password</a></li>
                    </ul>
                    <h3>Settings</h3>
                    <ul>
                        <li><a href="{{ route('register') }}">New User</a></li>
                        <li><a href="{{ route('user-management') }}">Manage User</a></li>
                        <li><a href="{{ route('user-role') }}">New User Role</a></li>
                        <li><a href="#">Menu Management</a></li>
                        <li><a href="{{ route('add-branch') }}">Add New Branch</a></li>
                        <li><a href="{{ route('reset-user-password') }}">Reset User Password</a></li>
                    </ul>
                    <h3>Set Catagory</h3>
                    <ul>
                        <li><a href="{{ route('add-catagory') }}">Add Catagory</a></li>
                        
                    </ul>
                    <h3>Questions Bank</h3>
                    <ul>
                        <li><a href="{{ route('add-question') }}">New Question</a></li>
                        <li><a href="#">Manage Questions</a></li>
                    </ul>
                    <h3>Compliance</h3>
                    <ul>
                        <li><a href="{{route('report-issue')}}">Report Issue</a></li>
                        <li><a href="#">View Issues</a></li>
                        
                    </ul>-->
                    
                    
                </div>
            </div>
        <!--</div>-->