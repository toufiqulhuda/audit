@extends('layouts.app')

@section('content')
<div class="dashboard_right_container">
        <h3 class="page_title">{{ __('Branch List') }}</h3>

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
                    $(document).ready(function() {
                        $('#branch_list').DataTable({
                            "scrollX": true
                            
                        });
                        //$('#example').DataTable();
                    } );
                </script>
               
        <!--<div class="service">-->
            <div class="service_col service_col_stmt col-md-12 ">
                <h3 class="page_title">Input Form:</h3>
                <form class="form-horizontal" method="POST" action="{{ route('add-branch') }}">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('branch_code') ? ' has-error' : '' }} row">
                        <label for="branch_code" class="col-md-4 control-label"><b>{{__('Branch Code')}}</b></label>

                        <div class="col-md-6">
                            <input id="branch_code" type="text" class="form-control{{ $errors->has('branch_code') ? ' is-invalid' : '' }}" name="branch_code" value="{{ old('branch_code') }}" placeholder="{{ __('Branch Code') }}" required>

                            @if ($errors->has('branch_code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('branch_code') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('branchname') ? ' has-error' : '' }} row">
                        <label for="branchname" class="col-md-4 control-label"><b>{{__('Branch Name')}}</b></label>

                        <div class="col-md-6">
                            <input id="branchname" type="text" class="form-control {{ $errors->has('branchname') ? ' is-invalid' : '' }}" value="{{ old('branchname') }}" name="branchname"  placeholder="{{ __('Branch Name') }}" required>

                            @if ($errors->has('branchname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('branchname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} row">
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
                    <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }} row">
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
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} row">
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
                    <div class="form-group {{ $errors->has('swift') ? ' has-error' : '' }} row">
                        <label for="swift" class="col-md-4 control-label"><b>{{ __('SWIFT') }}</b></label>

                        <div class="col-md-6">
                            <input id="swift" type="text" class="form-control{{ $errors->has('swift') ? ' is-invalid' : '' }}" name="swift" value="{{ old('swift') }}" placeholder="{{ __('e.s. NBLBBDDH004') }}" required>

                            @if ($errors->has('swift'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('swift') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Add Branch') }}
                            </button>
                        </div>
                    </div>
                </form>
            
            </div>

            
            <div class="service_col service_col_stmt col-md-12">
                <h3 class="page_title">Branch Table:</h3>
                <table id="branch_list" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                            <th >#SL</th>
                            <th >Branch Name</th>
                            <th >Address</th>
                            <th >Contact</th>
                            <th >Email</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($branch as  $row)
                        <tr>
                            <td >{{ $row->branchid }}</td>
                            <td >{{ $row->branch_name }}</td>
                            <td >{{ $row->branch_address }}</td>
                            <td >{{ $row->branch_contact }}</td>
                            <td >{{ $row->branch_email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                         <tr>
                            <th >#SL</th>
                            <th >Branch Name</th>
                            <th >Address</th>
                            <th >Contact</th>
                            <th >Email</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        
        <!--</div>-->
    </div>
</div>

@endsection