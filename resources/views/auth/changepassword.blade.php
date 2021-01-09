@extends('layouts.app')
 
@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('Change Password') }}</h3>
 
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
                    <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }} row">
                            <label for="new-password" class="col-md-4 control-label"><b>{{__('Current Password')}}</b></label>
 
                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>
 
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }} row">
                            <label for="new-password" class="col-md-4 control-label"><b>{{__('New Password')}}</b></label>
 
                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>
 
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="new-password-confirm" class="col-md-4 control-label"><b>{{ __('Confirm New Password') }}</b></label>
 
                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Change Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection