@extends('layouts.app')

@section('content')
<div class="dashboard_right_container">
    <h3 class="page_title">{{ __('User Registration Form') }}</h3>

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
                        
                        <!--<script language="javascript">

                            $(document).ready(function() {
                                
                                $('#name').datepicker({
                                    format: 'dd-mm-yyyy'
                                });
                                //$('#example').DataTable();
                            } );
                        </script>-->
                   
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 control-label"><b>{{ __('Full Name') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Full Name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 control-label"><b>{{ __('E-Mail Address') }}</b></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address" class="col-md-4 control-label"><b>{{ __('Address') }}</b></label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="{{ __('Address') }}" required>{{ old('Address') }}</textarea>
                                
                                <!--<input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="{{ __('Address') }}" required>-->

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 control-label"><b>{{ __('Mobile Number') }}</b></label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" placeholder="{{ __('e.s. 01712111000') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="userprivilege" class="col-md-4 control-label"><b>{{ __('User Privilege') }}</b></label>

                            <div class="col-md-6">
                                
                                <!--<input id="userprivilege" type="text" class="form-control{{ $errors->has('userprivilege') ? ' is-invalid' : '' }}" name="userprivilege" value="{{ old('userprivilege') }}" placeholder="{{ __('User Privilege') }}" required autofocus>-->

                                <select id="userprivilege" name="userprivilege" class="form-control"  required autofocus>
                                    
                                    <option value="0" >-- Select Role --</option>
                                    @foreach ($role as $row)
                                    <option value="{{$row->roleid}}" >{{$row->role_name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('userprivilege'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('userprivilege') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 control-label"><b>{{ __('Branch Name') }}</b></label>

                            <div class="col-md-6">
                                <!--<input id="branch" type="text" class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }}" name="branch" value="{{ old('branch') }}" placeholder="{{ __('Branch Name') }}" required autofocus>-->

                                <select id="branch" name="branch" class="form-control"  required autofocus>
                                    
                                    <option value="0" >-- Select Branch --</option>
                                    @foreach ($branch as $Brrows)
                                    <option value="{{$Brrows->branchid}}" >{{$Brrows->branch_name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('branch'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 control-label"><b>{{ __('User Name') }}</b></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="{{ __('Username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 control-label"><b>{{ __('Password') }}</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 control-label"><b>{{ __('Confirm Password') }}</b></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                            </div>
                        </div>
                        

                        <div class="form-group row" style="display: none;">
                            <label for="createdby" class="col-md-4 control-label"><b>{{ __('User createdby') }}</b></label>

                            <div class="col-md-6">
                                <input id="createdby" type="hidden" class="form-control{{ $errors->has('createdby') ? ' is-invalid' : '' }}" name="createdby" value="{{Auth::user()->user_id}}" required >

                                @if ($errors->has('createdby'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('createdby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row ">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    


</div>
@endsection
