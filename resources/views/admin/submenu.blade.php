@extends('layouts.app')
 
@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('SubMenu Management') }}</h3>
 
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
            
    </div>
</div>

@endsection