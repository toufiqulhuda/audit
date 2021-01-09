@extends('layouts.app')
 
@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('Reset User Password') }}</h3>
 
    <div class="panel-body">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(empty($users))
            <form class="form-horizontal" method="POST" action="{{ route('search-user') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} row">
                    <label for="username" class="col-md-4 control-label"><b>{{__('User Name')}}</b></label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" required>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Search') }}
                        </button>
                    </div>
                </div>
            </form>
            @else

            <form class="form-horizontal" method="POST" action="{{ route('reset-user-password') }}">
                {{ csrf_field() }}
            <div class="ipower_content">
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width:130px;">Name  </div>
                    <div class="ipower_data_table_info">: &nbsp;{{ $users->name }}</div>
                </div>
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width:130px;">E-Mail </div>
                    <div class="ipower_data_table_info">: &nbsp;{{ $users->email }}</div>
                </div>
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width:130px;">Address  </div>
                    <div class="ipower_data_table_info addsInfo">: &nbsp; {{ $users->address }}</div>
                </div>
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width:130px;">Mobile Number </div>
                    <div class="ipower_data_table_info">: &nbsp;{{ $users->mobile }}</div>
                </div> 
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width:130px;">Office Phone </div>
                    <div class="ipower_data_table_info">: &nbsp;</div>
                </div> 
                <div class="ipower_data_table" >
                    <div class="ipower_data_table_title" style="width: 130px;">Date of birth</div>
                    <div class="ipower_data_table_info">: &nbsp;</div>
                </div> 
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width: 130px;">User Name</div>
                    <div class="ipower_data_table_info">: &nbsp;{{ $users->username }}
                        <input id="username" type="hidden"  name="username" value="{{ $users->username }}" required>
                    </div>
                </div> 
                <!--<div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width: 130px;">New Password</div>
                    <div class="ipower_data_table_info">: &nbsp;
                        <input id="new-password" type="password"  name="new-password"  required>
                    </div>
                </div> 
                <div class="ipower_data_table">
                    <div class="ipower_data_table_title" style="width: 130px;">Confirm New Password</div>
                    <div class="ipower_data_table_info">: &nbsp;
                        <input id="new-password-confirm" type="password" name="new-password_confirmation" required>
                    </div>
                </div> -->

            </div>
                <div class="form-group row">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
            @endif
    </div>
</div>

@endsection