@extends('layouts.app')
 
@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('User Role') }}</h3>
 
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
            <!--<div class="service">-->
                <div class="service_col service_col_stmt col-md-12">
                    <h3 class="page_title">Input Form:</h3> 
                    <form class="form-horizontal" method="POST" action="{{ route('user-role') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('rolename') ? ' has-error' : '' }} row">
                            <label for="rolename" class="col-md-4 control-label"><b>{{__('Role Name')}}</b></label>

                            <div class="col-md-6">
                                <input id="rolename" type="text" class="form-control" name="rolename" required>

                                @if ($errors->has('rolename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rolename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="service_col service_col_stmt col-md-12">
                    <h3 class="page_title">Table of Content:</h3> 
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                             <tr>
                                <th >#Id</th>
                                <th >Role Name</th>
                                <th >Created By</th>
                                <th >Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($role as  $row)
                            <tr>
                                <td >{{ $row->roleid }}</td>
                                <td >{{ $row->role_name }}</td>
                                <td >{{ $row->username }}</td>
                                <td >{{ $row->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <!--</div>-->
            
    </div>

</div>

@endsection