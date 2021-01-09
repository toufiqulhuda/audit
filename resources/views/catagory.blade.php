@extends('layouts.app')

@section('content')
<?php require_once app_path() . '/helpers.php'; ?>
<div class="dashboard_right_container">
	<h3 class="page_title">{{ __('Catagory') }}</h3>
 
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
                
                function getCatType(sel)
                    {
                        //alert(sel.value);
                        var catType = sel.value;
                        if(catType==1){
                            $("#parentCat").val("");
                            //$("#parentCat").hide();
                            $("#parentCat").attr("disabled", "disabled");
                            
                        }else{
                            //$("#parentCat").show();
                            $("#parentCat").removeAttr("disabled");
                             
                        }
                    }
            </script>
            <!--Catagory Input Form-->
            <div class="service_col service_col_stmt col-md-12">
                <h3 class="page_title">Input Form:</h3> 
                <form class="form-horizontal" method="POST" action="{{ route('add-catagory') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('catType') ? ' has-error' : '' }} row">
                        <label for="catType" class="col-md-4 control-label"><b>{{__('Catagory Type :')}}</b></label>

                        <div class="col-md-6">
                            <!--<input id="catType" type="text" class="form-control" name="catType" required>-->
                            <select id="catType" name="catType" class="form-control"  required autofocus onchange="getCatType(this);">
                                <option value="" >-- Select Type --</option>
                                <option value="1" >Parent Catatogy</option>
                                <option value="2" >Sub Catagory</option>
                            </select>

                            @if ($errors->has('catType'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('catType') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('parentCat') ? ' has-error' : '' }} row">
                        <label for="parentCat" class="col-md-4 control-label"><b>{{__('Parent Catagory :')}}</b></label>

                        <div class="col-md-6">
                            <!--<input id="parentCat" type="text" class="form-control" name="parentCat">-->
                            <select id="parentCat" name="parentCat" class="form-control" autofocus>
                                <option value="" >-- Select Parent Catagory --</option>
                                @foreach ($cat as $pCat)
                                <option value="{{ $pCat->catid}}" >{{ $pCat->cat_name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('parentCat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('parentCat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('nameCat') ? ' has-error' : '' }} row">
                        <label for="nameCat" class="col-md-4 control-label"><b>{{__('Catagory Name :')}}</b></label>

                        <div class="col-md-6">
                            <input id="nameCat" type="text" class="form-control{{ $errors->has('nameCat') ? ' is-invalid' : '' }}" name="nameCat" 
                            value="{{ old('nameCat') }}" required>

                            

                            @if ($errors->has('nameCat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nameCat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Add Catagory') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="service_col service_col_stmt col-md-12">
                <h3 class="page_title">Table Data:</h3>
                <table id="catagory_list" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                            <th >#SL</th>
                            <th >Catagory</th>
                            <th >Parent Catagory</th>
                            <th >Created By</th>
                            <th >Create Date</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($catAll as  $row)
                        <tr>
                            <td >{{ $row->catid }}</td>
                            <td >{{ $row->cat_name }}</td>
                            <td >{{ $row->parent_cat_id }}</td>
                            <td >{{ getCreatedBy($row->created_by) }}</td>
                            <td >{{ $row->created_at }}</td>
                            <td ></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                         <tr>
                            <th >#SL</th>
                            <th >Catagory</th>
                            <th >Parent Catagory</th>
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