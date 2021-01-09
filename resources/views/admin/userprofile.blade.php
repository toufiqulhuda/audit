@extends('layouts.app')
 
@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('User Profile') }}</h3>
 
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
    
     
    <div class="ipower_content">
        <div class="ipower_data_table">
            <div class="ipower_data_table_title">Name  </div>
            <div class="ipower_data_table_info">: &nbsp;{{ $users->name }}</div>
        </div>
        <div class="ipower_data_table">
            <div class="ipower_data_table_title">E-Mail </div>
            <div class="ipower_data_table_info">: &nbsp;{{ $users->email }}</div>
        </div>
        <div class="ipower_data_table">
            <div class="ipower_data_table_title">Address  </div>
            <div class="ipower_data_table_info addsInfo">: &nbsp; {{ $users->address }}</div>
        </div>

        <div class="ipower_data_table">
            <div class="ipower_data_table_title">Mobile Number </div>
            <div class="ipower_data_table_info">: &nbsp;{{ $users->mobile }}</div>
        </div> 

        <div class="ipower_data_table">
            <div class="ipower_data_table_title">Office Phone </div>
            <div class="ipower_data_table_info">: &nbsp;</div>
        </div> 

        <div class="ipower_data_table" style="margin-bottom: 16px;">
            <div class="ipower_data_table_title">Date of birth</div>
            <div class="ipower_data_table_info">: &nbsp;</div>
        </div> 

    </div>
</div>

@endsection