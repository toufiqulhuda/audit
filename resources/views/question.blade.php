@extends('layouts.app')

@section('content')
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('Set Question') }}</h3>
 
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
                
                
            </script>
            <!--Catagory Input Form-->
            <div class="service_col service_col_stmt col-md-12">
                <h3 class="page_title">Input Form:</h3> 
                <form class="form-horizontal" method="POST" action="{{ route('add-question') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('catlist') ? ' has-error' : '' }} row">
                        <label for="catlist" class="col-md-4 control-label"><b>{{__('Catagory List :')}}</b></label>

                        <div class="col-md-6">
                            <!--<input id="catType" type="text" class="form-control" name="catType" required>-->
                            <select id="catlist" name="catlist" class="form-control" required autofocus>
                                <option value="" >-- Select Catagory --</option>
                                @foreach ($cat as $pCat)
                                <option value="{{ $pCat->catid}}" >{{ $pCat->cat_name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('catlist'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('catlist') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('obj') ? ' has-error' : '' }} row">
                        <label for="obj" class="col-md-4 control-label"><b>{{__('Objective  :')}}</b></label>

                        <div class="col-md-6">
                            <!--<input id="obj" type="text" class="form-control" name="obj" required autofocus>-->
                            <textarea id="obj" class="form-control{{ $errors->has('obj') ? ' is-invalid' : '' }}" name="obj" value="{{ old('obj') }}" placeholder="{{ __('') }}" required autofocus>{{ old('Objective') }}</textarea>
                            
                            @if ($errors->has('obj'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('obj') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Add Question') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="service_col service_col_stmt col-md-12">
                <h3 class="page_title">Table Data:</h3>
                <table id="ques_list" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                            <th >#SL</th>
                            <th >Catagory</th>
                            <th >Objective</th>
                            <th >Created By</th>
                            <th >Create Date</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($ques as  $row)
                        <tr>
                            <td >{{ $row->ques_id }}</td>
                            <td >{{ $row->cat_name }}</td>
                            <td >{{ $row->question }}</td>
                            <td >{{ $row->username }}</td>
                            <td >{{ $row->created_at }}</td>
                            <td ></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                         <tr>
                            <th >#SL</th>
                            <th >Catagory</th>
                            <th >Objective</th>
                            <th >Created By</th>
                            <th >Create Date</th>
                            <th >Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>    
            
    </div>
</div>
@endsection