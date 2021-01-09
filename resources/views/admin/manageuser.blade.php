@extends('layouts.app')
 
@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('Users Management') }}</h3>
 
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
            <script language="javascript">
                /*$(document).ready(function() {
                    $('#tbl_usermanagement').DataTable({
                        "scrollX": true
                        
                    });
                    //$('#example').DataTable();
                } );*/
            </script>
            
            <table id="tbl_usermanagement" class="table table-striped table-bordered" style="width:100%" >
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Created By</th>
                        <th>Role</th>
                        <th>Branch</th>
                        <th>Created Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($users as $user)
                    <tr>
                        <td >{{ $user->username}}</td>
                        <td >{{ $user->name}}</td>
                        <td >{{ $user->email}}</td>
                        <td >{{ $user->created_by}}</td>
                        <td >{{ $user->role_name}}</td>
                        <td >{{ $user->branch_name}}</td>
                        <td >{{ $user->created_at}}</td>
                        <td > 
                                                    
<form class="form-horizontal" method="POST" action="{{ route('changeStatus') }}">
{{ csrf_field() }}
    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ $user->user_id }}" required >
@if ( $user->isactive  ==1)
    <input id="status" type="hidden" class="form-control" name="status" value="0" required >

    <button type="submit" class="btn btn-success btn-xs">{{ __('Active') }}</button>
@else    
    <input id="status" type="hidden" class="form-control" name="status" value="1" required >

    <button type="submit" class="btn btn-danger btn-xs">{{ __('in-Active') }}</button>
@endif     
</form>                                               
                                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Created By</th>
                        <th>Role</th>
                        <th>Branch</th>
                        <th>Created Date</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
    </div>
</div>

@endsection